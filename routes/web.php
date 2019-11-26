<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/{id}','UserController@show');
Route::get('/passport/{id}','UserController@showPassport');
Route::get('/lessons/{id}','UserController@showLesson');
Route::get('/pay','PayOrderController@store');
