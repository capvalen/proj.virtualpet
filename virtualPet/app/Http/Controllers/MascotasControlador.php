<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class MascotasControlador extends Controller
{
	/**
	 * Handle the incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function __invoke(Request $request)
	{
		//
	}
	public function perfil($pet = null){
		return view('mascotas.perfil');
	}
	public function visita(){
		return view('mascotas.nueva_visita');
	}

}
