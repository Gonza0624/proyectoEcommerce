<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localizacionController extends Controller
{
    public function __invoke()
    {
        return view('localizacion/index');
    }
}
