@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de evaluaciones
			<a href="{{ route('evaluacion.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-striped table-bordered table-responsive table-hover table-sm">

			<tbody>

				<tr>
					<th width="20px">ID: </th>
					<td>{{ $evaluacion->idEvaluacion}}</td>

				<tr>
					<th>Actividad: </th>
					<td>{{ $evaluacion->actividad->nombreActividad}}</td>
				</tr>
				<tr>
					<th>Misión: </th>
					<td>{{ $evaluacion->puntajeParcial}}</td>
				</tr>
				<tr>
					<th>Departamento: </th>
					<td>{{ $evaluacion->colegio->nombreColegio}}</td>
				</tr>


			</tbody>

		</table>

			<tr>
					<a href="{{ route('evaluacion.edit', $evaluacion->idEvaluacion)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>


		{!! $evaluacion->body!!}

	</div>
	<div>
		@include('evaluacions.fragment.aside')
	</div>

@endsection
