<!DOCTYPE html>
<!-- 
 * Markup for jQuery Reveal Plugin 1.0
 * www.ZURB.com/playground
 * Copyright 2010, ZURB
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 -->
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
				<div id="usuario">
					<form id="form_login" method="post" action="procesar.php">
						<h1>Inicia sesion</h1>
						<label>Usuario: </label><br/>	
										
						<input type="text" name="user_login" placeholder="usuario" ><br/>

						<label>Contrase&ntilde;a: </label><br/>		
						<input type="password" name="pass_login" placeholder="password" ><br/>

						<input type="submit" name="entrar" value="Iniciar Sesion" class="boton">					
					</form>	
				</div>
				<div id="logo"><a href="#"><img src="img/alejandria-logo.png" alt="alejandria-logo" title="Alejandria Video Boxroom"/></a></div>
				<div id="imagen-cabecera"></div>
			</header>		
			<section>	
			<article class="registro">
			
				<h1>Registrate Ahora - Es Gratis</h1>
				<form id="form_registro" name="form_registro">
					
					<label for="user">Usuario: </label><br/>					
					<input type="text" id="user" name="user" placeholder="pepe" required aria-required="true" ><br/>

					<label for="email">email: </label><br/>		
					<input type="text" id="email" name="email" placeholder="pepe@gmail.com" required aria-required="true"><br/>

					<label for="pass1">Contraseña: </label><br/>		
					<input type="password" id="pass1" name="pass1" pattern="\S{6,}" required aria-required="true"><br/>

					<label for="pass2">Repita Contraseña: </label><br/>		
					<input type="password" id="pass2" name="pass2" pattern="\S{6,}" required aria-required="true"><br/>
				

					<input type="button" id="botonGuardar" value="Aceptar" class="boton awesome"
					onclick="javascript:js_registroUsuario();">					
				</form>	
			
			</article>				
			<div id="blanco"></div>	
			<article>
				<h2>Tu Biblioteca Privada y Personal</h2>
				<p>Ya puedes tener tu propia <b>Biblioteca</b> y <b>Emeroteca</b> privada gracias <b>Alejandria</b>. 
					<ul>
						<li><b>Registrate</b> e Inicia Sesion</li>
						<li>Guarda tus <b>Peliculas</b> y <b>Documentales</b> favoritos de Youtube.</li>
						<li>Guarda los <b>Libros</b> y <b>Documentos</b> mas interesantes para ti.</li>
						<li><b>Visualiza Online</b> toda tu biblioteca</li>
						<li>... y todo <b>Gratis!</b></li>
					</ul>						
				</p>
			</article>				
				<div id="blanco"></div>
			</section><!-- FIN WRAP -->
			<footer>
				<p>Alejandria Video boxroom &copy; 2013 - by: monquey</p>
			</footer>
		</div>			
	</body>
</html>