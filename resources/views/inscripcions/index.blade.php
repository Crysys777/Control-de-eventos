@extends('home')
@section('content')

<div class="container">
    <div class="row align-items-start">
        <div class="col-xl-12" width=device-width>
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h2 class="text-center text-muted">
						Listado de inscripcion
						<a href="{{ route('inscripcion.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</h2>
            
				</div>
                <div class="panel-body">

		@include('inscripcions.fragment.info')
		<table class="panel-body table-bordered table-striped table-responsive table-hover text-center">

			<thead>


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
						<td>{{ $inscripcion->colegio->nombreColegio}}</td>
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
            </div>
        </div>
    </div>
</div>

<div class="" >
		@include('inscripcions.fragment.aside')
	</div>
@endsection
