@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Historial de puntajeTotales
		</h2>
		@include('puntajeTotals.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="7">

						<a href="{{ route('puntajetotal.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>

				</tr>

				<tr>
						<th width="20px">ID</th>
						<th>Puntaje Total</th>
						<th>Puntos extras</th>
						<th>Puntos parciales</th>
						<th colspan="3" class="text-center">Acciones</th>


				</tr>
			</thead>
			<tbody>
				@foreach($puntajeTotals as $puntajeTotal)
					<tr>
						<td>{{ $puntajeTotal->idPuntajeTotal}}</td>
						<td>{{ $puntajeTotal->puntajeTotal}}</td>
						<td>{{ $puntajeTotal->puntajeExtra->puntajeExtra}}</td>
						<td>{{ $puntajeTotal->evaluacion->puntajeParcial}}</td>

						<td >
							<a href="{{ route('puntajetotal.show', $puntajeTotal->idPuntajeTotal)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('puntajetotal.edit', $puntajeTotal->idPuntajeTotal)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('puntajetotal.destroy', $puntajeTotal->idPuntajeTotal) }}" method="POST" accept-charset="utf-8">
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
		{!! $puntajeTotals->render()!!}

	</div>
	<div class="col-md-4" >
		@include('puntajeTotals.fragment.aside')
	</div>

@endsection
