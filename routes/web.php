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
    return view('template');
});

//daftar
Route::get('/daftar', 'App\Http\Controllers\DaftarController@index');
Route::post('/daftar', 'DaftarController@store');
Route::get('/daftar/{id}', 'App\Http\Controllers\DaftarController@detail');
Route::get('/daftar/{id}/delete', 'App\Http\Controllers\DaftarController@delete');
Route::post('/daftar/{id}/update', 'App\Http\Controllers\DaftarController@update');
Route::get('/daftar/{id}/edit', 'App\Http\Controllers\DaftarController@edit');

//resources
// Route::resource('/daftar', 'DaftarController');

// Route::resource('/table', 'TableController');
