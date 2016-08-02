@extends('layouts.user')
@section('head')
@stop

@section('content')
  

	<div class="panel_espacio">
	    <h1>Selecciona tu color</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
		<div class="container_">
		  <div class="row-fluid">
			<?php $i = 0;?>   
		    @foreach($colores as $color)
		    	<?php $i++;?>
		    	<div class="col-md-4 col-sm-6 col-xs-12 img-radio">
				  <label>
				    <input type="radio" name="color" value="{{ $color->id}}" />
				    <img src="{{asset('img/colores/'.$color->img)}}" width="75%"><br>
				    <span>{{ $color->titulo }}</span>
				  </label>		    	
		    	</div>
		    	@if($i % 2 == 0)
		    		</div>
		    	@endif
		    @endforeach
	</div>
	<br>
	<div align="center">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_color" disabled name="action">Siguiente</button>
	</div>

   </div>


@stop
