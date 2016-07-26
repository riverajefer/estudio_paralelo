/***************************************
SCRIPTS USER
***************************************/
$('input[name=espacio]').click(function(){
	$("#siguiente_espacio").show();
});

$("#siguiente_espacio").click(function(){

	if($('input[name=espacio]:checked').length<=0)
	{
	  alert("Seleccione un espacio")
	}
	window.location.href = "seleccione_estilo";

});


$('input[name=estilo]').click(function(){
	$("#siguiente_estilo").show();
});

$("#siguiente_estilo").click(function(){

	if($('input[name=estilo]:checked').length<=0)
	{
	  alert("Seleccione un estilo")
	}

	window.location.href = "seleccione_color";

});

$('input[name=color]').click(function(){
	$("#siguiente_color").show();
});




$("#siguiente_color").click(function(){

	if($('input[name=color]:checked').length<=0)
	{
	  alert("Seleccione un color")
	}
	window.location.href = "seleccione_referentes";

});


$('input[name=referente]').click(function(){
	$("#siguiente_referente").show();
	
	var numberOfChecked = $('input[name=referente]:checked').length;
	if(numberOfChecked>4){
		$(this).prop( "checked", false );
		$("input[name=referente]:not(:checked)").prop("disabled", true);
		$('#myModal').modal('show')
	}
	else if(numberOfChecked==0){
		 $("#siguiente_referente").hide();
	}
	else if(numberOfChecked<4){
		$("input[name=referente]:not(:checked)").prop("disabled", false);
	}

});


$("#siguiente_referente").click(function(){

	window.location.href = "subir_referentes";

});

