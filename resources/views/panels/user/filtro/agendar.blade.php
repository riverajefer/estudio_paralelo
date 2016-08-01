@extends('layouts.user')

@section('content')
  @section('head')
    <script src="{{asset('js/picker.js')}}" defer="defer"></script>
    <script src="{{asset('js/picker.time.js')}}" defer="defer"></script>
  @stop
	<div class="panel_espacio">
	    <h1>Agendar cita con el diseñador</h1>
	    <p>La información será enviada al diseñador</p>
	</div>

	{!! Form::open(['action'=>'User\FiltroController@postAgendar']) !!}
	
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif

	  <div class="row">
	    <form class="col s12">
	      <div class="row">
	        <div class="form-group col s6">
	          <i class="material-icons prefix">today</i>
	          <input type="date" class="datepicker" id="fecha" name="fecha" placeholder="Fecha">
	        </div>
	        <div class="form-group col s6">
	          <i class="material-icons prefix">av_timer</i>
	          <input type="datetime" class="timepicker" id="hora" name="hora" placeholder="Hora">
	        </div>
	      </div>
	    </form>
	  </div>

		<div class="form-group">
			{!! Form::textarea('observaciones', Null, array('class'=>'materialize-textarea', 'id'=>'observaciones', 'placeholder'=>'Observaciones')) !!}
			<label for="observaciones">Observaciones</label>
		</div>

        <div align="center" class="form-group">
          {!! Form::submit('Finalizar', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
        </div>


	{!! Form::close() !!}	

@stop


@section('footer')
<script>
   $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
	format: 'dd/mm/yyyy' 
  });

   $('.timepicker').pickatime()	
</script>
@stop
