@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administrador</div>

                <div class="panel-body">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                    

                    <a href="{{route('inscripcion.index')}}" >Inscripción</a>
                    <a href="{{route('colegio.index')}}">Colegio</a>
                    <a href="{{route('participante.index')}}">Participante</a>
                    <a href="{{route('evento.index')}}">Evento</a>
                    <a href="{{route('area.index')}}">Area</a>
                    <a href="{{route('actividad.index')}}">Actividad</a>
                    <a href="https://laracasts.com">Información</a>
                    <a href="https://laravel-news.com">Contactos</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
