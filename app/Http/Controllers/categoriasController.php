<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function celulares()
    {
        return view('categorias/celulares');
    }

    public function consolas()
    {
        return view('categorias/consolas');
    }


    public function computadores()
    {
        return view('categorias/computadores');
    }


    public function camaras()
    {
        return view('categorias/camaras');
    }


    public function drones()
    {
        return view('categorias/drones');
    }
}
