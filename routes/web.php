<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/lingkaran', function () {
    return view('lingkaran');
});



Route::get('/yusup', 'YusupController@index');
Route::post('/yusup_proses', 'YusupController@Proses');

Route::get('/yusup2', 'Yusup2Contoller@index');
Route::post('/yusup2_proses', 'Yusup2Contoller@Proses');

Route::get('/yusup3', 'Yusup3Controller@index');
Route::post('/yusup3_proses', 'Yusup3Controller@Proses');

Route::get('/hafiz', 'HafizController@index');
Route::post('/hafiz_proses', 'HafizController@Proses');
Route::get('/bintang', 'BintangController@index');
Route::post('/bintang_proses', 'BintangController@Proses');
