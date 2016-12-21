@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Detalles del pedido</h1>
	    <p></p>
			<div class="espacio_v5"></div>
	</div>

<div class="page_pedido">		
      <table class="bordered highlight responsive-table">
        <thead>
          <tr>
              <th data-field="paquete">PAQUETE</th>
              <th data-field="espacio">ESPACIO</th>
              <th data-field="estilo">ESTILO</th>
			 			  <th data-field="color">COLOR</th>
              <th data-field="cita">MI CITA</th>
              <th data-field="total">TOTAL</th>
              <th data-field="estado">ESTADO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$filtro->paquete->titulo}}</td>
            <td>{{$filtro->espacio->titulo}}</td>
            <td>{{$filtro->estilo->titulo}}</td>
            <td>{{$filtro->color->titulo}}</td>
            <td>{{$filtro->fecha->fecha}}</td>	
						<td>$ {{$filtro->paquete->valor}}</td>						
						<td>{{$filtro->estado}}</td>
          </tr>
        </tbody>
      </table>
		<br>
		<br>
    <h2 class="ti_ref">Referentes seleccionados</h2>
		<div class="row">
			@foreach (Auth::user()->referentes as $referente)
				<div class="col-md-3 col-xs-12 col-sm-6">
					<img class="materialboxed" data-caption="{{$referente->descripcion}}" width="150" src="{{asset('img/referentes/'.$referente->img)}}">
				</div>		
			@endforeach
			</div>	
		</div>
	<hr>	
	<h2 class="ti_ref">Referentes Subidos</h2>
	<div class="row">
		@foreach (Auth::user()->fotosRefUser as $referente)
			<div class="col-md-3 col-xs-12 col-sm-6">
				<img class="materialboxed" data-caption="{{$referente->descripcion}}" width="150" src="{{asset('uploads/referentes/'.Auth::user()->id.'/'.$referente->img)}}">
			</div>		
		@endforeach
		</div>	
	</div>

<div class="espacio_v5"></div>

<div class="row">
	<div class="col-md-4 col-md-offset-3 col-xs-12 col-sm-6">
			<a href="{{URL::to('user/nuevo_pedido')}}">
				<button class="btn waves-effect waves-light btn-rojo">NUEVO PEDIDO</button>
			</a>
	</div>
	<div class="col-md-4 col-xs-12 col-sm-6">
			<a class="btn waves-effect waves-light btn-azul" href="{{URL::to('user/pedidos')}}">MI LISTA DE PEDIDOS</a>
	</div>

</div>


</div>
@stop
@section('footer')
@stop
