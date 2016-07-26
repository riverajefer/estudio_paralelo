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
		<div class="container">
		  <div class="row-fluid">
			<?php $i = 0;?>   
		    @foreach($espacios as $espacio)
		    	<?php $i++;?>
		    	<div class="col-md-4 img-radio">
				  <label>
				    <input type="radio" name="espacio" value="{{ $espacio->id}}" />
				    <img src="{{asset('img/espacios/'.$espacio->img)}}"><br>
				    <span>{{ $espacio->titulo }}</span>
				  </label>		    	
		    	</div>
		    	@if($i % 2 == 0)
		    		</div>
		    	@endif
		    @endforeach
    
	</div>
	<div align="center">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_espacio" style="display:none" name="action">Siguiente</button>
	</div>
	<br>
	<br>
	<br>

   </div>


@stop
