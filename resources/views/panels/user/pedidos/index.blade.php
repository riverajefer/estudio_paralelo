@extends('layouts.user')

@section('content')
  
	<div class="panel_espacio">
	    <h1>Lista de pedidos</h1>
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
              <th data-field="det">DETALLES</th>
          </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
          <tr>
            <td>{{$pedido->paquete->titulo}}</td>
            <td>{{$pedido->espacio->titulo}}</td>
            <td>{{$pedido->estilo->titulo}}</td>
            <td>{{$pedido->color->titulo}}</td>
            <td>{{$pedido->fecha->fecha}}</td>	
            <td>$ {{$pedido->paquete->valor}}</td>						
            <td>{{$pedido->estado}}</td>
            <td>
                <a href="{{URL::to('user/pedidos/'.$pedido->id)}}">VER DETALLES</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>

<div class="espacio_v5"></div>

<div class="row">
	<div align="center">
	    <button class="btn waves-effect waves-light btn-rojo">NUEVO PEDIDO</button>
	</div>
</div>


</div>
@stop
@section('footer')
@stop
