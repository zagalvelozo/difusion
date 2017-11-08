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
Route::get('user/{id}', 'UserController@show');
Route::post('login', 'UserController@show');
Route::get('/', function () {
    return view('in');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('blade', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
