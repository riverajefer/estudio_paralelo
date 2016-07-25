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
	//window.location.href = "seleccione_estilo";

});


