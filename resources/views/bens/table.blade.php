<div class="table-responsive-sm">
    <table class="table table-striped" id="bens-table">
        <thead>
            <th>Bem</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($bens as $bens)
            <tr>
                <td>{!! $bens->bem !!}</td>
                <td>
                    {!! Form::open(['route' => ['bens.destroy', $bens->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('bens.show', [$bens->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('bens.edit', [$bens->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>