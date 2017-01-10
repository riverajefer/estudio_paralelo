@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Detalles del pedido </h1>
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
            <td>{{$pedido->paquete->titulo}}</td>
            <td>{{$pedido->espacio->titulo}}</td>
            <td>{{$pedido->estilo->titulo}}</td>
            <td>{{$pedido->color->titulo}}</td>
            <td>{{$pedido->AgendarCita->fecha}}</td>	
						<td>$ {{$pedido->paquete->valor}}</td>						
						<td>{{$pedido->estado}}</td>
          </tr>
        </tbody>
      </table>
		<br>
		<br>
    <h2 class="ti_ref">Referentes seleccionados</h2>
		<div class="row">
			@foreach ($pedido->referentes as $referente)
				<div class="col-md-3 col-xs-12 col-sm-6">
				  <a href="{{asset('img/referentes/'.$referente->img)}}" data-lightbox="image-1" data-title="{{$referente->descripcion}}">
				 	 <img width="150" src="{{asset('img/referentes/'.$referente->img)}}">
					</a>
				</div>		
			@endforeach
			</div>	
		</div>
	<hr>	
	<h2 class="ti_ref">Referentes Subidos</h2>
	<div class="row">
		@foreach ($pedido->fotosRefPedido as $referente)
			<div class="col-md-3 col-xs-12 col-sm-6">
			  <a href="{{asset('uploads/referentes/user_'.Auth::user()->id.'/'.$pedido->id.'/'.$referente->img)}}" data-lightbox="image-2" data-title="{{$referente->descripcion}}">
				 <img width="150" src="{{asset('uploads/referentes/user_'.Auth::user()->id.'/'.$pedido->id.'/'.$referente->img)}}">
				</a>
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
			<a href="{{URL::to('user/pedidos')}}">
				<button class="btn waves-effect waves-light btn-azul">MI LISTA DE PEDIDOS</button>
			</a>
	</div>

</div>

</div>
@stop
@section('footer')
@stop
