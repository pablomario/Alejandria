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
		<script type="text/javascript" src="jquery/jquery.reveal.js"></script>	
		<script type="text/javascript" src="js/funciones.js"></script>			
	</head>
	<body>
		<div id="main">
			<header>
					<div id="usuario"><p>Bienvenido Pablo ( <span><a href="index.php">Desconectar</a></span> ) </p></div>
				<div id="logo"><a href="index.php"><img src="img/alejandria-logo.png" alt="alejandria-logo" title="Alejandria Video Boxroom"/></a></div>
			

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

			<section class="wrap">
				<h1>Estanteria</h1>
			<article class="izquierda">
				<h2>Videos</h2>	
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

				<article class="derecha">
				<h2>Libros</h2>
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
			
				<div id="blanco"></div>
			</section><!-- FIN WRAP -->
			<footer>
				<p>Alejandria Video boxroom &copy; 2013 - by: monquey</p>
			</footer>
		</div>			
	</body>
</html>