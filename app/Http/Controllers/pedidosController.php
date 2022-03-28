<?php
namespace App\Http\Controllers;
use App\Models\Pedidos;
use Illuminate\Http\Request;


class pedidosController extends Controller
{
    public function index(){
        $pedidos = Pedidos::all();
        return view('pedidos/index', compact('pedidos'));
    }

    public function crear()
    {
        return view('pedidos.crear');
    }



    public function guardar(Request $request)
    {
        // dd($request);
        $articuloContraller = $request['articulo'];
        $fechaContraller = $request['fecha'];
        $proveedorContraller = $request['proveedor'];

        $pedidos = new Pedidos();
        $pedidos->articulo = $articuloContraller;
        $pedidos->fecha = $fechaContraller;
        $pedidos->proveedor = $proveedorContraller;
        $pedidos->save();

        return redirect('/pedidos')->with('editar','ok');
    }


}
