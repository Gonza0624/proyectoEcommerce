<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usersController extends Controller
{
    public function index(){
        $usuarios = usuarios::all();
        return view('usuarios/index', compact('usuarios'));
    }

    public function crear(){

       return view('usuarios.crear');
    }

    public function guardar(Request $request){
        
        dd($request['correo']);
        // dd($request['correo']);
        // return view('usuarios.guardar');
    
     }
}
