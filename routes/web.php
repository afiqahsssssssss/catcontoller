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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use App\Http\Controllers\catController;
Route::get('/about', 'App\Http\Controllers\catController@about');
Route::get('/team', 'App\Http\Controllers\catController@team');
Route::get('/services', 'App\Http\Controllers\catController@services'); 
