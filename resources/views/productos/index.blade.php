@extends('layouts.plantilla')

@section('titulo', 'Productos')

@section('contenido')

    <h2 class="mb-5">Registro de productos</h2>

    <table style="text-align: center;" class="table table-striped table-hover">

        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">precio</th>
        <th scope="col">Detalle</th>

        @foreach ($productos as $pto)
            <tr>
                <th scope="col">{{ $pto->id }}</th>
                <td>{{ $pto->nombre }}</td>
                <td>{{ $pto->precio }}</td>
                <td><a class="btn btn-primary" href="{{ route('productos.detalle', $pto->id) }}">Detalle</a></td>
            </tr>
        @endforeach

    </table>
    <br />
    <button style="width: 100%" id="btn" onclick="location.href='{{ Route('productos.crear') }}'" type="button"
        class="btn btn-outline-success">Crear Producto</button>
@stop