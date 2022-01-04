<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\paymentsM;

class account extends Controller
{
    public function showlogin(){
        $page_title = "Login";
        return view('pages.login')->with('page_title',$page_title);
    }   

    public function login(Request $request){

        if( auth()->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]) ){
            return redirect()->Route('landing')->withSuccess('Logged in successfully');
        }else{
            return redirect()->back()->withErrors('Email or password is incorrect');
        }
    }   

    public function logout(){
        if(auth()->check()){
            auth()->logout();
            return redirect(Route('login'));
        }
    }
    public function showregister(){
        $page_title = "Register";
        return view('pages.register')->with('page_title',$page_title);
    }   

    public function register(Request $request){
        // return $request;
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $payments = paymentsM::create([ 'credit_card' => $request->credit_card , 'user_id' => $user->id]);
        if(auth()->login($user) ) {
            return redirect()->Route('landing')->withSuccess('Registered successfully');
        }else{
            return redirect()->back()->withErrors('Please insert all informations');
        }
    }   
}
