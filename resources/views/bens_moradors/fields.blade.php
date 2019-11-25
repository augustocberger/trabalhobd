<!-- Id Bem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_bem', 'Id Bem:') !!}
    {!! Form::number('id_bem', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Morador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ID_Morador', 'Id Morador:') !!}
    {!! Form::number('ID_Morador', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bensMoradors.index') !!}" class="btn btn-default">Cancel</a>
</div>
