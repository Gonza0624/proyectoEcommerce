<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\productos;

class FrontController extends Controller
{
    public function index()
    {
        $vista = productos::all();
        return View('front.inicio',compact('vista'));
    }
    public function detalle($id)
    {
        $detalle = productos::findorfail($id);
        return View ('front.detalle',compact('detalle'));
    }

    public function traercategoria($nombre)
    {
        $productos = productos::JOIN('categoria', 'categoria.id_ca', '=','id_categoria')->WHERE('categoria.nombre', $nombre)->get();
        $nombrecategoria = productos::JOIN('categoria', 'categoria.id_ca', '=','id_categoria')->WHERE('categoria.nombre', $nombre)->take(1)->get();

        return view ('categorias.categoria', compact('productos', 'categoriaspro','nombrecategoria'));
        
    }

}
