<?php
	session_start();	
	$id_user=$_SESSION['id'];
?>
<!DOCTYPE html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria</title>	
	  	<link rel="stylesheet" href="css/estilo.css">

	  	<link rel="stylesheet" href="css/reveal.css">	
	  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	  	<script type="text/javascript" src="jquery/rts.js"></script>		
		<script type="text/javascript" src="jquery/jquery.reveal.js"></script>
		<script type="text/javascript" src="js/funciones.js"></script>		
	</head>
	<body>
		<div id="main">
<?php
	include("partes/cabecera.html");
?>	

			<section>
				<article class="video">
				<h1>Agregar Nuevo Documento</h1>
				<form id="form_insertarVideo" name="form_insertarVideo" >
					
					<label for="titulo">Titulo: </label><br/>					
					<input type="text" id="titulo" name="titulo" required aria-required="true"><br/>

					<label for="categoria">Categoria: </label><br/>		
					<input type="text" id="categoria" name="categoria" required aria-required="true"><br/>

					<label for="tags">Tags: </label><br/>		
					<input type="text" id="tags" name="tags" required aria-required="true"><br/>					

					<label for="video">Seleccionar Documento: </label><br/>		
					<textarea type="text/html" id="video" name="video" rows="4" cols="90"></textarea><br/>					

					<input type="button" id="botonGuardar" value="Aceptar" class="boton awesome"
					onclick="javascript:js_insertarVideo();">					
				</form>	
			</article>
			
				<div id="blanco"></div>
			</section><!-- FIN WRAP -->
<?php
	include("partes/footer.html");
?>		
		</div>		<!-- FIN MAIN -->	
	</body>
</html>