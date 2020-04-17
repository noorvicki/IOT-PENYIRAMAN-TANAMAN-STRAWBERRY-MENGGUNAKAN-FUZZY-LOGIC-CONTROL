<!-- Kelembaban Field -->
<div class="form-group">
    {!! Form::label('kelembaban', 'Kelembaban:') !!}
    <p>{{ $sensor->kelembaban }}</p>
</div>

<!-- Suhu Field -->
<div class="form-group">
    {!! Form::label('suhu', 'Suhu:') !!}
    <p>{{ $sensor->suhu }}</p>
</div>

<!-- Ph Field -->
<div class="form-group">
    {!! Form::label('ph', 'Ph:') !!}
    <p>{{ $sensor->ph }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $sensor->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $sensor->updated_at }}</p>
</div>

