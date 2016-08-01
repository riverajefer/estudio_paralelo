@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Sube fotografías del espacio</h1>
	    <br>

	{!! Form::open(['action'=>'User\FiltroController@postSubirEspacios', 'files'=>true]) !!}
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif


		<div class="form-group">
			<input type="file" class="filestyle" id="file3" name="espacio1">
		</div>	
		<p class="errors_img">{!!$errors->first('espacio1')!!}</p>

		<div class="form-group">
			<input type="file" class="filestyle" id="file4" name="espacio2">
		</div>	
		<p class="errors_img">{!!$errors->first('espacio2')!!}</p>

		<div class="form-group">
			<input type="file" class="filestyle" id="file5" name="espacio3">
		</div>
		<p class="errors_img">{!!$errors->first('espacio3')!!}</p>

		<div class="form-group">
			<input type="file" class="filestyle" id="file6" name="espacio4">
		</div>
		<p class="errors_img">{!!$errors->first('espacio4')!!}</p>			

        <div class="form-group">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_imgespacio"  name="action">Siguiente</button>

        </div>
    {!! Form::close() !!}

	</div>

@stop


@section('footer')
    
@stop
