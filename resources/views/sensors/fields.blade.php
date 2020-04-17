<!-- Kelembaban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelembaban', 'Kelembaban:') !!}
    {!! Form::number('kelembaban', null, ['class' => 'form-control']) !!}
</div>

<!-- Suhu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suhu', 'Suhu:') !!}
    {!! Form::number('suhu', null, ['class' => 'form-control']) !!}
</div>

<!-- Ph Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ph', 'Ph:') !!}
    {!! Form::number('ph', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sensors.index') }}" class="btn btn-default">Cancel</a>
</div>
