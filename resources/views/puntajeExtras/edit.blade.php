@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar puntaje extra
			<a href="{{ route('puntajeextra.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('puntajeExtras.fragment.error')

		{!! Form::model($puntajeExtra, ['route'=>['puntajeextra.update', $puntajeExtra->idPuntajeExtra], 'method' => 'PUT'])!!}

			@include('puntajeExtras.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('puntajeExtras.fragment.aside')
	</div>


@endsection
