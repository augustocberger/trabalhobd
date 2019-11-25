<div class="table-responsive-sm">
    <table class="table table-striped" id="torres-table">
        <thead>
            <th>Latitude</th>
        <th>Longitude</th>
        <th>Municipio</th>
        <th>Id Peca</th>
            <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($torres as $torres)
            <tr>
                <td>{!! $torres->Latitude !!}</td>
            <td>{!! $torres->Longitude !!}</td>
            <td>{!! $torres->Municipio !!}</td>
            <td>{!! $torres->id_peca !!}</td>
                <td>
                    {!! Form::open(['route' => ['torres.destroy', $torres->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('torres.show', [$torres->id]) !!}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('torres.edit', [$torres->id]) !!}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>