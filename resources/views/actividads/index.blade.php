@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Listado de actividades 
		</h2>
		@include('actividads.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="7">
						
						<a href="{{ route('actividad.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>
					
				</tr>
				
				<tr>
						<th width="20px">ID</th>
						<th>Actividad</th>
						<th>Categoria</th>
						<th>Area</th>
						<th colspan="3" class="text-center">Acciones</th>

				
				</tr>
			</thead>
			<tbody>
				@foreach($actividads as $actividad)
					<tr>
						<td>{{ $actividad->idActividad}}</td>
						<td>{{ $actividad->nombreActividad}}</td>
						<td>{{ $actividad->categoria}}</td>
						<td>{{ $actividad->area->nombreArea}}</td>
					
						<td >
							<a href="{{ route('actividad.show', $actividad->idActividad)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('actividad.edit', $actividad->idActividad)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('actividad.destroy', $actividad->idActividad) }}" method="POST" accept-charset="utf-8">
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
		{!! $actividads->render()!!}
		
	</div>
	<div class="col-md-4" >
		@include('actividads.fragment.aside')
	</div>

@endsection