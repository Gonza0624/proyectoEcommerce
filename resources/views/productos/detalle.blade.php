@extends('layouts.plantilla')

@section('titulo', 'Detalle')

@section('css')
    <link rel="stylesheet" href="{{ asset('CSS/detalles.css') }}">
@stop

@section('contenido')
    <div class="container">
        <div>
            <h2 class="text-center mb-4">Detalles del producto</h2>
        </div>
        <table class="table table-striped table-hover">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

            <br>

            <tr>
                <th scope="col">{{ $detalle->id }}</th>
                <td scope="col">{{ $detalle->nombre }}</td>
                <td scope="col">{{ $detalle->precio }}</td>

                <td><button onclick="location.href='{{ route('productos.editar', $detalle->id) }}'"
                class='btn btn-warning'><img src="{{ asset('img/iconos/editar.png') }}" alt=""></button></td>

                <form action="{{ route('productos.eliminar', $detalle->id) }}" class="eliminar" method="POST">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit" class='btn btn-danger'><img
                    src="{{ asset('img/iconos/eliminar.png') }}" alt=""></button></td>
                </form>

            </tr>

        </table>
        <br>
        <button id="btn" style="width: 100%;" onClick='history.go(-1);' type="button" class="btn btn-success">Volver
            atras</button>
    </div>
@stop