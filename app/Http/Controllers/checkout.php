<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ordersM;
use App\Models\orderfoodM;

class checkout extends Controller
{
    public function index(){
        $page_title = "Confirm order";
        return view('pages.checkout')->with('page_title',$page_title);
    }        
    public function order_confirm(Request $request){
        // Make Order
        $order = new ordersM();
        $order->address = $request->address;
        $order->user_id = auth()->user()->id;
        $order->save();

        $all = \Cart::content();
        foreach($all as $product){
            $orderfood = new orderfoodM();
            $orderfood->order_id = $order->id;
            $orderfood->food_id = $product->id;
            $orderfood->quantity = $product->qty;
            $orderfood->save();
        }
        \Cart::destroy();
        return redirect()->Route("landing")->withSuccess('Order Confirmed');

    }              
                    
}
