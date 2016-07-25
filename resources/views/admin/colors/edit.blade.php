@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Color</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($color, ['route' => ['admin.colors.update', $color->id], 'method' => 'patch']) !!}

            @include('admin.colors.fields')

            {!! Form::close() !!}
        </div>
@endsection
