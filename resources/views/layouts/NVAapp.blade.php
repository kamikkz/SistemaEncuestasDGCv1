<!DOCTYPE html>
<html lang="es" oncontextmenu='return false'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#800101">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#800101">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#800101">

    <title>Sistema de Encuestas DGC</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/uaeh.css') }}" rel="stylesheet">

    <!-- bootstrap-select/1.13.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">

    <!-- dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- emojis -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

</head>
<body >
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel blanco">
        <div class="container-fluid">
            @can('kami.index')
                <a class="navbar-brand" href="{{route('Curso.index')}}">
                    @endcan
                <img src="{{ asset('img/UAEH siglas.png') }}" alt="" style="width: 50px;">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <!--<li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>-->
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>    Salir
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        <div class="container-fluid">
            <div class="row">
                @can('kami.index')
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-header color04">
                            Menú de opciones
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <a href="{{route('Usuarios.index')}}" class="sinSubrayado"><li class="list-group-item">Usuarios</li></a>
                                <a href="{{route('Curso.index')}}" class="sinSubrayado"><li class="list-group-item">Actividades</li></a>
                                <a href="{{route('Encuesta.index')}}" class="sinSubrayado"><li class="list-group-item">Encuestas</li></a>
                                <a href="{{route('Asistencia.index')}}" class="sinSubrayado"><li class="list-group-item">Asistencias</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
                @endcan
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.js') }}" defer></script>
<script src="{{ asset('js/dataTables.js') }}"></script>
<script src="{{ asset('js/dataTablesBootstrap4.js') }}"></script>
<script src="{{ asset('js/uaeh.js') }}" defer></script>

</body>
</html>
