<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;

class cart extends Controller
{
    public function add_to_cart(Request $request){


        $product  = foodM::with('offers')->findOrFail($request->product_id);

        if(!empty($product->offers->first()->new_price)){

           $price = $product->offers->first()->new_price;

        }else{
            $price = $product->price;
        }
        $row = \Cart::add([
            'id' =>$product->id ,
            'name' => $product->name , 
            'qty' => $request->quantity,
            'price' => $price , 
            'weight' => 0,
            'discount' => 20,
        ]);
        
        if($row){
             return redirect()->back()->withSuccess('Added to cart !');
        }else{
            return redirect()->back();
        }

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
