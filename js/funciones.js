


function nuevoLibro(){
	$.ajax({
		url:'./js/gestion.php',
		type:'post',
		data:'funcion=nuevoLibro&'+$('#form_nuevoLibro').serialize(),
		async:false,
		success:function(respuesta){
			alert(respuesta);
		}
	});
}


function js_registroUsuario(){
	$.ajax({
		url:'./js/gestion.php',
		type:'post',
		data:'funcion=registroUsuario&'+$('#form_registro').serialize(),
		async:false,
		success:function(respuesta){
		alert(respuesta);
		}
	});
}







