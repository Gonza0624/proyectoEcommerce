@extends('layouts.plantilla')

@section('titulo', 'Editar Usuarios')

@section('contenido')

    <div class="form">
        <form action="{{ Route('users.guardar_edit', $detalle->id) }}" method="POST">
            @csrf

            <div>
                <h2 class="text-center mb-4">Formulario para editar usuarios</h2>
            </div>
            <!-- <input hidden name="id" type="number" value="{{$detalle->id}}"> -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label class="form-label">Nombre del usuario</label>
                        <input name="nombre" placeholder="Usuario nuevo" type="text" class="form-control" value="{{$detalle->nombre}}">
                    </div>
                </div>
            </div>

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                        <input name="correo" placeholder="Correo nuevo" type="email" class="form-control" value="{{$detalle->correo}}">
                    </div>
                </div>
            </div>

            <br><br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <button style="width: 100%" id="btn" type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>

            <a class="enlace" onClick='history.go(-1);' href="#">¿Desea volver a atras?</a>
        </form>
    </div>

@stop
