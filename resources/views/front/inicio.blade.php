@extends('layouts.plantilla')


@section('content')

<h1>Hola mundo</h1>

<nav>
    <ul>
        <a href="#"><li>
            categorias
        </li>
    </a>
    </ul>
</nav>
@foreach ($vista as $v)

<div class="card" style="width: 18rem;">
    <img src="{{asset($v->imagen)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">{{$v->nombre}}</p>
    </div>
  </div>
    <form action="{{route('detalle',$v->id)}}">
        <button class="btn btn" value="detalle"></button>
    </form>
@endforeach
