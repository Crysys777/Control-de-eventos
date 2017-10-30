@extends('layout')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de colegio
			<a href="{{ route('colegio.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $colegio->idColegio}}</td>
				
				<tr>
					<th>Nombre del colegio: </th>
					<td>{{ $colegio->nombreColegio}}</td>
				</tr>
				<tr>
					<th>Misión: </th>
					<td>{{ $colegio->mision}}</td>
				</tr>
				<tr>
					<th>Departamento: </th>
					<td>{{ $colegio->departamento}}</td>
				</tr>
			

			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('colegio.edit', $colegio->idColegio)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $colegio->body!!}
		
	</div>
	<div>
		@include('colegios.fragment.aside')
	</div>

	
		
	

@endsection