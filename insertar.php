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
<?php include("partes/cabecera.html"); ?>			

			<div id="wrap">				
			<article class="izquierda">
				<section>
					<h2>Agregar Nuevo Documento</h2>	
					<div class="contenido">
						<form id="form_nuevoLibro" method="post" action="nuevoLibro.php">

							<label for="titulo">Titulo: </label><br/>					
							<input type="text" id="titulo" name="titulo" required aria-required="true"><br/>

							<label for="video">Autor: </label><br/>	
							<input  type="text/html" id="autor" name="autor"><br/>							
						
							<label for="video">Seleccionar Documento: </label><br/>	
							<input  type="text/html" id="contenido" name="contenido" required aria-required="true"><br/>

							<label for="categoria">Categoria: </label><br/>		
							<input type="text" id="categoria" name="categoria"><br/>	
							
							<input type="submit" name="Aceptar" value="Aceptar" class="boton awesome">										
						</form>	
					</div>
				</section>				
			</article>			
						
			
				<div id="blanco"></div>
		</div><!-- FIN WRAP -->


<?php
	include("partes/footer.html");
?>	
		</div>	<!-- FIN MAIN -->
	
	</body>
</html>