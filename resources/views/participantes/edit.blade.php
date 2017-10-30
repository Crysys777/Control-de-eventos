@extends('layout')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Editar participante
			<a href="{{ route('participante.index')}}" class="btn btn-primary pull-right">Listado</a>
		</h2>			
		
		@include('participantes.fragment.error')

		{!! Form::model($participante, ['route'=>['participante.update', $participante->idParticipante, 'method' => 'PUT']])!!}

			@include('participantes.fragment.form')

		{!! Form::close() !!}
		
	</div>
	<div>
		@include('participantes.fragment.aside')
	</div>


@endsection