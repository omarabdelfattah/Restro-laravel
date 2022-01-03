<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;

class landing extends Controller
{
    public function index(){
        $food  = food::latest()->take(10)->get();   
        $page_title = "الصفحة الرئيسية";
        return view('pages.landing')->with('page_title',$page_title)->with('food',$food);
    }                                      
}
