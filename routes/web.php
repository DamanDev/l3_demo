<?php

use Illuminate\Http\Request;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	dd(trans('welcome.messages'));
	return view('welcome');
});

Route::get('/form', function(){
	return view('form');
});

Route::post('/file', function(Request $request){
	$request->file->store('myfile');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
