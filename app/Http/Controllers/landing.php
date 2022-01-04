<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;
use App\Models\categoriesM;

class landing extends Controller
{
    public function index(){
        
        $food  = foodM::where("isoffer",false)->latest()->take(20)->get();   
        $page_title = "Restro Restaurant";
        return view('pages.landing')->with('page_title',$page_title)->with('food',$food);
    }                                      
}
