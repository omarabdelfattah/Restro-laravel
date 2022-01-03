<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablesM;

class tables extends Controller
{
    public function index(){
        $tables  = tablesM::latest()->take(10)->get();   
        $page_title = "العروض";
        return view('pages.tables')->with('page_title',$page_title)->with('tables',$tables);
    }  
}
