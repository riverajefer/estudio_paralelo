/***************************************
SCRIPTS USER
***************************************/

// jQuery plugin to prevent double submission of forms
jQuery.fn.preventDoubleSubmission = function() {
  $(this).on('submit',function(e){
    var $form = $(this);

    if ($form.data('submitted') === true) {
      // Previously submitted - don't submit again
      e.preventDefault();
    } else {
      // Mark it so that the next submit can be ignored
      $form.data('submitted', true);
    }
  });

  // Keep chainability
  return this;
};
$('form').preventDoubleSubmission();


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
		 //$("#siguiente_referente").hide();
		 //$(this).siblings('span').hide();
		 //$("#siguiente_referente").prop("disabled", false);
		 $(".sreferente:checked").siblings('span').hide();
		 $(".sreferente:not(:checked)").siblings('span').hide();
	}
	else if(numberOfChecked<4){
		$(".sreferente:not(:checked)").prop("disabled", false);
		$(".sreferente:not(:checked)").siblings('span').hide();
	}
});


$("#formReferenteUSer").submit(function(){
	if($('.sreferente:checked').length<=0)
	{
	  //alert("Seleccione almenos un referente")
		Materialize.toast('Seleccione por lo menos un referente', 5000, 'errorToast', 'rounded')
	  return false;
	}
	return true;
});


$(".up_file").filestyle({
	buttonBefore: true,
	buttonText: "",
	buttonName: "btn-upload",
	iconName: "glyphicon glyphicon-cloud-upload",
	placeholder: "Sube un referente"
});

 $('input[name=group1]').click(function(){
 	console.log("Click")
 });

$(window).on("load",function(){
	$(".caja_ref").mCustomScrollbar({
	   theme:"my-theme"
	});
});

//$('select').material_select();
