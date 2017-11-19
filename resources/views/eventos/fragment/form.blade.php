<div class="form-group">
    {!! Form::label('nombreEvento', 'Nombre del evento: ') !!}

    {!! Form::text('nombreEvento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('ENVIAR', ['class' => 'form-control']) !!}
</div>
