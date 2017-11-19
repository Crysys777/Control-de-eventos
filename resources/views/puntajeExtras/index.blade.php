@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Historial de epuntajeExtras
		</h2>
		@include('puntajeExtras.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="7">

						<a href="{{ route('puntajeextra.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>

				</tr>

				<tr>
						<th width="20px">ID</th>
						<th>Puntos extras</th>
						<th>Descripcion</th>
						<th>Colegio</th>
						<th colspan="3" class="text-center">Acciones</th>


				</tr>
			</thead>
			<tbody>
				@foreach($puntajeExtras as $puntajeExtra)
					<tr>
						<td>{{ $puntajeExtra->idPuntajeExtra}}</td>
						<td>{{ $puntajeExtra->puntajeExtra}}</td>
						<td>{{ $puntajeExtra->descripcionPuntaje}}</td>
						<td>{{ $puntajeExtra->colegio->nombreColegio}}</td>

						<td >
							<a href="{{ route('puntajeextra.show', $puntajeExtra->idPuntajeExtra)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('puntajeextra.edit', $puntajeExtra->idPuntajeExtra)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						
						<td>
							<a href="" >
									<form action="{{ route('puntajeextra.destroy', $puntajeExtra->idPuntajeExtra) }}" method="POST" accept-charset="utf-8">
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
		{!! $puntajeExtras->render()!!}

	</div>
	<div class="col-md-4" >
		@include('puntajeExtras.fragment.aside')
		
	</div>

@endsection
