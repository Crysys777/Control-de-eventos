<div class="form-group">
    {!! Form::label('nombreArea', 'Nombre del area: ') !!}

    {!! Form::text('nombreArea', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_Evento', 'Nombre del evento: ') !!}
    <?php
			$evenList = App\Evento::pluck('idEvento', 'nombreEvento')->toArray();
		 ?>
    {!! Form::select('id_Evento', array_flip($evenList), null,['class' => 'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}

</div>
