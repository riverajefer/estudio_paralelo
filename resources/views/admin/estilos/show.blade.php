@extends('layouts.app')

@section('content')
    @include('admin.estilos.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.estilos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
