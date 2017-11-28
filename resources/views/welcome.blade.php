<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CDE</title>

        <!-- Fonts -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />


        <!-- Styles -->
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Control de eventos
                </div>

                <div class="links">
                    <a href="{{route('inscripcion.index')}}">Inscripción</a>
                    <a href="{{route('colegio.index')}}">Colegio</a>
                    <a href="{{route('participante.index')}}">Participante</a>
                    <a href="{{route('evento.index')}}">Evento</a>
                    <a href="{{route('area.index')}}">Area</a>
                    <a href="{{route('actividad.index')}}">Actividad</a>
                    <a href="{{route('evaluacion.index')}}">Evaluacion</a>
                    <a href="{{route('puntajeextra.index')}}">Puntaje extra</a>
                    <a href="{{route('puntajetotal.index')}}">Puntaje total</a>
                    <a href="https://laracasts.com">Información</a>
                    <a href="https://laravel-news.com">Contactos</a>
                </div>
            </div>
        </div>
    </body>
            <script src="{{ asset('js/app.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- new assets -->
    

</html>
