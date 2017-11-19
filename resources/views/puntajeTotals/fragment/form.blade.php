<div class="form-group">
    {!! Form::label('puntajeTotal', 'Puntos Total: ') !!}

    {!! Form::number('puntajeTotal', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los puntos extras ganados' , 'required'])!!}
</div>

<div class="form-group">
		{!! Form::label('id_PuntajeExtra', 'Puntos extras (puntaje extra): ') !!}
		<?php
			$insList = App\PuntajeExtra::pluck('idPuntajeExtra', 'puntajeExtra')->toArray();
		 ?>
    {!! Form::select('id_PuntajeExtra', array_flip($insList), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
		{!! Form::label('id_Evaluacion', 'Evaluacion (puntaje parcial): ') !!}
		<?php
			$insList = App\Evaluacion::pluck('idEvaluacion', 'puntajeParcial')->toArray();
		 ?>
    {!! Form::select('id_Evaluacion', array_flip($insList), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
</div>
