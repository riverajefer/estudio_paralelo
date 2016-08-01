@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Sube tu plano</h1>

	{!! Form::open(['action'=>'User\FiltroController@postSubirPlano', 'files'=>true]) !!}
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif

		<div class="form-group">
			<input type="file" class="filestyle" id="file2" name="plano" required>
		</div>
		<p class="errors_img">{!!$errors->first('plano')!!}</p>

        <div class="form-group">
          {!! Form::submit('Siguiente', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
        </div>
    {!! Form::close() !!}

	</div>

@stop


@section('footer')
    
@stop
