@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Estilo</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($estilo, ['route' => ['admin.estilos.update', $estilo->id], 'method' => 'patch']) !!}

            @include('admin.estilos.fields')

            {!! Form::close() !!}
        </div>
@endsection
