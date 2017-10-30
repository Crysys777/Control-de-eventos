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
    
    {!! Form::select('id_Colegio',[
          '1'=>'SANTA CRUZ','2'=> 'ELENA G. WHITE','3'=> 'MONTERO','4'=>'VILLA BUSCH','5'=> 'TRINIDAD','6'=> 'ESPAADY','7'=> 'PLAN 3000','8'=> 'PUERTO QUIJARRO','9'=> 'GUAYAMERÍN','10'=> 'SARMIENTO','11'=> 'UEAB','12'=> 'ELENA G. WHITE Oruro','13'=> 'ENTRE RIOS','14'=> 'COCHABAMBA','15'=> 'BAKER','16'=> 'CARANAVI','17'=> 'FRANZ TAMAYO','18'=> 'HARRY PITTMAN','19'=> 'MIRAFLORES','20'=> 'PALOS BLANCOS','21'=> 'VIACHA','22'=> 'SALOMON','23'=> 'LOS ANDES','24'=> 'REAL DEL SUR (PACAJES)','25'=> 'SHALOM','26'=> 'SAN JOSE'
                                    ], null, ['class' => 'form-control']) !!}   
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
    
</div>
