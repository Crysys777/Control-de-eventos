@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar inscripción
			<a href="{{ route('inscripcion.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('inscripcions.fragment.error')

		{!! Form::open(['route'=>'inscripcion.store'])!!}

			@include('inscripcions.fragment.form')

		{!! Form::close() !!}
		
	</div>
	<div>
		@include('inscripcions.fragment.aside')
	</div>


@endsection