<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('home.title') }}</title>

        <!--Estilos-->
        <link rel="stylesheet" href="{{ asset('assets/css/root.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-mobile.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style-tablets.css') }}">

        @yield('head')

    </head>
    <body>
        <div id="app">
            <main>
                <!--header-->
                <header>
                    <nav>
                        <!-- Lado izquierdo: Menú de navegación -->
                        <div class="menu">
                            <ul class="navegacion">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Productos</a></li>
                                <li><a href="#">Contacto</a></li>
                                <!-- Agrega más elementos del menú según sea necesario -->
                            </ul>
                        </div>
                
                        <!-- Centro: Logo -->
                        <div class="logo">
                            <a href="#">Noob</a>
                        </div>
                
                        <!-- Lado derecho: Iconos de búsqueda, redes sociales y carrito -->
                        <div class="iconosMenu">
                            <div class="busquedaMenu">
                                <span class="iconoBusquedaMenu">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512" class="busquedaBotonMenu"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512" class="cerrarBotonMenu"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                                </span>
                            </div>
                            <!--Menú toogle-->
                            <span class="menuToggle">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                            </span>
                            <div class="busquedaBoxMenu">
                                <input type="text" placeholder="Buscar aquí ...">
                            </div>
                            <div class="carrito">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></a>
                            </div>
                        </div>
                    </nav>
                </header>

                @yield('content')

                <script>
                    /*
                        Menu responsivo
                    */
                    let navegacion = document.querySelector('.navegacion')
                    let menuToggle = document.querySelector('.menuToggle')
                    let header = document.querySelector('header')

                    menuToggle.onclick = function(){
                        header.classList.toggle('open')
                        busquedaBoxMenu.classList.remove('activo')
                        cerrarBotonMenu.classList.remove('activo')
                        busquedaBotonMenu.classList.remove('activo')
                    }
    
                    let busquedaBotonMenu = document.querySelector('.busquedaBotonMenu')
                    let cerrarBotonMenu = document.querySelector('.cerrarBotonMenu')
                    let busquedaBoxMenu = document.querySelector('.busquedaBoxMenu')

                    busquedaBotonMenu.onclick = function(){
                        busquedaBoxMenu.classList.add('activo')
                        cerrarBotonMenu.classList.add('activo')
                        busquedaBotonMenu.classList.add('activo')
                        menuToggle.classList.add('ocultar')
                        header.classList.remove('open')
                    }

                    cerrarBotonMenu.onclick = function(){
                        busquedaBoxMenu.classList.remove('activo')
                        cerrarBotonMenu.classList.remove('activo')
                        busquedaBotonMenu.classList.remove('activo')
                        menuToggle.classList.remove('ocultar')
                    }
                </script>

                @yield('javascript')
            </main>
        </div>
    </body>
</html>
