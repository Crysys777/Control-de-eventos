@extends('home')
@section('content')
	<div class="modal-dialog">
		<h2 class="text-center text-muted">
			Listado de puntaje extras
			<a href="{{ route('puntajeextra.create')}}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>

		<table class="table table-striped table-bordered table-responsive table-hover table-sm">

			<tbody>

				<tr>
					<th width="20px">ID: </th>
					<td>{{ $puntajeExtra->idPuntajeExtra}}</td>

				<tr>
					<th>Puntos extras: </th>
					<td>{{ $puntajeExtra->puntajeExtra}}</td>
				</tr>
				<tr>
					<th>Descripcion: </th>
					<td>{{ $puntajeExtra->descripcionPuntaje}}</td>
				</tr>
				<tr>
					<th>Colegio: </th>
					<td>{{ $puntajeExtra->colegio->nombreColegio}}</td>
				</tr>


			</tbody>

		</table>

			<tr>
					<a href="{{ route('puntajeextra.edit', $puntajeExtra->idPuntajeExtra)}}" class="btn btn-outline-warning btn-block">Editar</a>
				</tr>


		{!! $puntajeExtra->body!!}

	</div>
	<div>
		@include('puntajeExtras.fragment.aside')
	</div>

@endsection
