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

Route::view('/', 'home')->name('Home');
Route::view('/getStarted', 'getStarted')->name('GetStarted');
Route::view('/login', 'login')->name('login');
Route::view('/employer-home', 'employer-home')->name('employer-home');
Route::view('/employer-getStarted', 'employer-getStarted')->name('employer-getStarted');