@extends('layouts.app')

@section('content')
    @include('admin.espacios.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.espacios.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
