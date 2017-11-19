@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar puntaje total
			<a href="{{ route('puntajetotal.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('puntajeTotals.fragment.error')

		{!! Form::model($puntajeTotal, ['route'=>['puntajetotal.update', $puntajeTotal->idPuntajeTotal], 'method' => 'PUT'])!!}

			@include('puntajeTotals.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('puntajeTotals.fragment.aside')
	</div>


@endsection
