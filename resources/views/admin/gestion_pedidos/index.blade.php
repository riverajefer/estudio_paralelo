@extends('layouts.app')

@section('content')
<h1>Gestión de Pedidos</h1>
	<div class="panel_espacio">
	    <h1>Lista de pedidos</h1>
	    <p></p>
		<div class="espacio_v5"></div>
	</div>


<div class="page_pedido">		
      <table class="bordered highlight responsive-table">
        <thead>
          <tr>
              <th data-field="user">USUARIO</th>
              <th data-field="paquete">PAQUETE</th>
              <th data-field="espacio">ESPACIO</th>
              <th data-field="estilo">ESTILO</th>
			  <th data-field="color">COLOR</th>
              <th data-field="cita">FECHA DE CITA</th>
              <th data-field="total">TOTAL</th>
              <th data-field="estado">ESTADO</th>
              <th data-field="det">DETALLES</th>
              <th data-field="asig">ASIGNAR A UN DISEÑADOR</th>
              
          </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
          <tr>
            <td>{{$pedido->user->first_name}} {{$pedido->user->last_name}}</td>
            <td>{{$pedido->paquete->titulo}}</td>
            <td>{{$pedido->espacio->titulo}}</td>
            <td>{{$pedido->estilo->titulo}}</td>
            <td>{{$pedido->color->titulo}}</td>
            <td>{{$pedido->AgendarCita->fecha}}</td>	
            <td>$ {{$pedido->paquete->valor}}</td>						
            <td>{{$pedido->estado}}</td>
            <td>
                <a href="{{URL::to('admin/pedidos/'.$pedido->id)}}">VER</a>
            </td>
            <td>
             Asignar
            </td> 
          </tr>
        @endforeach
        </tbody>
      </table>

</div>

@endsection