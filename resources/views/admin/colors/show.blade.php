@extends('layouts.app')

@section('content')
    @include('admin.colors.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.colors.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
