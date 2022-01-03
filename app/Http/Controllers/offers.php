<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\offersM;

class offers extends Controller
{
    public function index(){
        $offers  = offers::latest()->take(10)->get();   
        $page_title = "العروض";
        return view('pages.offers')->with('page_title',$page_title)->with('offers',$offers);
    }  
}
