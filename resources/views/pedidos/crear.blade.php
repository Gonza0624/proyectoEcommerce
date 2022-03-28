@extends('layouts.plantilla')

@section('titulo', 'Crear pedidos')

@section('contenido')

    <div class="form">
        <form  action="{{ Route('pedidos.guardar') }}" method="POST">
            @csrf

            <div>
                <h2 class="text-center mb-4">Formulario para crear pedidos</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label class="form-label">Nombre del Articulo</label>
                        <input name="articulo" placeholder="Pedido nuevo" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <br><br>


            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label for="exampleInputEmail1" class="form-label">Fecha</label>
                        <input name="fecha" placeholder="Ingresa la fecha" type="date" class="form-control">
                    </div>
                </div>
            </div>

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!--elementos del formulario -->
                        <label for="exampleInputEmail1" class="form-label">proveedor</label>
                        <input name="proveedor" placeholder="Proveedores" type="text" class="form-control">
                    </div>
                </div>
            </div>

            <br>

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
