<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing;
use App\Http\Controllers\account;
use App\Http\Controllers\offers;
use App\Http\Controllers\tables;
use App\Http\Controllers\categories;

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

Route::get("/",             [landing::class,'index']          )->name('landing');
Route::get("/offers",       [offers::class,'index']            )->name('offers');
Route::get("/tables",       [tables::class,'index']            )->name('tables');
Route::get("/cat/{id}",     [categories::class,'categories']    );
Route::get("/login",        [account::class,'login']            )->name('login');
Route::get("/register",     [account::class,'register']         )->name('register');

