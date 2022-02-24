@extends('layouts.plantilla')

@section('titulo', 'Usuarios')

@section('contenido')

<h2>Registro de usuarios</h2>

<table class="table table-success table-striped">

    @foreach ($usuarios as $usu)
    <tr>
        <th scope="row">{{$usu -> id}}</th>
        <td>{{$usu -> name}}</td>
        <td>{{$usu -> email}}</td>
    </tr>
    @endforeach

</table>
<br/>
<button onclick="location.href='{{ url('users/crear')}}'" type="button" class="btn btn-outline-success">Crear usuario</button>

@stop
