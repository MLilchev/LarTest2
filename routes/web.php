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


//Closure function
 Route::get('/', function () {
    // return 'Hello, world!';
    return view('index');
 });

 Route::get('about', function()
 {
     return view('about');
 });

 Route::get('products', function ()
 {
     return view('products');
 });

 Route::get('services', function ()
 {
     return view('services');
 });


// Calling an action inside a controller
//Route::get('/', 'WelcomeController@index');
