@extends('layouts.user')
@section('head')
@stop

@section('content')
  

	<div class="panel_espacio">
	    <h1>Selecciona tu estilo</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
		<div class="container">
		  <div class="row-fluid">
			<?php $i = 0;?>   
		    @foreach($estilos as $estilo)
		    	<?php $i++;?>
		    	<div class="col-md-4  img-radio">
				  <label>
				    <input type="radio" name="estilo" value="{{ $estilo->id}}" />
				    <img src="{{asset('img/estilos/'.$estilo->img)}}"><br>
				    <span>{{ $estilo->titulo }}</span>
				  </label>		    	
		    	</div>
		    	@if($i % 2 == 0)
		    		</div>
		    	@endif
		    @endforeach
	</div>
	<br>
	<div align="center">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_estilo" style="display:none" name="action">Siguiente</button>
	</div>

   </div>


@stop