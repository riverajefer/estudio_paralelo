@extends('layouts.user')

@section('content')
  @section('head')
    <script src="{{asset('js/picker.js')}}" defer="defer"></script>
    <script src="{{asset('js/picker.time.js')}}" defer="defer"></script>
  @stop
	<div class="panel_espacio">
	    <h1>Listo!, ahora <br>
			agenda tu cita</h1>
	    <p>Cuando quieres que llegue tu paquete? <br>
		 tu paquete sera enviado el dia</p>
	</div>

	{!! Form::open(['action'=>'User\FiltroController@postAgendar']) !!}
	
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif

	  <div class="row">
	    <div class="col s12">
	      <div class="row">
	        <div class="form-group col s6">
	          <i class="material-icons prefix">today</i>
	          <input type="date" class="datepicker" id="fecha" name="fecha" placeholder="Fecha" required>
	        </div>
	        <div class="form-group col s6">
	          <i class="material-icons prefix">av_timer</i>
	          <input type="datetime" class="timepicker" id="hora" name="hora" placeholder="Hora">
	        </div>
	      </div>
	    </div>
	  </div>

		<div class="form-group">
			{!! Form::textarea('observaciones', Null, array('class'=>'materialize-textarea', 'id'=>'observaciones', 'placeholder'=>'Observaciones')) !!}
			<label for="observaciones">Observaciones</label>
		</div>
		<div align="center">
          {!! Form::submit('Finalizar', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
        </div>


	{!! Form::close() !!}	

@stop
