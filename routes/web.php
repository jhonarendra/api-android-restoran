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
Route::resource('hidangan', 'HidanganController');
Route::resource('komentar', 'KomentarController');
Route::group(['prefix'=>'pelanggan'], function(){
	Route::resource('', 'PelangganController');
	// http://jhonarendra/progmob-api/public/hidangan/Burger
	Route::post('login', 'PelangganController@login');
	Route::post('register', 'PelangganController@register');
});

Route::get('/', function () {
    return view('welcome');
});
