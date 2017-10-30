@extends('layout')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar colegio
			<a href="{{ route('colegio.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>

		@include('colegios.fragment.error')

		{!! Form::open(['route'=>'colegio.store'])!!}

			@include('colegios.fragment.form')

		{!! Form::close() !!}
		
	</div>
	<div>
		@include('colegios.fragment.aside')
	</div>


@endsection