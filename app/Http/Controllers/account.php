<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class account extends Controller
{
    public function showlogin(){
        $page_title = "Login";
        return view('pages.login')->with('page_title',$page_title);
    }   

    public function login(){

    }   


    public function showregister(){
        $page_title = "Register";
        return view('pages.register')->with('page_title',$page_title);
    }   

    public function register(){

    }   
}
