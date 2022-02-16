<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function celulares(){
        return view('celulares');
    }

    public function consolas(){
        return view('consolas');
    }


    public function computadores(){
        return view('computadores');
    }


    public function camaras(){
        return view('camaras');
    }


    public function drones(){
        return view('drones');
    }
}
