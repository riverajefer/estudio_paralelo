@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>¿Deseas subir fotografías del espacio?</h1>
	    <br>
	    <div class="container">
		    <div class="row">
		    	<div class="col-md-6 col-sm-6 col-xs-6">
			    	<a href="{{ URL::to('user/subir_espacios') }}" class="btn waves-effect waves-light btn-azul">
			    		SI
			    	</a>
		    	</div>
		    	<div class="col-md-6 col-sm-6 col-xs-6">
			    	<a href="{{ URL::to('user/agendar') }}" class="btn waves-effect waves-light btn-rojo">
			    		NO
			    	</a>
		    	</div>
		    </div>
	    </div>
	</div>

@stop


@section('footer')
    
@stop
