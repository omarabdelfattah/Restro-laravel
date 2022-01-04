<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foodM;
use App\Models\categoriesM;

class categories extends Controller
{
    public function index($id){
        $food  = foodM::where("isoffer",false)->where("cat_id",$id)->latest()->take(20)->get();   
        $page_title  = categoriesM::select("name")->where("id",$id)->get()->first()->name;  
        $categories  = categoriesM::latest()->take(7)->get();   
        return view('pages.landing')->with('page_title',$page_title)->with('food',$food)->with('categories',$categories);
    }          
}
