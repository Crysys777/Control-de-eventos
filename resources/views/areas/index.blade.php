@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Listado de areas
		</h2>
		
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="7">
						
						<a href="{{ route('area.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>
					
				</tr>
				
				<tr>
						<th width="20px">ID</th>
						<th>Nombre del área</th>
						<th>Evento</th>
					
						
						<th colspan="3" class="text-center">Acciones</th>

				
				</tr>
			</thead>
			<tbody>
				@foreach($areas as $area)
					<tr>
						<td>{{ $area->idArea}}</td>
						<td>{{ $area->nombreArea}}</td>
						<td>{{ $area->evento->nombreEvento}}</td>

						
						<td >
							<a href="{{ route('area.show', $area->idArea)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('area.edit', $area->idArea)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('area.destroy', $area->idArea) }}" method="POST" accept-charset="utf-8">
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
		{!! $areas->render()!!}
		
	</div>
	<div class="col-md-4" >
		
	</div>

@endsection