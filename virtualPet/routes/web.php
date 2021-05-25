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


Auth::routes();

/* Route::get('/', function () {
    return view('home');
}); */
Route::get('/', 'HomeController@index')->name('home');

/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('/panel', 'HomeController@panel')->name('panel');

Route::get('/mascotas', 'HomeController@mascotasIndex')->name('mascotas.index');
Route::get('/mascota/historial/{id}', 'HomeController@mascotasHistorial')->name('mascotas.historial');

Route::post('/mascota/envio', 'HomeController@mascotasEnvio')->name('mascotas.envioDatos');
Route::get('/mascota/perfil', 'MascotasControlador@perfil')->name('mascotas.perfil');

Route::get('/registro', 'HomeController@registro')->name('nuevo.registro');
Route::get('/productos', 'ProductosControlador@index')->name('productos.index');
Route::get('/producto/detalle', 'ProductosControlador@detalle')->name('producto.detalle');