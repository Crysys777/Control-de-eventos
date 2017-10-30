@extends('layout')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Listado de inscripcion  
		</h2>
		@include('inscripcions.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="11">
						
						<a href="{{ route('inscripcion.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>
					
				</tr>
				
				<tr>
						<th width="20px">ID</th>
						<th>Colegio</th>
						<th>N° Participantes</th>
						<th>Monto colegio (Bs.)</th>
						<th>Monto participantes (Bs.)</th>
						<th>Comprobante de pago</th>
						<th>Comprobante de pago</th>
						<th>Fecha de inscripción</th>
						<th colspan="3" class="text-center">Acciones</th>

				
				</tr>
			</thead>
			<tbody>
				@foreach($inscripcions as $inscripcion)
					<tr>
						<td>{{ $inscripcion->idInscripcion}}</td>
						<td>{{ $inscripcion->id_Colegio}}</td>
						<td>{{ $inscripcion->cantidadParticipante}}</td>
						<td>{{ $inscripcion->montoColegio}}</td>
						<td>{{ $inscripcion->montoParticipante}}</td>
						<td>{{ $inscripcion->colegioComprobante}}</td>
						<td>{{ $inscripcion->participanteComprobante}}</td>
						<td>{{ $inscripcion->fechaInscripcion}}</td>
						<td >
							<a href="{{ route('inscripcion.show', $inscripcion->idInscripcion)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('inscripcion.edit', $inscripcion->idInscripcion)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('inscripcion.destroy', $inscripcion->idInscripcion) }}" method="POST" accept-charset="utf-8">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-outline-danger">Borrar <i class="fa fa-trash-o" aria-hidden="true"></i></button>
									</form>
  							</a>
						</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		{!! $inscripcions->render()!!}
		
	</div>
	<div class="col-md-4" >
		@include('inscripcions.fragment.aside')
	</div>

@endsection