@extends('home')
@section('content')
<div class="col-sm-2 pull-right" >
		@include('inscripcions.fragment.aside')
</div>
<div class="container">
	<div class="panel panel-primary">

      	<div class="panel-heading">
	  		<h2 class="text-center">			  
				Historial de inscripciones
			</h2>
	  	</div>
	  
      	<div class="panel-body">
	  
		  

			@include('inscripcions.fragment.info')
		<table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead>
				<tr>
					<th colspan="12">
						
						<a href="{{ route('inscripcion.create')}}" class="btn btn-outline-primary pull-right">Nuevo <i class="fa fa-plus" aria-hidden="true"></i></a>

					</th>
				</tr>
				<tr>
						<th width="20px">#</th>
						<th>Colegio</th>
						<th>N° Participantes</th>
						<th>Monto colegio (Bs.)</th>
						<th>Monto participantes (Bs.)</th>
						<th>Comprobante de pago</th>
						<th>Comprobante de pago</th>
						<th>Fecha de inscripción</th>
						<th></th>
						<th colspan="3" class="text-center">Acciones</th>

				</tr>
			</thead>
				<tbody>
				@foreach($inscripcions as $inscripcion)
					<tr>
						<td>{{ $inscripcion->idInscripcion}}</td>
						<td>{{ $inscripcion->colegio->nombreColegio}}</td>
						<td>{{ $inscripcion->cantidadParticipante}}</td>
						<td>{{ $inscripcion->montoColegio}}</td>
						<td>{{ $inscripcion->montoParticipante}}</td>
						<td>{{ $inscripcion->colegioComprobante}}</td>
						<td>{{ $inscripcion->participanteComprobante}}</td>
						<td>{{ $inscripcion->fechaInscripcion}}</td>
						<td>
							<a href="{{route('participante.index')}}" class="navbar-brand">
								<button class="btn btn-outline-primary">Ver colegio <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td >
							<a href="{{ route('inscripcion.show', $inscripcion->idInscripcion)}}" >
								<button class="btn btn-outline-success">Ver <i class="fa fa-eye" aria-hidden="true"></i></button>
							</a>
						</td>
						<td>
							<a href="{{ route('inscripcion.edit', $inscripcion->idInscripcion)}}" >

  									<button class="btn btn-outline-warning">Editar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
  								</a>
						</td>
						<td>
							<a href="" >

							<form action="{{ route('inscripcion.destroy', $inscripcion->idInscripcion) }}" method="POST" accept-charset="utf-8">
										{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-outline-danger" onclick="ConfirmDemo()">Borrar <i class="fa fa-trash-o" aria-hidden="true"></i></button>
								
								<script type="text/javascript">
        						function ConfirmDemo() 
								{
        							//Ingresamos un mensaje a mostrar
        							    var mensaje = confirm("¿Desea eliminar esta inscripción?");
        							//Detectamos si el usuario acepto el mensaje
        							if (mensaje) {
										
       							 	 alert("¡Se ha eliminado correctamente!");
       							 		}
      							  	//Detectamos si el usuario denegó el mensaje
       							 		else {
       							 		alert("¡Cancelado!");
       							 			}
       							}
   							</script>
							   
							</form>
									
									

							
									
  							</a>
						</td>
					</tr>
				@endforeach

						</tbody>
				</table>
				{!! $inscripcions->render()!!}


	  	</div>
	  
	</div>
	
</div>



@endsection
