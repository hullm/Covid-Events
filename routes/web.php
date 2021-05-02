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

// This one should work but it doesn't
//Route::get('/', [RegistrationController::class, 'index']);

Route::get('/', function () {
    return view('index');
});

Route::get('/registration','App\Http\Controllers\RegistrationController@index'); 
Route::post('registration','App\Http\Controllers\RegistrationController@store');
Route::get('/registration/create','App\Http\Controllers\RegistrationController@create'); 
