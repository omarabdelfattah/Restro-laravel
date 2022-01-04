<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;

class cart extends Controller
{
    public function add_to_cart(Request $request){

        // $product  = foodM::findOrFail($request->product_id);   
        // $cart = session(['id' =>$product->id , 'qty' => $request->quantity]);
        // return redirect()->back()->withSuccess('Added to cart !');

        $product  = foodM::findOrFail($request->product_id);   
        \Cart::add([
                    'id' =>$product->id ,
                    'name' => $product->name , 
                    'qty' => $request->quantity,
                    'price' => $product->price , 
                    'weight' => 0,
                    'options' => [
                        'img' => $product->image,
                        'tax'   => 0.14,
                    ],
                ]);
        
        return redirect()->back()->withSuccess('Added to cart !');
    }
    public function remove_from_cart($rowId){
        \Cart::remove($rowId);
        return redirect()->back()->withSuccess('Product removed !');
    }
    public function remove_all(Request $request){
        \Cart::destroy();
        return redirect()->back()->withSuccess('Removed all from cart !');
    }
}
