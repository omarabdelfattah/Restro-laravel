<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;

class cart extends Controller
{
    public function add_to_cart(Request $request){

        $product  = foodM::findOrFail($request->product_id);   
        $cart = session(['id' =>$product->id , 'qty' => $request->quantity]);
        return redirect()->back()->withSuccess('Added to cart !');
    }
}
