@extends('layouts.user')

@section('content')
  @section('head')
    
  @stop
	<div class="panel_espacio">
	    <h1>Listo!, ahora <br>
			agenda tu cita</h1>
	    <p>Cuando quieres que llegue tu paquete? <br>
		 tu paquete sera enviado el dia</p>
	</div>

	{!! Form::open(['action'=>'User\FiltroController@postAgendar']) !!}

	<br><br>
	  <div class="row">
	    <div class="col s12">
	      <div class="row">
	        <div class="form-group col s12" style="text-align:center">
	          <img src="{{ asset('img/varios/calendar.png') }}">
	          <br><br>
	          <input type="date" class="datepicker_ s_fecha" id="fecha" name="fecha" placeholder="Fecha" required>
						<p class="errors_img">{!!$errors->first('fecha')!!}</p>
	        </div>
	      </div>
	    </div>
	  </div>

		<div class="form-group">
			{!! Form::textarea('observaciones', Null, array('class'=>'materialize-textarea', 'id'=>'observaciones', 'placeholder'=>'Observaciones')) !!}
			<label for="observaciones">Observaciones</label>
		</div>

		

		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif		

		<div align="center">
       {!! Form::submit('Finalizar', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
    </div>

	<div class="espacio_v5"></div>

	{!! Form::close() !!}	

<script>
/*
<input type="date" class="datepicker">
 $(document).ready(function() {
	   $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year
		format: 'dd/mm/yyyy' 
	  });
 });
*/
</script>

@stop
