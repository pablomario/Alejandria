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
			<header>
					<div id="usuario"><p>Bienvenido Pablo ( <span><a href="#">Desconectar</a></span> ) </p></div>
				<div id="logo"><a href="#"><img src="img/alejandria-logo.png" alt="alejandria-logo" title="Alejandria Video Boxroom"/></a></div>
			

				<div id="imagen-cabecera"></div>
			</header>
			<nav>
				<ul id="navegacion">
					<li><a href="portada.php">Portada</a></li>
					<li><a href="insertar.php">Agregar Video</a></li>
					<li><a href="#">Agregar Libro</a></li>
				</ul>
			</nav>
			<div id="blanco"></div>

			<section>
				<article class="video">
				<h1>Agregar Nuevo Video</h1>
				<form id="form_insertarVideo" name="form_insertarVideo" >
					
					<label for="titulo">Titulo Video: </label><br/>					
					<input type="text" id="titulo" name="titulo" required aria-required="true"><br/>

					<label for="categoria">Categoria: </label><br/>		
					<input type="text" id="categoria" name="categoria" required aria-required="true"><br/>

					<label for="tags">Tags: </label><br/>		
					<input type="text" id="tags" name="tags" required aria-required="true"><br/>

					<label for="autor">Autor: </label><br/>		
					<input type="text" id="autor" name="autor" required aria-required="true"><br/>

					<label for="video">Video Youtube: </label> <span> * Youtube > Compartir > Insertar</span><br/>		
					<textarea type="text/html" id="video" name="video" rows="4" cols="90"></textarea><br/>					

					<input type="button" id="botonGuardar" value="Aceptar" class="boton awesome"
					onclick="javascript:js_insertarVideo();">					
				</form>	
			</article>
			
				<div id="blanco"></div>
			</section><!-- FIN WRAP -->
			<footer>
				<p>Alejandria Video boxroom &copy; 2013 - by: monquey</p>
			</footer>
		</div>			
	</body>
</html>