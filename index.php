<?php
	$error=0;
	if(!empty($_GET["error_login"])){
		$error = $_GET["error_login"];
	}
?>
<!DOCTYPE html>



	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria</title>	
	  	<link rel="stylesheet" href="css/estilo.css">	  
		<script type="text/javascript" src="js/funciones.js"></script>
		<meta property="og:image" content="img/icon.png"/>
		<link rel="icon" type="image/png" href="/img/icon.png" />
	</head>
	<body>
		<div id="main">
			<?php
				if($error==1){
					echo "<div id='errorLogin'><p><span class='icon'>8</span>  Error al Iniciar Sesion, Intentelo de nuevo</p></div>";
				}else if ($error==2){
					echo "<div id='errorLogin'><p><span class='icon'>8</span> Tu usuario o contraseña es incorrecto</p></div>";
				}
			?>
			<header>
			<div id="content-logo">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" height="90px" width="auto" alt="alejandria-logo" title="Alejandria"/></a>
				</div>
				<div id="usuario">
					<form id="form_login" method="post" action="procesar.php">						
						<input type="text" name="user_login" placeholder="Usuario" >						
						<input type="password" name="pass_login" placeholder="Contraseña" >
						<input type="submit" name="entrar" value="Iniciar Sesion" class="">
					</form>	
				</div>
			</div>
			<div id="banner-gigante">
				<div class="banner-gigante-presentacion">
					<h2>Alejandria Cloud</h2>
					<p>
						<li>Modesta, Sencilla y Simple de Utilizar</li>
						<li>Gestiona tus documentos, Opina, Valora y Comparte*</li>
						<li>Todos tus Documentos y Libros siempre a mano</li>
					</p>
					<p>
						<a href="./registro.php">Registrate Ahora!</a>
					</p>
				</div>
			</div> <!-- IMAGEN BANNER -->
			<nav>
				<ul id="navegacion">
					<li><a href="#">¿ Alejandria ?</a></li>
					<li><a href="./registro.php">Registrate</a></li>
					<li><a href="#">Contacto</a></li>					
					<li><a href="#">Legal</a></li>
					<li><a href="#">Develop</a></li>
					<li><a href="#">BugTrack <span class='icon'>Ç</span> </a></li>
					<li><a href="https://github.com/pablomario/Alejandria.git">GitHub <span class='icon'>U</span> </a></li>
				</ul>
			</nav>
			</header>
			
		<div id="wrap">
			<article>
				<section>
					<h2>Unete a nosotros y forma parte de la Comunidad</h2>
					<div class="contenido-portada">
						<h3>Tu bliblioteca privada en la nube</h3>
						<p>Es un nuevo Servicio Online que te permite tener tu propia biblitoeca privada donde poder tener almacenada de foram gratuita todos tus documentos y libros.<br/>
						De esta forma podras gestionar todo lo que almacenes en nuestro servicio, agregar nuevos documentos, 
						valorarlos, dejar tus opiniones y proximamente compartitlos con tus amigos.</p>
						<h3>Razones, para que al menos pruebs Alejandria</h3>
						<ol>
							<li>Es Gratis.</li>
							<li>No pretendemos revolucionar tu modo de vida.</li>
							<li>Es muy facil de utilizar.</li>
							<li>Tu ideas y tu opinión son las que nos hacen mejorar.</li>					
							<li>"No hacemos el mal"</li>
							<li>Somos humildes y tú nos importas.</li>
							<li>Los problemas son tratados de forma personal.</li>
						</ol>
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

