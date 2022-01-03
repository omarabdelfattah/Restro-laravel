<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('gahez');
// });

Route::get("/index",        [home::class,'index']       )->name('home');
Route::get("/offers",       [home::class,'offers']      )->name('offers');
Route::get("/offers",       [home::class,'offers']      )->name('offers');
Route::get("/tables",       [home::class,'tables']      )->name('tables');
Route::get("/cat/{id}",     [cat::class,'cat']          );
Route::get("/login",        [home::class,'login']       )->name('login');
Route::get("/register",     [home::class,'register']    )->name('register');
