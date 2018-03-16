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

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/movie', function () {
    return view('movie');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/secret', 'HomeController@secret')->name('secret');
