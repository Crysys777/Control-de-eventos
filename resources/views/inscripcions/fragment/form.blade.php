
<div class="form-group">
	{!! Form::label('id_Colegio', 'Colegio: ') !!}

    {!! Form::select('id_Colegio',[
		  '1'=>'SANTA CRUZ','2'=> 'ELENA G. WHITE','3'=> 'MONTERO','4'=>'VILLA BUSCH','5'=> 'TRINIDAD','6'=> 'ESPAADY','7'=> 'PLAN 3000','8'=> 'PUERTO QUIJARRO','9'=> 'GUAYAMERÍN','10'=> 'SARMIENTO','11'=> 'UEAB','12'=> 'ELENA G. WHITE Oruro','13'=> 'ENTRE RIOS','14'=> 'COCHABAMBA','15'=> 'BAKER','16'=> 'CARANAVI','17'=> 'FRANZ TAMAYO','18'=> 'HARRY PITTMAN','19'=> 'MIRAFLORES','20'=> 'PALOS BLANCOS','21'=> 'VIACHA','22'=> 'SALOMON','23'=> 'LOS ANDES','24'=> 'REAL DEL SUR (PACAJES)','25'=> 'SHALOM','26'=> 'SAN JOSE'
    						        ], null, ['class' => 'form-control']) !!}				      
</div>


<div class="form-group">
    {!! Form::label('colegioComprobante', 'Comprobante de pago ') !!}
    
    {!! Form::file('colegioComprobante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('montoColegio', 'Monto colegio (Bolivianos)') !!}
    
    {!! Form::number('montoColegio', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('cantidadParticipante', 'Cantidad de participantes ') !!}
    
    {!! Form::number('cantidadParticipante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('participanteComprobante', 'Comprobante de pago ') !!}
    
    {!! Form::file('participanteComprobante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('montoParticipante', 'Monto participante (Bolivianos)') !!}
    
    {!! Form::number('montoParticipante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('fechaInscripcion', 'Fecha de inscripción (aaaa-mm-dd hh-mm-ss)') !!}
    
    {!! Form::date('fechaInscripcion', null, ['class' => 'form-control'])!!}
   

</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
    
</div>
