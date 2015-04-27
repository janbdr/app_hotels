<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','WelcomeController@index');

Route::resource('hotels','HotelsController');

Route::get('admin/add_hotels','HotelsController@add_hotels');

Route::get('admin','HotelsController@store');
Route::get('hotels','HotelsController@getData');
