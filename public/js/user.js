/***************************************
SCRIPTS USER
***************************************/
$('input[name=espacio]').click(function(){
	$("#siguiente_espacio").prop("disabled", false);
});

$("#siguiente_espacio").click(function(){

	if($('input[name=espacio]:checked').length<=0)
	{
	  alert("Seleccione un espacio")
	}
	window.location.href = "seleccione_estilo";

});


$('input[name=estilo]').click(function(){
	$("#siguiente_estilo").prop("disabled", false);
});

$("#siguiente_estilo").click(function(){

	if($('input[name=estilo]:checked').length<=0)
	{
	  alert("Seleccione un estilo")
	}

	window.location.href = "seleccione_color";

});

$('input[name=color]').click(function(){
	$("#siguiente_color").prop("disabled", false);
});




$("#siguiente_color").click(function(){

	if($('input[name=color]:checked').length<=0)
	{
	  alert("Seleccione un color")
	}
	window.location.href = "seleccione_referentes";

});


$('input[name=referente]').click(function(){
	$("#siguiente_referente").prop("disabled", false);
	
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

	window.location.href = "subir_referente";

});



$("#file1").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Sube un referente (opcional)"
});


$("#file2").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Sube tu plano"
});

$("#file3").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Foto del espacio 1"
});

$("#file4").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Foto del espacio 2"
});

$("#file5").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Foto del espacio 3"
});

$("#file6").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Foto del espacio 4"
});