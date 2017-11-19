@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de actividades
			<a href="{{ route('actividad.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $actividad->idActividad}}</td>
				
				<tr>
					<th>Nombre del colegio: </th>
					<td>{{ $actividad->nombreActividad}}</td>
				</tr>
				<tr>
					<th>Misión: </th>
					<td>{{ $actividad->categoria}}</td>
				</tr>
				<tr>
					<th>Departamento: </th>
					<td>{{ $actividad->area->nombreArea}}</td>
				</tr>
			

			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('actividad.edit', $actividad->idArea)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $actividad->body!!}
		
	</div>
	<div>
		@include('actividads.fragment.aside')
	</div>

	
		
	

@endsection