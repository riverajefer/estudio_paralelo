@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Copy</h1>

	{!! Form::open(['action'=>'User\FiltroController@postReferentesUser', 'files'=>true]) !!}
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif

	
		<div class="form-group">
			<input type="file" class="filestyle" id="file1" name="image">
		</div>
		<p class="errors_img">{!!$errors->first('image1')!!}</p>

        <div class="form-group">
          {!! Form::submit('Siguiente', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
        </div>
    {!! Form::close() !!}

	</div>

@stop


@section('footer')
    
@stop
