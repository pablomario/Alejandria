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
			<article>
				<section>
					<h2>Mas Recientes</h2>	
					<div class="contenido">
						<?php
							$conexion= new mysqli("127.0.0.1","root","root","alejandria");					
							$resultado=$conexion->query("select * from alejandria where id_usuario in($id_user,0) order by id desc");		
							$contador=1;	
													
							while($row=$resultado->fetch_array(MYSQLI_ASSOC)){	
							echo"<div class='libros'>";									
							echo"<a href='#' class='big-link enlace-video' data-reveal-id='myModal",$contador,"' data-animation='fade'><img class='zoom' src='libros/portada_default.png'/></a>";
							echo "<div id='myModal",$contador,"' class='reveal-modal'><div class=contenidoentrada>",$row["contenido"],"</div>"; 
							echo "<div class='extra'><h3>",$row["nombre"],"</h3></div>";
							echo "<div class='extra'><span>CATEGORIA: </span><a href='#'>",$row["categoria"],"</a> | <span>TAGS: </span> <a href='#'>",$row["categoria"],"</a></div>";																							
							echo "</div>"; //div del reveal
							$contador++;
							echo "</div>";//div del content
							}									
						?>	
					</div>
				</section>
				<section>
					<h2>Todos mis Libros</h2>	
					<div class="contenido">
						<?php
							$conexion= new mysqli("127.0.0.1","root","root","alejandria");					
							$resultado=$conexion->query("select * from alejandria where id_usuario in($id_user,0) order by id desc");		
							$contador=1;	
													
							while($row=$resultado->fetch_array(MYSQLI_ASSOC)){	
							echo"<div class='content'>";									
							echo"<h3><a href='#' class='big-link enlace-video' data-reveal-id='myModal",$contador,"' data-animation='fade'>",$row["nombre"],"</a></h3>";
							echo "<div id='myModal",$contador,"' class='reveal-modal'><div class=contenidoentrada>",$row["contenido"],"
							</div><a class='close-reveal-modal'>&#215;</a></div>";
							echo "<div class='extra'><span>CATEGORIA: </span><a href='#'>",$row["categoria"],"</a> | <span>TAGS: </span> <a href='#'>",$row["categoria"],"</a></div>";																							
							$contador++;
							echo "</div>";
							}									
						?>	
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