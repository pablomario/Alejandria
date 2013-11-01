<?php
	session_start();	
	$id_user=$_SESSION['id'];
	$_SESSION['username'];
?>

<!DOCTYPE html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria</title>	
	  	<link rel="stylesheet" href="css/estilo.css">

	  	<link rel="stylesheet" href="css/reveal.css">	
	  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.reveal.js"></script>	
		<script type="text/javascript" src="js/funciones.js"></script>			
	</head>
	<body>
		<div id="main">
<?php include("partes/cabecera.html"); ?>			

			<div id="wrap">				
			<article class="izquierda">
				<section>
					<h2>Busqueda Avanzada</h2>	
					<div class="contenido">
						<div class="buscador">
							<input type="text" size="30" placeholder="Buscar..." autocomplete="off" id="buscar" /> 
	                 		<input type="button" value="Buscar" size="80" id="submit" /> 
	                 	</div>  	
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