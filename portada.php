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
					<h2>Mis Libros</h2>
						<div class="contenido">
						<?php
							$conexion= new mysqli("127.0.0.1","root","root","alejandria");
							$resultado=$conexion->query("select * from alejandria where id_usuario in($id_user,0) order by id desc");
							$contador=1;

							while($row=$resultado->fetch_array(MYSQLI_ASSOC)){
								if($row["portada"]!=null){
									$imagen = $row["portada"];
								}else{
									$imagen = "libros/portada_default.png";
								}
								echo"<div class='libros'>";
								echo "<div class='headerLibros'><img src='usuarios/yo.png'/><span>",$_SESSION['username'],"</spn></div>";
								echo "<div class='contenedorPortadaLibro'>";
								echo"<a href='#' data-reveal-id='myModal",$contador,"' data-animation='fade'><img class='xlibro' src='",$imagen,"'/></a>";
								echo "</div>";
								echo "<div id='myModal",$contador,"' class='reveal-modal'>";
									echo "<div class='muestroLibro'>";
										echo "<img src='",$imagen,"'/>";
										echo "<div class='datos'>";
											echo"<h3> ",$row["titulo"],"</h3>";
											echo"<h3> ",$row["autor"],"</h3>";
											echo "<h4> <a href='#'>",$row["categoria"],"</a></h4>";
											echo "<div class='botonera'>";				
												echo "<a class='botondos descargar' href='#'><span class='icon nube'>m</span> Descargar</a>";
												echo "<a class='botondos compartir' href='#'><span class='icon'>È</span></a>";
												echo "<a class='botondos modificar' href='#'><span class='icon'>></span></a>";
											echo "</div>";
										echo"</div>"; //fin div datos

									echo "</div>"; //fin div muestroLibro

								echo "</div>"; //div del reveal
								$contador++;
								echo "</div>";//div del content

							}
						?>
					</div>
				</section>
			</article>
			
		</div><!-- FIN WRAP -->


<?php
	include("partes/footer.html");
?>
		</div>	<!-- FIN MAIN -->

	</body>
</html>