<div class="form-group">
    {!! Form::label('nombreActividad', 'Nombre de la actividad: ') !!}

    {!! Form::text('nombreActividad', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('categoria', 'Categoria: ') !!}

    {!! Form::select('categoria',[
          'Varones'=>'Varones','Damas'=> 'Damas','Mixto'=> 'Mixto'
                                    ], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('id_Area', 'Actividad: ') !!}
	<?php
		$actList = App\Area::pluck('idArea', 'nombreArea')->toArray();
	 ?>
    {!! Form::select('id_Area', array_flip($actList), null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}

</div>
