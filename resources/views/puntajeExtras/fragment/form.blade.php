<div class="form-group">
    {!! Form::label('puntajeExtra', 'Puntos extras: ') !!}

    {!! Form::number('puntajeExtra', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los puntos extras ganados' , 'required'])!!}
</div>

<div class="form-group">
    {!! Form::label('descripcionPuntaje', 'Descripcion: ') !!}

    {!! Form::text('descripcionPuntaje', null, ['class' => 'form-control', 'placeholder' => 'Describa la razón de los puntos extras' , 'required'])!!}
</div>

<div class="form-group">
		{!! Form::label('id_Colegio', 'Colegio: ') !!}
		<?php
			$insList = App\Colegio::pluck('idColegio', 'nombreColegio')->toArray();
		 ?>
    {!! Form::select('id_Colegio', array_flip($insList), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
</div>
