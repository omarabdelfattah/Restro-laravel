<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing;
use App\Http\Controllers\account;
use App\Http\Controllers\offers;
use App\Http\Controllers\tables;
use App\Http\Controllers\categories;
use App\Http\Controllers\cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('gahez', function () {
    // return view('welcome');
    return view('gahez');
});



Route::get("/",             [landing::class,'index']       )->name('landing');
Route::get("/offers",       [offers::class,'index']        )->name('offers');
Route::get("/tables",       [tables::class,'index']        )->name('tables');
Route::get("/cat/{id}",     [categories::class,'index']    )->name('cat');

Route::post("/add_to_cart", [cart::class,    'add_to_cart']      )->name('add_to_cart');
Route::get("/remove_from_cart/{id}", [cart::class,    'remove_from_cart']      )->name('remove_from_cart');
Route::get("/remove_all", [cart::class,    'remove_all']      )->name('remove_all');


Route::get("/checkout", [checkout::class,    'index']      )->name('checkout');
Route::post("/checkout", [checkout::class,    'order_confirm']      )->name('checkout');

Route::group(['middleware' => 'guest' ],function(){
    Route::get("/login",            [account::class,    'Showlogin']            )->name('login');
    Route::post("/login",           [account::class,    'login']                )->name('login');
    Route::get("/register",         [account::class,    'Showregister']         )->name('register');
    Route::post("/register",        [account::class,    'register']             )->name('register');
});

Route::group(['middleware' => 'auth' ],function(){
    Route::get("/logout",                   [account::class,'logout']                   )->name('logout');
});