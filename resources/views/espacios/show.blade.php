@extends('layouts.app')

@section('content')
    @include('espacios.show_fields')

    <div class="form-group">
           <a href="{!! route('espacios.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
