<table class="table table-responsive" id="colors-table">
    <thead>
        <th>Titulo</th>
        <th>Img</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($colors as $color)
        <tr>
            <td>{!! $color->titulo !!}</td>
            <td>{!! $color->img !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.colors.destroy', $color->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.colors.show', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.colors.edit', [$color->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
