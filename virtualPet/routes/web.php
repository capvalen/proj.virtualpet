<?php
use Illuminate\Support\Facades\Auth;
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
	return view('auth.login');
});
//Route::get('/', 'HomeController@index')->name('home');

/* Route::get('/home', 'HomeController@index')->name('home'); */
Auth::routes();

Route::get('/panel', 'HomeController@panel')->name('panel')->middleware('auth');

Route::get('/mascotas', 'HomeController@mascotasIndex')->name('mascotas.index')->middleware('auth');
Route::get('/mascota/historial/{id}', 'HomeController@mascotasHistorial')->name('mascotas.historial')->middleware('auth');

Route::post('/mascota/envio', 'HomeController@mascotasEnvio')->name('mascotas.envioDatos')->middleware('auth');
Route::get('/mascota/perfil/{pet?}', 'MascotasControlador@perfil')->name('mascotas.perfil')->middleware('auth');
Route::get('mascotas/nueva/visita', 'MascotasControlador@visita')->name('nueva.visita')->middleware('auth');

Route::get('/registro', 'HomeController@registro')->name('nuevo.registro')->middleware('auth');
Route::get('/productos', 'ProductosControlador@index')->name('productos.index')->middleware('auth');
Route::get('/producto/detalle', 'ProductosControlador@detalle')->name('producto.detalle')->middleware('auth');