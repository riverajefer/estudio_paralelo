<table class="table table-responsive" id="espacios-table">
    <thead>
        <th>Titulo</th>
        <th>Img</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($espacios as $espacio)
        <tr>
            <td>{!! $espacio->titulo !!}</td>
            <td>{!! $espacio->img !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.espacios.destroy', $espacio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.espacios.show', [$espacio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.espacios.edit', [$espacio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
