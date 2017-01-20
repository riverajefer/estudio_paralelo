@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}" />

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
             <a href="#" data-toggle="modal" data-target="#exampleModal" data-usuario="{{$pedido->user->first_name}} {{$pedido->user->last_name}}" data-userid="{{$pedido->user->id}}">
                Asignar
             </a>
            </td> 
          </tr>
        @endforeach
        </tbody>
      </table>
      <?php echo $pedidos->render(); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Asignar un diseñador para  <span></span> </h4>
      </div>
      <div class="modal-body">
        <h4>Lista de diseñadores</h4>
        <br>
        {!! Form::open(array('id' =>'form_asignar')) !!}
          <ul class="lista">
          </ul>
          <br>
          <p class="errors" style="display:none">Seleccione un diseñador</p> 
          <input type="submit" class="btn btn-success" value="Aceptar">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

</div>
<script>
$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});



$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var usuario = button.data('usuario') // Extract info from data-* attributes
  var user_id = button.data('userid') 
  
  var modal = $(this)
  modal.find('.modal-title span').text(usuario)

  $.get( "lista_designers", function( data ) {
    console.log("data: ", data);

    $.each(data, function (index, value) {
      console.log("index: ",index);
 
      console.log("data: ",value);
      var radio = '<input name="optDesigner" type="radio" id="des'+index+'"  /><label for="des'+index+'">'+value.first_name + ' ' + value.last_name+'</label>';
      $(".lista").append('<li> '+ radio +'</li>');
    });
  });

  $('#exampleModal').on('hidden.bs.modal', function (e) {
    console.log("Close modal");
    $(".lista").empty();
  });

  $('#form_asignar').submit(function(e){

    if($('input[name=optDesigner]:checked').length<=0)
    {
      $(".errors").fadeIn("slow");
    }else{
      $(".errors").hide();

      var form = $(this);
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "gestion_pedidos/asignar_designer",
        dataType: "json",
        type: "POST",
        data: {_token: CSRF_TOKEN},
        success: function (data) {
          console.log("retorno: ",data)
        }
      });

    }
   
    return false;
    e.preventdefault()

  });


})


</script>


@endsection