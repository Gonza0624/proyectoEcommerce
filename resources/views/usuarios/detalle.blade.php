@extends('layouts.plantilla')

@section('titulo', 'Detalle')

@section('css')
    <link rel="stylesheet" href="{{ asset('CSS/detalles.css') }}">
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
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

            <br>

            <tr>
                <th scope="col">{{ $detalle->id }}</th>
                <td scope="col">{{ $detalle->nombre }}</td>
                <td scope="col">{{ $detalle->correo }}</td>
                <td><button onclick="location.href='{{ route('users.editar', $detalle->id) }}'"
                        class='btn btn-warning'><img src="{{ asset('img/iconos/editar.png') }}" alt=""></button></td>

                <form action="{{ route('users.eliminar', $detalle->id) }}" class="eliminar" method="POST">
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

@section('js')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

        $('.eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
        });

        
    </script>

@stop
