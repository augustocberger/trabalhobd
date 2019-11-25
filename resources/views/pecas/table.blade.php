<div class="table-responsive-sm">
    <table class="table table-striped" id="pecas-table">
        <thead>
            <th>Peca</th>
        <th>Valor</th>
        <th>Id Fornecedor</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($pecas as $pecas)
            <tr>
                <td>{!! $pecas->peca !!}</td>
            <td>{!! $pecas->valor !!}</td>
            <td>{!! $pecas->id_fornecedor !!}</td>
                <td>
                    {!! Form::open(['route' => ['pecas.destroy', $pecas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('pecas.show', [$pecas->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('pecas.edit', [$pecas->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>