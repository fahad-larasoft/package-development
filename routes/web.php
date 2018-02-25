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

// change your existing app route to this:
// we are basically just giving it an optional parameter of "anything"
Route::get('/{path?}', 'HomeController@index')->where('path', '.*');
//regex to match anything (dots, slashes, letters, numbers, etc)