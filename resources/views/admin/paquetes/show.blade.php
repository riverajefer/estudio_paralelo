@extends('layouts.app')

@section('content')
    @include('admin.paquetes.show_fields')

    <div class="form-group">
           <a href="{!! route('admin.paquetes.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
