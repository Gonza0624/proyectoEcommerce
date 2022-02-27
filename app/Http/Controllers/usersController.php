<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usersController extends Controller
{
    public function index()
    {
        $usuarios = usuarios::all();
        return view('usuarios/index', compact('usuarios'));
    }

    public function crear()
    {
        return view('usuarios.crear');
    }

    public function guardar(Request $request)
    {
        // dd($request);
        $nombreContraller = $request['nombre'];
        $correoContraller = $request['correo'];

        $usuario = new usuarios();
        $usuario->nombre = $nombreContraller;
        $usuario->correo = $correoContraller;
        $usuario->save();
        
        return redirect('/users');
    }

    public function detalle($id)
    {
        $detalle = usuarios::find($id);
        return view('usuarios.detalle', compact('detalle'));
    }

    public function eliminar($id)
    {
        $usu = usuarios::find($id);

        $usu->delete();

        return redirect('/users');
    }
}
