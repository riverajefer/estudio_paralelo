@extends('layouts.user')
@section('head')
@stop

@section('content')
  

	<div class="panel_espacio">
	    <h1>Selecciona el tipo de espacio</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
  
		  
		<div class="container" style="width:60%">
		    @foreach($espacios as $espacio)
		  		<div class="row-fluid">
		    	<div class="col-md-3 col-xs-12 img-radio">
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
	 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_espacio" style="display:none; margin:0px" name="action">Siguiente</button>
		</div>	


   </div>


@stop
