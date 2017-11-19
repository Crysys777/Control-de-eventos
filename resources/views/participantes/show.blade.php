@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de participantes
			<a href="{{ route('participante.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $participante->idParticipante}}</td>
				
				<tr>
					<th>Primer nombre: </th>
					<td>{{ $participante->primerNombre}}</td>
				</tr>
				<tr>
					<th>Segundo nombre: </th>
					<td>{{ $participante->segundoNombre}}</td>
				</tr>
				<tr>
					<th>Primer apellido: </th>
					<td>{{ $participante->primerApellido}}</td>
				</tr>
				<tr>
					<th>Segundo apellido: </th>
					<td>{{ $participante->segundoApellido}}</td>
				</tr>
				<tr>
					<th>Sexo: </th>
					<td>{{ $participante->sexo}}</td>
				</tr>
				<tr>
					<th>Correo electrónico: </th>
					<td>{{ $participante->correoElectronico}}</td>
				</tr>
				<tr>
					<th>CI: </th>
					<td>{{ $participante->ciParticipante}}</td>
				</tr>
				<tr>
					<th>Talla de polera: </th>
					<td>{{ $participante->tallaPolera}}</td>
				</tr>
				<tr>
					<th>Tipo de participante: </th>
					<td>{{ $participante->tipoParticipante}}</td>
				</tr>
				<tr>
					<th>Colegio: </th>
					<td>{{ $participante->colegio->nombreColegio}}</td>
				</tr>
				
				

			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('participante.edit', $participante->idParticipante)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $participante->body!!}
		
	</div>
	<div>
		@include('participantes.fragment.aside')
	</div>

	
		
	

@endsection