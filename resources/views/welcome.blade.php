{{-- @if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
@endif --}}

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diseño web</title>
    <link rel="stylesheet" href="{{ asset('CSS/welcome.css') }}?v=<?php echo time(); ?>" />
</head>

<body>

    <heAder class="img-container">

        <div class ="main">

            <nav class="nav">
                <a href="{{ route('login') }}"class="nav__items">Iniciar sesion</a>
                <a href="{{ route('register') }}"class="nav__items">Registrarse</a>
                <a href="{{ route('us') }}"class="nav__items">sobre nosotros</a>
            </nav>
            
            <section class ="__container">
                <div>
                    <h1 class ="__title">Bienvenidos a nuestra tienda</h1>
                    <h2 class="__title">BuyTheFuture</h2>
                </div>
            </section>
            
        </div>

        <div class ="__wave" style="overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(229, 235, 223);"></path></svg></div>

    </heAder>

</body>
</html>