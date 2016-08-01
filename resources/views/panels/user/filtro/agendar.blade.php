@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Agendar cita con el diseñador</h1>
	    <p>La información se ha enviado al diseñador</p>
	</div>

	{!! Form::open(['action'=>'User\FiltroController@postSubirPlano', 'files'=>true]) !!}
		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif
		<div class="form-group">
			{!! Form::text('first_name', Null, array('class' => 'field')) !!}
		</div>
		<div class="form-group">
			{!! Form::textarea('notes') !!}
		</div>



	{!! Form::close() !!}	

@stop


@section('footer')
    
@stop
