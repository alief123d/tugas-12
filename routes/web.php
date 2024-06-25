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

// use ;
// use ;

// Route::get('/', 'HomeController@index');
Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route Registrasi
Route::get('/register', 'App\Http\Controllers\AuthController@register');
Route::post('/register', 'App\Http\Controllers\AuthController@store');

// Route Welcome
// Route::get('/welcome', function(){
//     return view('welcome');
// });