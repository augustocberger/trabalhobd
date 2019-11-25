<!-- Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Latitude', 'Latitude:') !!}
    {!! Form::number('Latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Longitude', 'Longitude:') !!}
    {!! Form::number('Longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Municipio', 'Municipio:') !!}
    {!! Form::text('Municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Peca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_peca', 'Id Peca:') !!}
    {!! Form::number('id_peca', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('torres.index') !!}" class="btn btn-default">Cancel</a>
</div>
