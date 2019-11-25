<div class="table-responsive-sm">
    <table class="table table-striped" id="fornecedores-table">
        <thead>
            <th>Papel</th>
        <th>Cnpj</th>
        <th>Raz Social</th>
        <th>Endereco</th>
        <th>Telefone</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($fornecedores as $fornecedores)
            <tr>
                <td>{!! $fornecedores->papel !!}</td>
            <td>{!! $fornecedores->cnpj !!}</td>
            <td>{!! $fornecedores->raz_social !!}</td>
            <td>{!! $fornecedores->endereco !!}</td>
            <td>{!! $fornecedores->telefone !!}</td>
                <td>
                    {!! Form::open(['route' => ['fornecedores.destroy', $fornecedores->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('fornecedores.show', [$fornecedores->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('fornecedores.edit', [$fornecedores->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>