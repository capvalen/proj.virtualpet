<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosControlador extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
			return view('productos.index');
		}
    public function detalle(){
			return view('productos.detalle');
		}
}
