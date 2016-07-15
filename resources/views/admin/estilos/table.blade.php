<table class="table table-responsive" id="estilos-table">
    <thead>
        <th>Titulo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($estilos as $estilo)
        <tr>
            <td>{!! $estilo->titulo !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.estilos.destroy', $estilo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.estilos.show', [$estilo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.estilos.edit', [$estilo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
