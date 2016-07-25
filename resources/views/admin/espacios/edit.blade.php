@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Espacio</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($espacio, ['route' => ['admin.espacios.update', $espacio->id], 'method' => 'patch']) !!}

            @include('admin.espacios.fields')

            {!! Form::close() !!}
        </div>
@endsection
