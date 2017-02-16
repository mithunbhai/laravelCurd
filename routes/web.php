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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/deleteData/{id}', 'HomeController@deleteData');
Route::get('/editData/{id}', 'HomeController@editData');
Route::post('/updateData/{id}', 'HomeController@updateData');
