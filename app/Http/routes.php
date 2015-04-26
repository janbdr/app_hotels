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
//Route::get('contact','WelcomeController@contact');
//Route::get('about','PagesController@about');

Route::resource('hotels','HotelsController');

Route::get('admin/add_hotels','HotelsController@add_hotels');

//Route::get('admin/add_hotels', function(){
//    return view('admin.add_hotels');
//});

Route::get('admin','HotelsController@store');
Route::get('hotels','HotelsController@getData');
//Route::bind('hotels',function($value,$route){
//   return App\Hotel::whereSlug($value)->first(); 
//});
