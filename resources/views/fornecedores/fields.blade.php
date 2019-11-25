<!-- Papel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('papel', 'Papel:') !!}
    {!! Form::text('papel', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Raz Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raz_social', 'Raz Social:') !!}
    {!! Form::text('raz_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::textarea('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::textarea('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fornecedores.index') !!}" class="btn btn-default">Cancel</a>
</div>
