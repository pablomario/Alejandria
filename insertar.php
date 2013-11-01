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
						<form id="form_insertarVideo" name="form_insertarVideo" >

							<label for="titulo">Titulo: </label><br/>					
							<input type="text" id="titulo" name="titulo" required aria-required="true"><br/>

							<label for="categoria">Categoria: </label><br/>		
							<input type="text" id="categoria" name="categoria" required aria-required="true"><br/>

							<label for="tags">Tags: </label><br/>		
							<input type="text" id="tags" name="tags" required aria-required="true"><br/>					

							<label for="video">Seleccionar Documento: </label><br/>		
							<textarea type="text/html" id="video" name="video" rows="4" cols="40"></textarea><br/>					

							<input type="button" id="botonGuardar" value="Aceptar" class="boton awesome"
							onclick="javascript:js_insertarVideo();">					
						</form>	
					</div>
				</section>				
			</article>
			<aside class="derecha">
				<section>
					<h2>Noticias y Mas</h2>
					<p>
						<a href="https://gnu.org/gnu30"><img src="https://static.fsf.org/nosvn/misc/GNU_30th_badge.png" 
							alt="[ Celebrate 30 years of GNU! ]" width="250px" heigt="auto" /></a>	
					</p>
				</section>

				<section>
					<h2>Proyecto en GitHub</h2>
					<p>
						<a href="https://github.com/pablomario/Alejandria.git">
							<img src="img/Octocat.png" height="auto" width="250px" alt="Github logo"/>					
						</a>	
					</p>
				</section>
			</aside>
						
			
				<div id="blanco"></div>
		</div><!-- FIN WRAP -->


<?php
	include("partes/footer.html");
?>	
		</div>	<!-- FIN MAIN -->
	
	</body>
</html>