@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Resumen de tu pedido</h1>
	    <p>Revisa tu pedido, si estás seguro dale en enviar</p>
	</div>

<div class="page_resumen">		


{!! Form::open(['action'=>'User\FiltroController@postResumen']) !!}

      <table class="bordered highlight responsive-table">
        <thead>
          <tr>
              <th data-field="paquete">PAQUETE</th>
              <th data-field="espacio">ESPACIO</th>
              <th data-field="estilo">ESTILO</th>
			  <th data-field="color">COLOR</th>
              <th data-field="cita">MI CITA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>    
				Paquete
		    </td>
            <td>
				<select class="form-control" name="espacio_id">
					@foreach($espacios as $item)
						@if($item->id==$espacio_id)
							<option selected value="{{$item->id}}">{{$item->titulo}}</option>
						@else
							<option value="{{$item->id}}">{{$item->titulo}}</option>
						@endif
					@endforeach
				</select>			
			</td>
            <td>
				<select class="form-control" name="estilo_id">
					@foreach($estilos as $item)
						@if($item->id==$estilo_id)
							<option selected value="{{$item->id}}">{{$item->titulo}}</option>
						@else
							<option value="{{$item->id}}">{{$item->titulo}}</option>
						@endif
					@endforeach
				</select>			
			</td>
			<td>
				<select class="form-control" name="color_id">
					@foreach($colores as $item)
						@if($item->id==$color_id)
							<option selected value="{{$item->id}}">{{$item->titulo}}</option>
						@else
							<option value="{{$item->id}}">{{$item->titulo}}</option>
						@endif
					@endforeach
				</select>			
			</td>
            <td>
	          <input type="date" id="fecha" name="fecha" placeholder="Fecha" value="{{$fecha_cita}}" required>
			</td>
          </tr>
        </tbody>
      </table>

		@if(Session::has('error'))
			<p class="errors">{!! Session::get('error') !!}</p>
		@endif

		<br>
		<br>
		<br>		

		<div align="center">
       		{!! Form::submit('Finalizar', array( 'class'=>'btn waves-effect waves-light btn-azul' )) !!}
    	</div>

	{!! Form::close() !!}	

      <table class="bordered highlight responsive-table">
        <thead>
          <tr>
              <th data-field="envio">ENVIO</th>
              <th data-field="estado">ESTADO</th>
              <th data-field="total">TOTAL</th>
			  <th data-field="lista">MI LISTA</th>
              <th data-field="cita">MI CITA</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>    
				08-09-2016
		    </td>
            <td>    
				EN PROCESO
		    </td>
            <td>    
				$75.679.000
		    </td>
            <td>    
				VER DETALLES
		    </td>									
	      </tr>
		</tbody>
	 </table>

</div>




@stop

@section('footer')
    
@stop
