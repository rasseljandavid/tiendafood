<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Product;
use Carbon\Carbon;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        for($i=0; $i<count($companies); $i++) {
            $companies[$i]->branches = json_decode($companies[$i]->branches);
            $companies[$i]->schedules = json_decode($companies[$i]->schedules);
        }

        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Save the file if exist
        $filename = '';
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = 'company_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/companies/', $filename);
        }

        $company = new Company;
        $company->title     = $request->title;
        $company->slug      = $request->url;
        $company->image     = $filename;
        $company->branches  = json_encode($request->branches);
        $company->schedules = json_encode($request->schedules);
        $company->save();

        return redirect('companies');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Request $request)
    {

        $company_arr = Company::where('slug', $slug)->firstOrFail();


        $cookies = [];
        $cookies['name']    = $request->cookie('name');
        $cookies['mobile']  = $request->cookie('mobile');
        $cookies['branch']  = $request->cookie('branch');


        $company  = ['name' => $company_arr->title, 'redirect' => '/' . $company_arr->slug];
        $branches  = json_decode($company_arr->branches);
        $schedules = json_decode($company_arr->schedules);
       
        foreach($schedules as $schedule) {
            $slots[substr($schedule, 0 ,-3)] = date("hA", strtotime($schedule));
        }
       
        //Slots of available delivery
       // $slots = ["11" => "11AM" , "13" => "1PM" , "15" => "3PM" , "17" => "5PM" ];

        //Get the current time
        $now =  Carbon::now();
        //For current day slot
        foreach($slots as $key => $slot) {
            //if the time now is more than the 15mins of the current slot use the current day
            if ($now->diffInMinutes(Carbon::createFromTime($key,0,0), false) > 50) {
               
                $deliverydates[Carbon::createFromTime($key,0,0)->toDayDateTimeString('D')] = Carbon::createFromTime($key,0,0)->toDayDateTimeString('D');
            }

        }

       
        //For next day slots
        foreach($slots as $key => $slot) {
            if(Carbon::tomorrow()->format('D') == "Sun") {
               $deliverydates[Carbon::createFromTime($key + 48,0,0)->toDayDateTimeString('D')] = Carbon::createFromTime($key + 48,0,0)->toDayDateTimeString('D');
            } else {
                $deliverydates[Carbon::createFromTime($key + 24,0,0)->toDayDateTimeString('D')] = Carbon::createFromTime($key + 24,0,0)->toDayDateTimeString('D');
            }
        }

        $products = Product::where('active', 1)->orderBy('rank')->get();

        return view('companies.show', compact('products', 'deliverydates', 'company', 'branches', 'cookies'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company->branches  = json_decode($company->branches);
        $company->schedules = json_decode($company->schedules);

        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->title     = $request->title;
        $company->slug      = $request->url;

        $schedules = array();
        for($i=0; $i<count($request->schedules);$i++) {
            $schedules[$i] = date("G:i", strtotime($request->schedules[$i]));
        }
   
        if( $request->hasFile('image') ) {
            $file = $request->file('image');
            $filename = 'company_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/companies/', $filename);
            $company->image = $filename;
        }

        $company->branches  = json_encode($request->branches);
        $company->schedules = json_encode($schedules);

        $company->save();

        return redirect('companies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $id = $company->delete();

        return redirect('companies');
    }
}
