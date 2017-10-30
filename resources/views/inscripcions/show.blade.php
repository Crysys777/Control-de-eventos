@extends('layout')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de inscripcion
			<a href="{{ route('inscripcion.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

			
		<table class="table table-striped table-bordered table-responsive table-hover table-sm">
			
			<tbody>
				
				<tr>
					<th width="20px">ID: </th>
					<td>{{ $inscripcion->idInscripcion}}</td>
				
				<tr>
					<th>Colegio</th>
					<td>{{ $inscripcion->id_Colegio}}</td>
				</tr>
				<tr>
					<th>N° Participantes</th>
					<td>{{ $inscripcion->cantidadParticipante}}</td>
				</tr>
				<tr>
					<th>Monto colegio (Bs.)</th>
					<td>{{ $inscripcion->montoColegio}}</td>
				</tr>
				<tr>
					<th>Monto participantes (Bs.)</th>
					<td>{{ $inscripcion->montoParticipante}}</td>
				</tr>
				<tr>
					<th>Comprobante de pago</th>
					<td>{{ $inscripcion->colegioComprobante}}</td>
				</tr>
				<tr>
					<th>Comprobante de pago</th>
					<td>{{ $inscripcion->participanteComprobante}}</td>
				</tr>
				<tr>
					<th>Fecha de inscripción</th>
					<td>{{ $inscripcion->fechaInscripcion}}</td>
				</tr>
				
				

			</tbody>
			
		</table>
			
			<tr>
					<a href="{{ route('inscripcion.edit', $inscripcion->idInscripcion)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>
									

		{!! $inscripcion->body!!}
		
	</div>
	<div>
		@include('inscripcions.fragment.aside')
	</div>

	
		
	

@endsection