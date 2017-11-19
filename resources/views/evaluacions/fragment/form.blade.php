<div class="form-group">
		{!! Form::label('id_Actividad', 'Nombre de la actividad: ') !!}
		<?php
			$insList = App\Actividad::pluck('idActividad', 'nombreActividad')->toArray();
		 ?>
    {!! Form::select('id_Actividad', array_flip($insList), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('puntajeParcial', 'Puntos: ') !!}

    {!! Form::number('puntajeParcial', null, ['class' => 'form-control', 'placeholder' => 'Ingrese los puntos ganados' , 'required'])!!}
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
