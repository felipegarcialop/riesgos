<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Click Seguro') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html {
            min-height: 100%;
            position: relative;
        }
        
        footer {
            background-color: #e7f0ed;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 55px;
            color: white;
            z-index: 1; /* Establecer el valor del z-index */
            display: flex; /* Utilizar flexbox */
            justify-content: flex-end; /* Alinear elementos al lado derecho */
        }
        .sidebar {
            background-color: #f8f9fa;
            border-right: 1px solid #dee2e6;
            min-height: 81vh;
            z-index: 2; /* Establecer el valor del z-index */
        }
        .content {
            padding: 20px;
            position: relative; /* Establecer la posición relativa */
            z-index: 0; /* Establecer el valor del z-index */
        }
        
        
    </style> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light" style="background-color: #5d7da6;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/imagen/logo.jpg" style="width: 40px; height: 40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('grupos.index') }}" style="color: white">{{ __('grupos') }}</a>
                                </ul> 
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('grados.index') }}" style="color: white">{{ __('grados') }}</a>
                                </ul> 
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('temas.index') }}" style="color: white">{{ __('temas') }}</a>
                                </ul> 
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('instituciones.index') }}" style="color: white">{{ __('Instituciones') }}</a>
                                </ul>
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('apoyos.index') }}" style="color: white">{{ __('Apoyos') }}</a>
                                </ul>
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('recursos.index') }}" style="color: white">{{ __('Recursos') }}</a>
                                </ul>
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('principal') }}" style="color: white">{{ __('Principal') }}</a>
                                </ul>
                                <ul class="nav-item">
                                    <a class="nav-link" href="{{ route('pinstituciones') }}" style="color: white">{{ __('Pinstituciones') }}</a>
                                </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 sidebar" style="background-color: #7f9bc0">
                    <!-- Contenido del sidebar -->
                    <ul class="nav flex-column">
                    <li class="nav-item">
                         <a class="nav-link" href="{{ route('principal') }}" style="color: white">Temas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pinstituciones') }}" style="color: white">Instituciones apoyo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('precursos') }}" style="color: white">Material de apoyo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white">Encuestas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white">Resultados</a>
                        </li>
                        <!-- Agrega más elementos del sidebar si es necesario -->
                    </ul>
                </div>

                <div class="col-md-9 content">
                    <!-- Contenido principal -->
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <img src="/imagen/flecha.png" style="width: 40px; height: 40px" >
    </footer> 
</body>
</html>
