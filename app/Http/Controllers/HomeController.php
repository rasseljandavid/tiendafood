<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteConfig;
use App\Product;
use App\Order;
use App\Company;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboard['totalCompany']             = Company::count();
        $dashboard['totalActiveMenu']          = Product::where('active', 1)->count();
        $dashboard['totalNonActiveMenu']       = Product::where('active', 0)->count();
        $dashboard['totalCompeletedOrders']    = Order::where('completed', 1)->count();
        $dashboard['totalNewOrders']           = Order::where('completed', 0)->count();
        $dashboard['config']                   = SiteConfig::all()->toArray();
     
        return view('admin.dashboard', $dashboard);
    }

    public function siteConfig() {
        $siteconfig = SiteConfig::all();
        return view('admin.siteconfig', compact('siteconfig'));
    }

    public function updateSiteConfig(Request $request) {
   
        foreach($request->config as $key => $value) {
            $siteconfig = SiteConfig::where('key', $key)->first();
            $siteconfig->value = $value;
            $siteconfig->save();
        }

        return redirect('siteconfig');
    }
}
