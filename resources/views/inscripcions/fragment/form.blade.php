<div class="form-group">
		{!! Form::label('id_Colegio', 'Colegio: ') !!}
		<?php
			$insList = App\Colegio::pluck('idColegio', 'nombreColegio')->toArray();
		 ?>
    {!! Form::select('id_Colegio', array_flip($insList), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('colegioComprobante', 'Comprobante de pago ') !!}

    {!! Form::file('colegioComprobante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('montoColegio', 'Monto colegio (Bolivianos)') !!}

    {!! Form::number('montoColegio', 300, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('cantidadParticipante', 'Cantidad de participantes ') !!}

    {!! Form::number('cantidadParticipante', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad de participantes' , 'required'])!!}
</div>

<div class="form-group">
    {!! Form::label('participanteComprobante', 'Comprobante de pago ') !!}

    {!! Form::file('participanteComprobante', null, ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('montoParticipante', 'Monto participante (Bolivianos)') !!}

		<?php
			$price = DB::table('inscripcions')->sum('cantidadParticipante');
		 ?>
    {!! Form::number('montoParticipante', 5083, ['class' => 'form-control'])!!}


</div>

<div class="form-group">
    {!! Form::label('fechaInscripcion', 'Fecha de inscripción') !!}

    {!! Form::date('fechaInscripcion', \Carbon\Carbon::now(), ['class' => 'form-control'])!!}


</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}

</div>
