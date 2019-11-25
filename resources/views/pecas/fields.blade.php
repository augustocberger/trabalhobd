<!-- Peca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peca', 'Peca:') !!}
    {!! Form::text('peca', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Fornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fornecedor', 'Id Fornecedor:') !!}
    {!! Form::number('id_fornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pecas.index') !!}" class="btn btn-default">Cancel</a>
</div>
