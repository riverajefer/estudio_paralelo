@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Paquete</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($paquete, ['route' => ['admin.paquetes.update', $paquete->id], 'method' => 'patch']) !!}

            @include('admin.paquetes.fields')

            {!! Form::close() !!}
        </div>
@endsection
