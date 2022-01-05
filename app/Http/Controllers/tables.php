<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tablesM;

class tables extends Controller
{
    public function index(){
        $tables_1  = tablesM::where('class',1)->where('reserved',0)->count();   
        $tables_2  = tablesM::where('class',2)->where('reserved',0)->count();   
        $tables_3  = tablesM::where('class',3)->where('reserved',0)->count();   
        $tables_4  = tablesM::where('class',4)->where('reserved',0)->count();   
        $page_title = "Reservation";
        return view('pages.tables')->with('page_title',$page_title)
                                    ->with('tables_1',$tables_1)
                                    ->with('tables_2',$tables_2)
                                    ->with('tables_3',$tables_3)
                                    ->with('tables_4',$tables_4);
    }  
    public function reserve_table(Request $request){

    }
}
