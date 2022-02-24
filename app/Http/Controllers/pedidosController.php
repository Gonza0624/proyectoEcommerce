<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidosController extends Controller
{
    public function __invoke()
    {
        return view('pedidos/index');
    }
}
