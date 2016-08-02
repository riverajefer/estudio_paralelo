@extends('layouts.user')
@section('head')
@stop

@section('content')
  
	<div class="panel_espacio">
	    <h1>Selecciona 4 imagenes de referencia</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
    
		<div class="container_">
			@for ($i = 0; $i <= 4; $i++)
			    @foreach($referentes as $referente)
			  		<div class="row-fluid">
			    	<div class="col-md-3 col-xs-12 col-sm-6 img-check">
					  <label>
					    <input type="checkbox" name="referente" value="{{ $referente->id}}" />
					    <img src="{{asset('img/referentes/'.$referente->img)}}"><br>
					    <span style="display:none">Agregado</span>
					  </label>		    	
			    	</div>
			    	</div>
			    @endforeach
		   @endfor
     	</div>
	<br>
   </div>
   <br><br><br>
	<div align="center" style="min-height:55px">
 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_referente" disabled  name="action">Siguiente</button>
	</div>			   
  <!-- Modal Structure -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" id="myModal" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      	<div align="center">
      		<p>Solo puedes seleccionar <br> 4 imagenes</p>
 			<button class="btn waves-effect waves-light btn-azul" data-dismiss="modal">OK</button>
		</div>	
    </div>
  </div>
</div>

@stop
