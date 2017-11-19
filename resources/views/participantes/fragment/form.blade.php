<div class="form-group">
    {!! Form::label('primerNombre', 'Primer nombre: ') !!}

    {!! Form::text('primerNombre', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('segundoNombre', 'Segundo nombre: ') !!}

    {!! Form::text('segundoNombre', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('primerApellido', 'Primer apellido: ') !!}

    {!! Form::text('primerApellido', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('segundoApellido', 'Segundo apellido: ') !!}

    {!! Form::text('segundoApellido', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('sexo', 'Sexo: ') !!}

    {!! Form::select('sexo',[
          'M'=>'Masculino','F'=> 'Femenina'
                                    ], null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('correoElectronico', 'Correo electrónico: ') !!}

    {!! Form::text('correoElectronico', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('ciParticipante', 'CI: ') !!}

    {!! Form::number('ciParticipante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('tallaPolera', 'Talla de polera: ') !!}

    {!! Form::select('tallaPolera',[
          'S'=>'Pequeña (S)','M'=> 'Mediana (M)','L'=> 'Larga (L)'
                                    ], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('tipoParticipante', 'Tipo: ') !!}

    {!! Form::select('tipoParticipante',[
          'Estudiante'=>'Estudiante','Director'=> 'Director','Prof. de educación física'=> 'Prof. de educación física','Asesor'=>'Asesor'
                                    ], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_Colegio', 'Colegio: ') !!}
    <?php
			$colList = App\Colegio::pluck('idColegio', 'nombreColegio')->toArray();
		 ?>
    {!! Form::select('id_Colegio', array_flip($colList), null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}

</div>
