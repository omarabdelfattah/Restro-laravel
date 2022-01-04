<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;

class checkout extends Controller
{
    public function index(){
        $page_title = "Confirm order";
        return view('pages.checkout')->with('page_title',$page_title);
        
    }                                      
}
