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


Route::resource('absensi', 'AbsensiController');

Route::post('/absensi/create','AbsensiController@store');

Route::get('/absensi/{id}','AbsensiController@show');

Route::get('/absensi/{id}/edit','AbsensiController@edit');

Route::put('/absensi/{id}','AbsensiController@update');

Route::delete('/absensi/{id}' , 'AbsensiController@destroy');

