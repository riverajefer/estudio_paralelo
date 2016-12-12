<table class="table table-responsive" id="paquetes-table">
    <thead>
        <th>Titulo</th>
        <th>Valor</th>
        <th>Descripcion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($paquetes as $paquete)
        <tr>
            <td>{!! $paquete->titulo !!}</td>
            <td>{!! $paquete->valor !!}</td>
            <td>{!! $paquete->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.paquetes.destroy', $paquete->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.paquetes.show', [$paquete->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.paquetes.edit', [$paquete->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
