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
<?php
	include("partes/cabecera.html");
?>			

			<div id="wrap">				
			<section class="izquierda">
				<article>
				<h2>Mas Recientes</h2>	
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
				</article>
					<article>
				<h2>Todos mis Libros</h2>	
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
				</article>
			</section>
				<aside class="derecha">
					<article>
						<h2>Noticias y Mas</h2>
						<p>
							<a href="https://gnu.org/gnu30"><img src="https://static.fsf.org/nosvn/misc/GNU_30th_badge.png" 
								alt="[ Celebrate 30 years of GNU! ]" width="250px" heigt="auto" /></a>	
						</p>
					</article>

					<article>
						<h2>Proyecto en GitHub</h2>
						<p>
							<a href="https://github.com/pablomario/Alejandria.git">
								<img src="img/Octocat.png" height="auto" width="250px" alt="Github logo"/>					
							</a>	
						</p>
					</article>
				</aside>
				

					
			
				<div id="blanco"></div>
			</div><!-- FIN WRAP -->









<?php
	include("partes/footer.html");
?>	
		</div>	<!-- FIN MAIN -->
	
	</body>
</html>