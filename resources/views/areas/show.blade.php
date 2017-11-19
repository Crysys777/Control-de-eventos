@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de area
			<a href="{{ route('area.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $area->idArea}}</td>
				</tr>
				<tr>
					<th>Nombre del evento: </th>
					<td>{{ $area->nombreArea}}</td>
					
				</tr>
				<tr>
					<th width="20px">Evento: </th>
					<td>{{ $area->evento->nombreEvento}}</td>
				</tr>
			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('area.edit', $area->idArea)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $area->body!!}
		
	</div>
	<div>
		@include('areas.fragment.aside')
	</div>

	
		
	

@endsection