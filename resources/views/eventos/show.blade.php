@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de evento
			<a href="{{ route('evento.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $evento->idEvento}}</td>
				
				<tr>
					<th>Nombre del evento: </th>
					<td>{{ $evento->nombreEvento}}</td>
				</tr>

			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('evento.edit', $evento->idEvento)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $evento->body!!}
		
	</div>
	<div>
		@include('eventos.fragment.aside')
	</div>

	
		
	

@endsection