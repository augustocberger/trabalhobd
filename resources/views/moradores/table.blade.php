<div class="table-responsive-sm">
    <table class="table table-striped" id="moradores-table">
        <thead>
            <th>Cpf</th>
        <th>Nome</th>
        <th>Endereco</th>
        <th>Telefone</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($moradores as $moradores)
            <tr>
                <td>{!! $moradores->cpf !!}</td>
            <td>{!! $moradores->nome !!}</td>
            <td>{!! $moradores->endereco !!}</td>
            <td>{!! $moradores->telefone !!}</td>
                <td>
                    {!! Form::open(['route' => ['moradores.destroy', $moradores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('moradores.show', [$moradores->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('moradores.edit', [$moradores->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>