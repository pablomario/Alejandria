<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria - Registro</title>	
	  	<link rel="stylesheet" href="css/estilo.css">	  
		<script type="text/javascript" src="js/funciones.js"></script>
		<meta property="og:image" content="img/icon.png"/>
		<link rel="icon" type="image/png" href="/img/icon.png" />
	</head>
	<body>
		<div id="main">			
			<header>
			<div id="content-logo">
				<div id="logo">
					<a href="index.php"><img src="img/logo.png" height="90px" width="auto" alt="alejandria-logo" title="Alejandria"/></a>
				</div>
			</div>
				<nav>
				<ul id="navegacion">
					<li><a href="#">¿ Alejandria ?</a></li>
					<li><a href="#">Registrate</a></li>
					<li><a href="#">Contacto</a></li>
					<li><a href="#">Develop</a></li>
					<li><a href="#">Legal</a></li>
					<li><a href="https://github.com/pablomario/Alejandria.git">GitHub</a></li>
				</ul>
			</nav>
			<div id="banner-gigante">
				<div class="banner-gigante-registro">
					<div id="registro-nuevo">
						<form id="form_registro" name="form_registro">
							<label for="user">Nombre de Usuario: </label>
							<input type="text" id="user" name="user" placeholder="Ej. Pablo2014" required aria-required="true" >
							<label for="email">Tu Email: </label>
							<input type="text" id="email" name="email" placeholder="Ej. pablo2014@gmail.com" required aria-required="true">

							<label for="pass1">Elige una contraseña: </label>
							<input type="password" id="pass1" name="pass1" pattern="\S{6,}" placeholder="Ej. Lector123" required aria-required="true">

							<label for="pass2">Repite la Contraseña: </label>
							<input type="password" id="pass2" name="pass2" pattern="\S{6,}" placeholder="Ej. Lector123" required aria-required="true">

							<input type="submit" name="entrar" value="Registrarme Ahora" onclick="javascript:js_registroUsuario();">
						</form>
					</div>

				</div>
			</div> <!-- IMAGEN BANNER -->
		
			</header>

		<div id="wrap">
			<article>

			</article>
		</div><!-- FIN WRAP -->
		<?php
			include("partes/footer.html");
		?>
	</div>	<!-- FIN MAIN -->
	</body>
</html>

