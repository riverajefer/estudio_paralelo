@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>¿Tienes algun referente, <br>
			o foto de tu espacio?, subelo!</h1>
	    <br>
	    <p>
	    	Támbien puedes subir un plano de tu espacio <br>
			encuentra mas instruciones aquí
	    </p>
	    <img src="{{ asset('img/varios/Icons-15.png') }}">
	    <br>

	{!! Form::open(['action'=>'User\FiltroController@postSubirEspacios', 'files'=>true]) !!}
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif


		<div class="form-group">
			<input type="file" class="filestyle" id="file3" name="espacio1" required>
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

		<div class="form-group e_moment">
			<img src="{{ asset('img/varios/Icons-16.png') }}" width="30px"> 
			<a href="{{ url('user/agendar') }}">
			En otro momento
			</a>
		</div>

        <div class="form-group">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_imgespacio"  name="action">CONTINUA</button>

        </div>
    {!! Form::close() !!}

	</div>

@stop


@section('footer')
    
@stop
