<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exportar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <table class="table table-bordered table-striped table-responsive table-hover table-sm">

			<thead class="table-striped table-bordered">
				
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
						
					</tr>
					
				@endforeach
				
			</tbody>
					
		</table>
    </body>
</html>