<?php
	session_start();	
	$libro= $_GET["libro"];
	$id_user=$_SESSION['id'];
	$_SESSION['username'];
	$conexion= new mysqli("127.0.0.1","root","root","alejandria");
	$a=$conexion->query("select titulo from alejandria where id=$libro and id_usuario =$id_user");
	$t=$a->fetch_array(MYSQLI_ASSOC);
	$titulo = $t["titulo"];
?>

<!DOCTYPE html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria</title>
	  	<link rel="stylesheet" href="css/estilo.css">
	  	<link rel="stylesheet" href="css/gestionlibroscss.css">
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
			<h2><?php echo $titulo; ?></h2>
				<div class="contenido">
				<div class="gestionportada">
				<?php
					$resultado=$conexion->query("select * from alejandria where id=$libro and id_usuario =$id_user");
					while($row=$resultado->fetch_array(MYSQLI_ASSOC)){
						if($row["portada"]!=null){
							$imagen = $row["portada"];
							echo "<img src='",$imagen,"'/>";
						}else{
							$imagen = "libros/portada_default.png";
							echo "<img src='",$imagen,"'/>";
						}
						$titulo = $row["titulo"];
						$autor = $row["autor"];
						$categoria = $row["categoria"];

					}
				?>
				</div>
				<div class="gestiondatos">
				<form id="form_nuevoLibro" method="post" action="modificar.php" ENCTYPE="multipart/form-data">
					<label for="titulo">Titulo: </label><br/>
					<input type="text" id="titulo" name="titulo" value="<?php echo $titulo; ?>" 
					required aria-required="true" size="55" ><br/>

					<input type="hidden" name="MAX_FILE_SIZE" value="200000000" />
					<label for="imagen">Selecciona una Portada: </label><br/>
					<INPUT type="file" name="imagen" class="multi"><br/>

					<label for="video">Autor: </label><br/>	
					<input  type="text/html" id="autor" name="autor" value="<?php echo $autor; ?>" size="55" ><br/>

					<label for="video">Seleccionar Documento: </label><br/>	
					<input  type="text/html" id="contenido" name="contenido" required aria-required="true"><br/>

					<label for="categoria">Categoria: </label><br/>
					<input type="text" id="categoria" name="categoria" value="<?php echo $categoria; ?>" size="55" ><br/>

					<input type="submit" name="Aceptar" value="Guardar Cambios" class="boton awesome" ></INPUT>
				</form>
				<a href="borrarlibro.php?libro=<?php echo $libro;?>&imagen=<?php echo $imagen;?>"><span class='icon'>Ë</span> Borrar Libro</a>
				</div>
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