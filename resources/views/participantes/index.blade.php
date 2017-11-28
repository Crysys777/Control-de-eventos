@extends('home')
@section('content')

<div class="col-sm-2 pull-right" >
	@include('participantes.fragment.info')
	@include('participantes.fragment.aside')
</div>
<div class="container">
	<div class="panel panel-primary">
      <div class="panel-heading">
	  	<h2 class="text-center">
			Listado de participantes  
		</h2>
		
	  </div>
	  
      <div class="panel-body">

		
		<table class="table table-bordered table-striped table-responsive table-hover table-sm" id="participantes">

			<thead class="table-striped table-bordered">
				<tr>
					<th colspan="12">
						<a href="{{ route('participante.imexport') }}" class="btn btn-outline-success pull-left">Importar/Exportar <i class="fa fa-file-excel-o" aria-hidden="true"></i></a>
							<a href="{{ route('participante.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>

								


						 	<div class="col-sm-4">
								 {!! Form::model(Request::all(),['route'=>'participante.index', 'method' => 'GET', 'class' => 'input-group', 'role' => 'search'])!!}

							
   							 <div class="input-group">
								<?php
									$colList = App\Colegio::pluck('idColegio', 'nombreColegio')->toArray();
		 							?>
    								{!! Form::select('id_Colegio', array_flip($colList), null, ['class' => 'form-control', 'placeholder' => 'Colegio']) !!}
								

								{!! Form::select('tallaPolera', config('tallaPolera.tallaList'), null, ['class' => 'form-control', 'placeholder' => 'Talla de polera']) !!}

								<button class="btn btn-outline-primary" type="submit" >Buscar talla polera <i class="fa fa-search" aria-hidden="true"></i></button>
								
								
  							  </div>
								

								{!! Form::close() !!}
							 </div>



							 <div class="col-sm-4">
								 {!! Form::model(Request::all(),['route'=>'participante.index', 'method' => 'GET', 'class' => 'input-group', 'role' => 'search'])!!}

   							 <div class="input-group">
								<?php
									$colList = App\Colegio::pluck('idColegio', 'nombreColegio')->toArray();
		 							?>
    								{!! Form::select('id_Colegio', array_flip($colList), null, ['class' => 'form-control', 'placeholder' => 'Colegio']) !!}

									{!! Form::select('sexo', config('sexo.sexoList'), null, ['class' => 'form-control', 'placeholder' => 'Sexo']) !!}
								

								<button class="btn btn-outline-primary" type="submit" >Buscar según género <i class="fa fa-search" aria-hidden="true"></i></button>
								
								
								
  							  </div>
								
								
								{!! Form::close() !!}
							 </div>
							
						
						
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
										<button class="btn btn-outline-dark">Borrar <i class="fa fa-trash-o" aria-hidden="true"></i></button>
									</form>
  							</a>
						</td>
					</tr>
					
				@endforeach
				
			</tbody>
			
					
		</table>

		<tr>
			<th >
				<p>Página actual: {{ $participantes->currentPage() }} </p>
			</th>
			<th >
				<p class="pull-right">Hay {{ $participantes->total() }} registros</p>
			</th>

		</tr>
		{!! $participantes->appends(Request::all())->render()!!}
		
	</div>
		
	  </div>
	  
    </div>

	
	
</div>
	
		

		
		

@endsection