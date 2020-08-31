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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/panel', 'HomeController@panel')->name('panel');

Route::get('/mascotas', 'HomeController@mascotasIndex')->name('mascotas.index');
Route::get('/mascota/historial/{id}', 'HomeController@mascotasHistorial')->name('mascotas.historial');

Route::post('/mascota/envio', 'HomeController@mascotasEnvio')->name('mascotas.envioDatos');
