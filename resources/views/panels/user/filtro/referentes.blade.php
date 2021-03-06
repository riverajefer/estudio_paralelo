@extends('layouts.user')
@section('content')
	{!! HTML::style('/plugins/scrollbar/jquery.mCustomScrollbar.css') !!}
	

	<div class="panel_espacio">
	    <h1>¡Ya casi terminas! selecciona tus imágenes favoritas. <br>
	     y las usaremos como fuente de inspiración.</h1>
	    <p>
	    	Hand-picked professional interior designers. <br>
			Room designs start at just $299.
	    </p>
	    <p>&nbsp;</p>
	    {!! Form::open(['action'=>'User\PedidoController@postReferentes', 'id'=>'formReferenteUSer']) !!}
	    <div class="caja_ref">
			@for ($i = 0; $i <= 4; $i++)
			    @foreach($referentes as $referente)
			  		<div class="row-fluid">
			    	<div class="col-md-3 col-xs-12 col-sm-6 img-check">
					  <label>
					    <input type="checkbox" class="sreferente" name="referente[]" value="{{ $referente->id}}" />
					    <img src="{{asset('img/referentes/'.$referente->img)}}"><br>
					    <span class="ref_check" style="display:none">
					    	<img src="{{asset('img/varios/check.png')}}" alt="check">
					    </span>
					  </label>		    	
			    	</div>
			    	</div>
			    @endforeach
		   @endfor
	   </div>
		<div align="center" style="min-height:55px">
	 		<button class="btn waves-effect waves-light btn-azul" id ="siguiente_referente" disabled  name="action">CONTINUA</button>
		</div>			   
	   {!! Form::close() !!}
   </div>

	<p class="espacio_v3"></p>

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
	<p class="espacio_v6"></p>

@stop
