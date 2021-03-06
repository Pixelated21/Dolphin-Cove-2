<?php

use App\Http\Controllers\Homepage;
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


Route::get("/",[Homepage::class,"index"]);

Route::get('/', 'App\Http\Controllers\loginController@login');
Route::get('admindashboard', 'App\Http\Controllers\adminController@adminDashboard');
Route::get('salesrepdashboard', 'App\Http\Controllers\salesRepController@salesRepDashboard');
