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
              <th data-field="estado">ESTADO</th>
              <th data-field="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{$filtro->paquete->titulo}}</td>
            <td>{{$filtro->espacio->titulo}}</td>
            <td>{{$filtro->estilo->titulo}}</td>
            <td>{{$filtro->color->titulo}}</td>
            <td>{{$filtro->fecha->fecha}}</td>	
						<td>{{$filtro->estado}}</td>
						<td>$ {{$filtro->paquete->valor}}</td>						
          </tr>
        </tbody>
      </table>

		<br>
		<br>

    <p>Referentes seleccionados</p>
		<div class="row">
			@foreach (Auth::user()->referentes as $referente)
				<div class="col-md-3 col-xs-12 col-sm-6">
				  <a href="{{asset('img/referentes/'.$referente->img)}}" data-lightbox="image-1" data-title="{{$referente->descripcion}}">
				 	 <img width="150" src="{{asset('img/referentes/'.$referente->img)}}">
					</a>
				</div>		
			@endforeach
			</div>	
		</div>
	<hr>	
	<p>Referentes Subidos</p>
	<div class="row">
		@foreach (Auth::user()->fotosRefUser as $referente)
			<div class="col-md-3 col-xs-12 col-sm-6">
			  <a href="{{asset('uploads/referentes/'.Auth::user()->id.'/'.$referente->img)}}" data-lightbox="image-2" data-title="{{$referente->descripcion}}">
				 <img width="150" src="{{asset('uploads/referentes/'.Auth::user()->id.'/'.$referente->img)}}">
				</a>
			</div>		
		@endforeach
		</div>	
	</div>

<div class="espacio_v5"></div>

<div class="row">
	<div class="col-md-4 col-md-offset-3 col-xs-12 col-sm-6">
			<button class="btn waves-effect waves-light btn-azul">NUEVO PEDIDO</button>
	</div>
	<div class="col-md-4 col-xs-12 col-sm-6">
			<button class="btn waves-effect waves-light btn-azul">LISTA DE PEDIDOS</button>
	</div>

</div>

<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })	

</script>

</div>
@stop
@section('footer')
@stop
