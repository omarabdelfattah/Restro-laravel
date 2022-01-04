<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;

class checkout extends Controller
{
    public function index(){
        // $food  = foodM::where("isoffer",false)->latest()->take(20)->get();   
        $page_title = "Confirm order";
        return view('pages.checkout')->with('page_title',$page_title)->with('food',$food)->with('categories',$categories);
    }                                      
}
