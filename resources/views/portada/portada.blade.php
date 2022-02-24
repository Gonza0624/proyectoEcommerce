@extends('layouts.plantilla')

@section('titulo', 'Portada')

@section('css')
<link rel="stylesheet" href="{{ asset('CSS/portada.css')}}">
@stop

@section('contenido')

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="content">

    <div>
        <div>
            <h3 class="titulo_portada">Bienvenido a la tienda BuyTheFuture</h3>
            <img class="logo" src="img/logo/logo.jpeg" alt="">
        </div>
    </div>

@stop