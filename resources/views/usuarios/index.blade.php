@extends('layouts.plantilla')

@section('titulo', 'Usuarios')

@section('contenido')

    <h2 class="mb-5">Registro de usuarios</h2>

    <table style="text-align: center;" class="table table-striped table-hover">

        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
        <th scope="col">Detalle</th>

        @foreach ($usuarios as $usu)
            <tr>
                <th scope="col">{{ $usu->id }}</th>
                <td>{{ $usu->nombre }}</td>
                <td>{{ $usu->correo }}</td>
                <td><a class="btn btn-primary" href="{{ route('users.detalle', $usu->id) }}">Detalle</a></td>
            </tr>
        @endforeach

    </table>
    <br />
    <button style="width: 100%" id="btn" onclick="location.href='{{ url('users/crear') }}'" type="button"
        class="btn btn-outline-success">Crear usuario</button>
@stop