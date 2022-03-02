@extends('layouts.plantilla')

@section('titulo', 'Crear productos')

@section('contenido')

    <div class="form">
        <form action="{{ Route('productos.guardar') }}" method="POST">
            @csrf

            <div>
                <h2 class="text-center mb-4">Formulario para crear productos</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label class="form-label">Nombre del producto</label>
                        <input name="nombre" placeholder="Producto nuevo" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label for="exampleInputEmail1" class="form-label">Precio</label>
                        <input name="precio" placeholder="Ingresa el precio" type="number" class="form-control">
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
