@extends('layouts.plantilla')

@section('titulo', 'Detalle')

@section('css')
    <link rel="stylesheet" href="{{ asset('CSS/detalle.css') }}">
@stop

@section('contenido')
    <div class="container">
        <div>
            <h2 class="text-center mb-4">Detalles de usuario</h2>
        </div>
        <table class="table table-striped table-hover">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <br>
            <tr>
                <td>{{ $detalle->id }}</td>
                <td>{{ $detalle->nombre }}</td>
                <td>{{ $detalle->correo }}</td>
            </tr>
        </table>
        <br>
        <button id="btn" style="width: 100%;" onClick='history.go(-1);' type="button" class="btn btn-success">Volver
            atras</button>
    </div>
@stop
