/***************************************
SCRIPTS USER
***************************************/
$('input[name=espacio]').click(function(){
	$("#siguiente_espacio").prop("disabled", false);
});

$("#formEspacio").submit(function(){

	if($('input[name=espacio]:checked').length<=0)
	{
	  alert("Seleccione un espacio")
	  return false;
	}
	return true;
});


$("#formEstilo").submit(function(){

	if($('input[name=estilo]:checked').length<=0)
	{
	  alert("Seleccione un estilo")
	  return false;
	}
	return true;
});


$("#formColor").submit(function(){

	if($('input[name=color]:checked').length<=0)
	{
	  alert("Seleccione un color")
	  return false;
	}
	return true;
});


$("#formReferenteUSer").submit(function(){
	if($('.sreferente:checked').length<=0)
	{
	  alert("Seleccione almenos un referente")
	  return false;
	}
	return true;
});



$('input[name=estilo]').click(function(){
	$("#siguiente_estilo").prop("disabled", false);
});



$('input[name=color]').click(function(){
	$("#siguiente_color").prop("disabled", false);
});


$("#siguiente_color").click(function(){

	if($('input[name=color]:checked').length<=0)
	{
	  alert("Seleccione un color")
	}
	return true;
});



$('.sreferente').click(function(){
	console.log($(this).siblings('span'))
	$(".sreferente:checked").siblings('span').show();
	$(".sreferente:not(:checked)").siblings('span').hide();
	$("#siguiente_referente").prop("disabled", false);
	
	var numberOfChecked = $('.sreferente:checked').length;
	if(numberOfChecked>4){
		$(this).prop( "checked", false );
		$(".sreferente:not(:checked)").prop("disabled", true);
		$(".sreferente:not(:checked)").siblings('span').hide();
		$('#myModal').modal('show')

	}
	else if(numberOfChecked==0){
		 $("#siguiente_referente").hide();
		 //$(this).siblings('span').hide();
		 $(".sreferente:checked").siblings('span').hide();
		 $(".sreferente:not(:checked)").siblings('span').hide();
	}
	else if(numberOfChecked<4){
		$(".sreferente:not(:checked)").prop("disabled", false);
		$(".sreferente:not(:checked)").siblings('span').hide();

	}

});
/*
$( ".img-check" ).hover(
  function() {
  	console.log("hover");
    $(this).find('.ref_check').show();
  }, function() {
  	console.log("Rolhover");
    $(this).find('.ref_check').hide();
  }
);
*/


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
	placeholder: "Imagen 1"
});

$("#file4").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Imagen 2"
});

$("#file5").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Imagen 3"
});

$("#file6").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Imagen 4"
});


 $( document ).ready(function() {
	   $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year
		format: 'dd/mm/yyyy' 
	  });

	   $('.timepicker').pickatime()
 });



 $('input[name=group1]').click(function(){
 	console.log("Click")

	
});



$(window).on("load",function(){
	    $(".caja_ref").mCustomScrollbar({
	    	 theme:"my-theme"
	    });
	});


