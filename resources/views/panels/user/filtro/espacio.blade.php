@extends('layouts.user')
@section('head')
@stop

@section('content')
  

	<div class="panel_espacio">
	    <h1>Selecciona el tipo de espacio <br>
			que deseas renovar</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
  
		<div class="container">
		{!! Form::open(['action'=>'User\FiltroController@postEspacio', 'id'=>'formEspacio']) !!}
		    @foreach($espacios as $espacio)
		  		<div class="row-fluid">
			    	<div class="col-md-4 col-sm-6  col-xs-12  img-radio img-radio-espacios">
					  <label>
					    <input type="radio" name="espacio" value="{{ $espacio->id}}" />
					    <img src="{{asset('img/espacios/'.$espacio->img)}}"><br>
					    <span>{{ $espacio->titulo }}</span>
					  </label>		    	
			    	</div>
		    	</div>
		    @endforeach
     	</div>

		<div align="center">
	 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_espacio" disabled name="action">CONTINUA</button>
		</div>	

		<div class="espacio_v5">
		</div>

		{!! Form::close() !!}
   </div>


@stop
