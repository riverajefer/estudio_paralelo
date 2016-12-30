@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Sube un referente</h1>
	    <br>

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
	<div class="espacio_v5"></div>

@stop


@section('footer')
    
@stop
