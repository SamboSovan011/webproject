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
    return view('frontend.home');
});

Route::get('/master', function () {
    return view('layouts.master_frontend');
});

Route::get('/hello', function () {
    return 'This is hello world';
});

Route::get('/hello/hi/{name}', function($name){
	return 'Hello '.$name;
});

Route::get('/him', "BookController@hello");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



