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

        // dd($request);
        $nombreContraller= $request['nombre'];
        $correoContraller= $request['correo'];

        // $correo = $request -> id;

        // dd($request);


        $usuario = new usuarios();
        $usuario -> name = $nombreContraller;
        $usuario -> email = $correoContraller;
        // $usuario->identificacion = $identificacion;
        $usuario->save();


        return redirect('/users');

        // $usuarios = usuarios ::all();
        // return(view('usuarios.index', compact('usuarios')));

        // $producto = new Producto();
        // $producto->id_usuario = $usuario->id;


        // dd($request['correo']);
        // return view('usuarios.guardar');

     }
}
