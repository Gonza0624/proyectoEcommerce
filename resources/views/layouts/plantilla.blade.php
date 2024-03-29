<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('CSS/layout.css') }}?v=<?php echo time(); ?>" />

    <link rel="stylesheet" href="{{ asset('CSS/ajustes.css') }}?v=<?php echo time(); ?>" />

    @yield('css')

    <!-- <link rel="stylesheet" href="Estilos/imagenes.css">

    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="main.css"> -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body id="body">

    <!-- icono para desplegar el menu -->
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <!-- opciones del menu  -->
    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <img style="width: 30px; height: 30px; border-radius: 15px; margin-right:10px;"
                src="{{ asset('img/logo/logo.jpeg') }}" alt="">
            <h4>BuyTheFuture</h4>
        </div>

        <div class="options__menu">

            <a href="{{ url('home') }}">
                <div class="option">
                    <i class="fas fa-home"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="{{ route('users') }}">
                <div class="option">
                    <i class="far fa-user"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="{{ route('productos') }}">
                <div class="option">
                    <i class="fas fa-shopping-basket"></i>
                    <h4>Productos</h4>
                </div>
            </a>

            <a href="{{ route('pedidos') }}">
                <div class="option">
                    <i class="fas fa-dolly"></i>
                    <h4>Pedidos</h4>
                </div>
            </a>

            <a href="{{ route('localizacion') }}">
                <div class="option">
                    <i class="fas fa-globe-americas"></i>
                    <h4>Localizacion</h4>
                </div>
            </a>

            <form action="" method="GET">
                <a href="{{ route('cerrar_sesion') }}" onclick="this.closest('form').submit()">
                    <div class="option">
                        <i class="fas fa-sign-in-alt"></i>
                        <h4>Salir</h4>
                    </div>
                </a>
            </form>

        </div>

    </div>

    <!-- barra de navegacion -->
    <div class="nav">

        <div>
            <a href="{{ url('categorias/celulares') }}">
                <div class="option">
                    <img class="efectoNav" style="padding: 15px;"
                        src="{{ asset('img/barra de navegacion/celular.png') }}" alt="">
                </div>
            </a>
        </div>

        <div>
            <a href="{{ url('categorias/consolas') }}">
                <div class="option">
                    <img class="efectoNav" style="padding: 15px;"
                        src="{{ asset('img/barra de navegacion/consolas.png') }}" alt="">
                </div>
            </a>
        </div>

        <div>
            <a href="{{ url('categorias/computadores') }}">
                <div class="option">
                    <img class="efectoNav" style="padding: 15px;"
                        src="{{ asset('img/barra de navegacion/computadora.png') }}" alt="">
                </div>
            </a>
        </div>

        <div>
            <a href="{{ url('categorias/camaras') }}">
                <div class="option">
                    <img class="efectoNav" style="padding: 15px;"
                        src="{{ asset('img/barra de navegacion/camara.png') }}" alt="">
                </div>
            </a>
        </div>

        <div>
            <a href="{{ url('categorias/drones') }}">
                <div class="option">
                    <img class="efectoNav" style="padding: 15px;"
                        src="{{ asset('img/barra de navegacion/drones.png') }}" alt="">
                </div>
            </a>
        </div>

    </div>

    <div class="mainContainer">
        @yield('contenido')
    </div>

    <div class="social-bar">
        <a href="#" class="icon icon-facebook"></a>
        <a href="#" class="icon icon-twitter"></a>
        <a href="#" class="icon icon-youtube"></a>
        <a href="#" class="icon icon-instagram"></a>
    </div>

    @yield('js')
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
