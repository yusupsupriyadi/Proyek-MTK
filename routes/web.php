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
    return view('welcome');
});

Route::get('/yusup', 'YusupController@index');
Route::post('/yusup_proses', 'YusupController@Proses');
Route::get('/hafiz', 'HafizController@index');
Route::get('/bintang', 'BintangController@index');
Route::post('/bintang_proses', 'BintangController@Proses');
