@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar actividad
			<a href="{{ route('actividad.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('actividads.fragment.error')

		{!! Form::model($actividad, ['route'=>['actividad.update', $actividad->idActividad], 'method' => 'PUT'])!!}

			@include('actividads.fragment.form')

		{!! Form::close() !!}

	</div>
	<div>
		@include('actividads.fragment.aside')
	</div>


@endsection
