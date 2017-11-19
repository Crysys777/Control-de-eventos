@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar evento
			<a href="{{ route('evento.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('eventos.fragment.error')

		{!! Form::model($evento, ['route'=>['evento.update', $evento->idEvento], 'method' => 'PUT'])!!}

			@include('eventos.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('eventos.fragment.aside')
	</div>


@endsection
