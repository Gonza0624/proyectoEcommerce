<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productos;
use App\Models\categorias;

class productosController extends Controller{

        public function index(){
        $productos = productos::all();
        return view('productos/index', compact('productos'));
    }

    public function crear(){
        $categoria=categorias::all();
        return view('productos.crear', compact('categoria'));
    }
    
    public function guardar(Request $request)
    {
        // dd($request);
        $nombreContraller = $request['nombre'];
        $precioContraller = $request['precio_venta'];
        $categoriaContraller = $request['categorias_id'];

        $producto = new productos();
        $producto->nombre = $nombreContraller;
        $producto->precio_venta = $precioContraller;
        $producto->categoria_id = $categoriaContraller;
        $producto->save();

        return redirect(route('productos'))->with('crear','ok');
    }



    public function detalle($jumama)
    {
        $detalle2 = productos::join('categorias','categorias.id','=','productos.categoria_id')
        ->where('productos.id',$jumama)->get();

   

        $detalle = productos::find($jumama);
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
        $precioContraller = $request['precio_venta'];

        $actualizado = productos::whereId($id)->firstOrFail();
        $actualizado -> nombre = $nombreContraller;
        $actualizado -> precio_venta = $precioContraller;
        $actualizado -> save();

        return redirect(route('productos'))->with('editar','ok');;
    }

    public function eliminar(productos $id)
    {
        $id->delete();
        return redirect('/productos')->with('eliminar','ok');
    }
}