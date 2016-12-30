@extends('layouts.user')
@section('head')
@stop

@section('content')
  

	<div class="panel_espacio">
	    <h1>Escoje la tonalidad que más <br> se ajuste a tu espacio</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
		{!! Form::open(['action'=>'User\FiltroController@postColor', 'id'=>'formColor']) !!}
		  <div class="row">
					@foreach($colores as $color)
						<div class="col-md-4 col-sm-6 col-xs-12 img-radio">
							<label>
								<input type="radio" name="color" value="{{ $color->id}}" />
								<img src="{{asset('img/colores/'.$color->img)}}" width="75%"><br>
								<span>{{ $color->titulo }}</span>
							</label>		    	
						</div>
					@endforeach
    	   </div>
			<br>
			<div align="center">
				<button class="btn waves-effect waves-light btn-azul" id ="siguiente_color" disabled name="action">CONTINUA</button>
			</div>
   {!! Form::close() !!}
	
	<div class="espacio_v5"></div>

   </div>


@stop
