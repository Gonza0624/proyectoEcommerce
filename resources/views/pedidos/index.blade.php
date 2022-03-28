@extends('layouts.plantilla')

@section('titulo', 'Productos')

@section('contenido')

    <h2 class="mb-5">Registro de pedidos</h2>

    <table style="text-align: center;" class="table table-striped table-hover">

        <th scope="col">ID</th>
        <th scope="col">Articulo</th>
        <th scope="col">Codigo</th>
        <th scope="col">Fecha</th>
        <th scope="col">id_prov</th>

        @foreach ($pedidos as $ped)
            <tr>
                <th scope="col">{{ $ped->id_ped }}</th>
                <td>{{ $ped->articulo }}</td>
                <td>{{ $ped->codigo }}</td>
                <td>{{ $ped->fecha }}</td>
                <td>{{ $ped->id_prov }}</td>
                
            </tr>
        @endforeach

    </table>
    <a style="width: 100%" id="btn" href="{{Route('pedidos.crear')}}" type="button" class="btn btn-outline-success">Crear pedido</a>
   
@stop