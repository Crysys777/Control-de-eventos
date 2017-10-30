
<div class="form-group">
	{!! Form::label('nombreColegio', 'Nombre del colegio: ') !!}

    {!! Form::select('nombreColegio',[
		  'SANTA CRUZ'=>'SANTA CRUZ','ELENA G. WHITE'=> 'ELENA G. WHITE','MONTERO'=> 'MONTERO','VILLA BUSCH'=>'VILLA BUSCH','TRINIDAD'=> 'TRINIDAD','ESPAADY'=> 'ESPAADY','PLAN 3000'=> 'PLAN 3000','PUERTO QUIJARRO'=> 'PUERTO QUIJARRO','GUAYAMERÍN'=> 'GUAYAMERÍN','SARMIENTO'=> 'SARMIENTO','UEAB'=> 'UEAB','ELENA G. WHITE Oruro'=> 'ELENA G. WHITE Oruro','ENTRE RIOS'=> 'ENTRE RIOS','COCHABAMBA'=> 'COCHABAMBA','BAKER'=> 'BAKER','CARANAVI'=> 'CARANAVI','FRANZ TAMAYO'=> 'FRANZ TAMAYO','HARRY PITTMAN'=> 'HARRY PITTMAN','MIRAFLORES'=> 'MIRAFLORES','PALOS BLANCOS'=> 'PALOS BLANCOS','VIACHA'=> 'VIACHA','SALOMON'=> 'SALOMON','LOS ANDES'=> 'LOS ANDES','REAL DEL SUR (PACAJES)'=> 'REAL DEL SUR (PACAJES)','SHALOM'=> 'SHALOM','SAN JOSE'=> 'SAN JOSE'
    						        ], null, ['class' => 'form-control']) !!}			      
</div>


<div class="form-group">
    {!! Form::label('mision', 'Mision: ') !!}
    
    {!! Form::select('mision',[
          '1'=>'MOB','2'=> 'MBC','3'=> 'MBO'
                                    ], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('departamento', 'Departamento: ') !!}
    
    {!! Form::select('departamento',[
          '1'=>'Santa Cruz','2'=> 'Cochabamba','3'=> 'La Paz','4'=>'Beni','5'=> 'Oruro','6'=> 'Tarija','7'=> 'Potosí','8'=> 'Pando','9'=> 'Chuquisaca'
                                    ], null, ['class' => 'form-control']) !!}
</div> 

</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
    
</div>
