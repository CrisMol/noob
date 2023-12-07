<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('home.title') }}</title>

        <!--Estilos-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        @yield('head')

    </head>
    <body>
        <div id="app">
            <main>
                <!--header-->
                <header>
                    <a href="#" class="logo">Noob.</a>
                    <nav class="menu">
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Nosotros</a></li>
                            <li><a href="#">Productos</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </nav>
                </header>

                @yield('content')

                @yield('javascript')
            </main>
        </div>
    </body>
</html>
