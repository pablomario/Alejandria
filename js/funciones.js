


function js_insertarVideo(){
	$.ajax({
		url:'./js/gestion.php',
		type:'post',
		data:'funcion=insertarVideo&'+$('#form_insertarVideo').serialize(),
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







