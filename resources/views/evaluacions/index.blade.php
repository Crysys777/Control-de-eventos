@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Historial de evaluaciones
		</h2>
		@include('evaluacions.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="7">

						<a href="{{ route('evaluacion.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>

				</tr>

				<tr>
						<th width="20px">ID</th>
						<th>Nombre de la actividad</th>
						<th>Puntos</th>
						<th>Colegio</th>
						<th colspan="3" class="text-center">Acciones</th>


				</tr>
			</thead>
			<tbody>
				@foreach($evaluacions as $evaluacion)
					<tr>
						<td>{{ $evaluacion->idEvaluacion}}</td>
						<td>{{ $evaluacion->actividad->nombreActividad}}</td>
						<td>{{ $evaluacion->puntajeParcial}}</td>
						<td>{{ $evaluacion->colegio->nombreColegio}}</td>

						<td >
							<a href="{{ route('evaluacion.show', $evaluacion->idEvaluacion)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('evaluacion.edit', $evaluacion->idEvaluacion)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('evaluacion.destroy', $evaluacion->idEvaluacion) }}" method="POST" accept-charset="utf-8">
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
		{!! $evaluacions->render()!!}

	</div>
	<div class="col-md-4" >
		@include('evaluacions.fragment.aside')
	</div>

@endsection
