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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', 'HomeController@index');

// Route Registrasi
Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');

// Route Welcome
Route::get('/welcome', 'AuthController@welcome');