<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use App\Order;
use App\SiteConfig;

class OrdersController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth')->except('process');
    }

	public function index() {
		$orders = Order::where('completed', 0)->orderBy('created_at', 'desc')->get();

		return view('orders.index', compact('orders'));
	}

	public function showCompleted() {
		$orders = Order::where('completed', 1)->orderBy('updated_at', 'desc')->get();

		return view('orders.completed', compact('orders'));
	}

	public function markCompleted(Order $order) {
		$order->completed = 1;
		$order->save();
		return redirect('orders');
	}

    public function process(Request $request, CookieJar $cookieJar ) {

        
        $companyOrder = new Order();
        $request['mobile'] = str_replace("-", "", $request['mobile']);
        $companyOrder->name = $request['name'];
        $companyOrder->mobile = $request['mobile'];
        $companyOrder->company = $request['company'];
        $companyOrder->branch = $request['branch'];
        $companyOrder->deliverydate = $request['deliverytime'];
        $companyOrder->total = $request['total'];
        $orders = json_decode($_POST['orders']);
        $order_txt = implode(", ", $orders);
        $companyOrder->orders = $order_txt;
  

        $returnVal = $companyOrder->save();

        $chikkaAPI = new \ChikkaSMS();
     
            $name = explode(" ", $request['name']);
            $total = "P" . number_format($request['total'], 2);
       
        if(strlen(trim($request['mobile'])) == 11) {
            
            $messageID = md5(microtime().'abc3');// do not delete.. we need it to be unique
            $text = "Hi {$name[0]}! We received your order of {$order_txt} and it will be delivered on {$request['deliverytime']}. Total is: {$total}. If you have questions or suggestions, please call (045) 308-5345 or add us on Skype: hello@tienda.ph. Thanks for choosing Tienda!";

            $number = $request['mobile'];
            $number = '63'. substr($number, 1);//remove 0
            $response = $chikkaAPI->sendText($messageID, $number, $text);
        }
        //Alert to admin
        $messageID = md5(microtime().'abc34');// do not delete.. we need it to be unique
        $text = "{$request['name']},\n{$request['mobile']},\n{$request['company']} / {$request['branch']},\n{$request['deliverytime']},\n {$total}";
        $number = SiteConfig::where('key', 'CHIKKA_ADMIN_NUMBER')->first();
  
        $response = $chikkaAPI->sendText($messageID, $number->value, $text);

        //Alert to chef
        $messageID = md5(microtime().'abc35');// do not delete.. we need it to be unique
        $text = "{$request['name']},\n{$order_txt},\n{$request['deliverytime']}";
        $number = SiteConfig::where('key', 'CHIKKA_CHEF_NUMBER')->first();
        $response = $chikkaAPI->sendText($messageID, $number->value, $text);
     
        $cookieJar->queue(cookie('branch',  $companyOrder->branch, 45000));
        $cookieJar->queue(cookie('name',  $companyOrder->name, 45000));

        if(!empty($companyOrder->mobile)) {
            $cookieJar->queue(cookie('mobile',  $companyOrder->mobile, 45000));
        }
        return response()->json($returnVal, 200);
    }

    public function destroy(Order $order)
    {
        $id = $order->delete();

        return redirect('orders');
    }
}
