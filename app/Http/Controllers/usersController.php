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

    public function eliminar(usuarios $id)
    {
        $id->delete();
        return redirect('/users');
    }

    public function editar($id)
    {
        $detalle = usuarios::find($id);
        return view('usuarios.editar', compact('detalle'));
    }

    public function guardar_edit(Request $request, $id)
    {
        // dd($request);
        $nombreContraller = $request['nombre'];
        $correoContraller = $request['correo'];

        // $usuarioAct = new usuarios();
        $actualizado=usuarios::whereId($id)->firstOrFail();
        $actualizado->nombre = $nombreContraller;
        $actualizado->correo = $correoContraller;
        $actualizado->save();

        return redirect('/users');
    }
}
