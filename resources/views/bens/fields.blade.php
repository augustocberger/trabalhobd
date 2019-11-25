<!-- Bem Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bem', 'Bem:') !!}
    {!! Form::textarea('bem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bens.index') !!}" class="btn btn-default">Cancel</a>
</div>
