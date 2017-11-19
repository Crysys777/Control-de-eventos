@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar puntajeTotal
			<a href="{{ route('puntajetotal.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('puntajeTotals.fragment.error')

		{!! Form::open(['route'=>'puntajetotal.store'])!!}

			@include('puntajeTotals.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('puntajeTotals.fragment.aside')
	</div>


@endsection
