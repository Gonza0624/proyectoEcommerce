@extends('layouts.plantilla')

@section('titulo', 'Crear Usuarios')

@section('contenido')



<form action="{{Route('users.guardar')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nombre del usuario</label>
      <input  name="nombre" placeholder="Indique el nombre del usuario nuevo" type="text" class="form-control"  aria-describedby="emailHelp"  >
      
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
        <input  name="correo" placeholder="Indique el correo" type="email" class="form-control"  aria-describedby="emailHelp">
        
      </div>

    <button type="submit" class="btn btn-success">Enviar</button>
  </form>

@stop

