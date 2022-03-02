<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;

class productosController extends Controller
{
    public function index(){
        $productos = productos::all();
        return view('productos/index', compact('productos'));
    }

    public function crear(){
        return view('productos/crear');
    }

    public function guardar(Request $request)
    {
        // dd($request);
        $nombreContraller = $request['nombre'];
        $precioContraller = $request['precio'];

        $producto = new productos();
        $producto->nombre = $nombreContraller;
        $producto->precio = $precioContraller;
        $producto->save();

        return redirect('/productos');
    }

    public function detalle($id)
    {
        $detalle = productos::find($id);
        return view('productos/detalle', compact('detalle'));
    }

    public function editar($id)
    {
        $detalle = productos::find($id);
        return view('productos.editar', compact('detalle'));
    }

    public function guardar_edit(Request $request, $id)
    {
        // dd($request);
        $nombreContraller = $request['nombre'];
        $precioContraller = $request['precio'];

        $actualizado = productos::whereId($id)->firstOrFail();
        $actualizado -> nombre = $nombreContraller;
        $actualizado -> precio = $precioContraller;
        $actualizado -> save();

        return redirect('/productos');
    }

    public function eliminar(productos $id)
    {
        $id->delete();
        return redirect('/productos');
    }
}