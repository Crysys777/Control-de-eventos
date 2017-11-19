@extends('home')
@section('content')
	<div class="col-sm-12">
		<h2 class="text-center text-muted">
			Listado de participantes  
		</h2>
		@include('participantes.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="12">
						<a href="{{ route('inscripcion.create')}}" class="btn btn-outline-primary pull-left">Subir excel <i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
						<a href="{{ route('participante.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>
					</th>
					
				</tr>
				
				<tr>
						<th width="20px">ID</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Sexo</th>
						<th>Correo Electrónico</th>
						<th>CI</th>
						<th>Talla</th>
						<th>Tipo</th>
						<th>Colegio</th>
						<th colspan="3" class="text-center">Acciones</th>

				
				</tr>
			</thead>
			<tbody>
				@foreach($participantes as $participante)
					<tr>
						<td>{{ $participante->idParticipante}}</td>
						<td> <strong>{{ $participante->primerNombre}} </strong>{{ $participante->segundoNombre}}</td>
						<td> <strong>{{ $participante->primerApellido}} </strong>{{ $participante->segundoApellido}}</td>
						<td>{{ $participante->sexo}}</td>
						<td>{{ $participante->correoElectronico}}</td>
						<td>{{ $participante->ciParticipante}}</td>
						<td>{{ $participante->tallaPolera}}</td>
						<td>{{ $participante->tipoParticipante}}</td>
						<td>{{ $participante->colegio->nombreColegio}}</td>
						<td >
							<a href="{{ route('participante.show', $participante->idParticipante)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('participante.edit', $participante->idParticipante)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >
									<form action="{{ route('participante.destroy', $participante->idParticipante) }}" method="POST" accept-charset="utf-8">
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
		{!! $participantes->render()!!}
		
	</div>
	<div class="col-sm-3" >
		@include('participantes.fragment.aside')
	</div>

@endsection