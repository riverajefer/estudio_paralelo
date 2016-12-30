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
			{!! Form::file('images[]', array('required'=>"required", "class"=>"up_file")) !!}
		</div>

		<p class="errors_img">{!!$errors->first('images')!!}</p>

		<div class="form-group">
			{!! Form::file('images[]', array("class"=>"up_file")) !!}
		</div>	
		<p class="errors_img">{!!$errors->first('espacio2')!!}</p>

		<div class="form-group">
			{!! Form::file('images[]', array("class"=>"up_file")) !!}
		</div>
		<p class="errors_img">{!!$errors->first('espacio3')!!}</p>

		<div class="form-group">
			{!! Form::file('images[]', array("class"=>"up_file")) !!}
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
	<div class="espacio_v5"></div>

@stop


@section('footer')
    
@stop
