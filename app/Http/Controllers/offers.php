<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offersM;

class offers extends Controller
{
    public function index(){
        $food  = offersM::with('food')->take(20)->get();   
        $page_title = "Our Offers";
        return view('pages.offers')->with('page_title',$page_title)->with('food',$food);
    }  
}
