<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function panel(){
        return view('panel.principal');
    }
    public function mascotasIndex(){
        return view('mascotas.index');
    }
    public function mascotasHistorial($id){
        return view('mascotas.historial');
    }
    public function registro(){
        return view('panel.registro');
    }
    public function mascotasEnvio(Request $request){
        return $request;
    }
}
