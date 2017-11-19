@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de puntaje totales
			<a href="{{ route('puntajetotal.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-striped table-bordered table-responsive table-hover table-sm">

			<tbody>

				<tr>
					<th width="20px">ID: </th>
					<td>{{ $puntajeTotal->idPuntajeTotal}}</td>

				<tr>
					<th>Puntaje Total: </th>
					<td>{{ $puntajeTotal->puntajeTotal}}</td>
				</tr>
				<tr>
					<th>Puntaje extra: </th>
					<td>{{ $puntajeTotal->puntajeExtra->puntajeExtra}}</td>
				</tr>
				<tr>
					<th>Puntaje parcial: </th>
					<td>{{ $puntajeTotal->evaluacion->puntajeParcial}}</td>
				</tr>


			</tbody>

		</table>

			<tr>
					<a href="{{ route('puntajetotal.edit', $puntajeTotal->idPuntajeTotal)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>


		{!! $puntajeTotal->body!!}

	</div>
	<div>
		@include('puntajeTotals.fragment.aside')
	</div>

@endsection
