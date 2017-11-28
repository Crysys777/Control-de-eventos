<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CDE</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    
</head>
<body>

   

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
                    <a href="{{route('inscripcion.index')}}" class="navbar-brand">Inscripción</a>
                    <a href="{{route('colegio.index')}}" class="navbar-brand">Colegio</a>
                    <a href="{{route('participante.index')}}" class="navbar-brand">Participante</a>
                    <a href="{{route('evento.index')}}" class="navbar-brand">Evento</a>
                    <a href="{{route('area.index')}}" class="navbar-brand">Area</a>
                    <a href="{{route('actividad.index')}}" class="navbar-brand">Actividad</a>
                    <a href="{{route('evaluacion.index')}}" class="navbar-brand">Evaluacion</a>
                    <a href="{{route('puntajeextra.index')}}" class="navbar-brand">Puntaje extra</a>
                    <a href="{{route('puntajetotal.index')}}" class="navbar-brand">Puntaje total</a>
                    <a href="https://laracasts.com" class="navbar-brand">Información</a>
                    <a href="https://laravel-news.com" class="navbar-brand">Contactos</a>

                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
             
        </nav>
      @yield('content')

    </div>
    
    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src= "//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    

</body>
</html>
