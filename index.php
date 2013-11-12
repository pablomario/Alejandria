<!DOCTYPE html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title>Alejandria</title>	
	  	<link rel="stylesheet" href="css/estilo.css">	  
		<script type="text/javascript" src="js/funciones.js"></script>		  	
	</head>
	<body>
		<div id="main">		
			<header>
			<div id="content-logo">
				<div id="logo">
					<a href="index.php"><img src="img/alejandria-logo.png" alt="alejandria-logo" title="Alejandria"/></a>
				</div>
				<div id="usuario">
					<form id="form_login" method="post" action="procesar.php">					
						<label>Usuario: </label><br/>											
						<input type="text" name="user_login" placeholder="usuario" ><br/>

						<label>Contrase&ntilde;a: </label><br/>		
						<input type="password" name="pass_login" placeholder="password" ><br/>

						<input type="submit" name="entrar" value="Iniciar Sesion" class="boton">					
					</form>	
				</div>
			</div>	
			<div id="imagen-cabecera"></div> <!-- IMAGEN BANNER -->
			<nav>
				<ul id="navegacion">
					<li><a href="#">¿Alejandria?</a></li>
					<li><a href="#">Staff</a></li>
					<li><a href="#">Legal</a></li>
					<li><a href="https://github.com/pablomario/Alejandria.git">GitHub</a></li>
				</ul>
			</nav>
			</header>
			<div id="blanco"></div> <!-- SALTO  O ESPACIO EN BLANCO -->
		<div id="wrap">	
			<article class="izquierda">	
				<section class="registro oscuro">			
					<h2>Registrate Ahora - Es Gratis</h2>
					<form id="form_registro" name="form_registro">
						
						<label for="user">Usuario: </label><br/>					
						<input type="text" id="user" name="user" placeholder="pepe" required aria-required="true" ><br/>

						<label for="email">email: </label><br/>		
						<input type="text" id="email" name="email" placeholder="pepe@gmail.com" required aria-required="true"><br/>

						<label for="pass1">Contraseña: </label><br/>		
						<input type="password" id="pass1" name="pass1" pattern="\S{6,}" required aria-required="true"><br/>

						<label for="pass2">Repita Contraseña: </label><br/>		
						<input type="password" id="pass2" name="pass2" pattern="\S{6,}" required aria-required="true"><br/>
					

						<input type="button" id="botonGuardar" value="Aceptar" class="boton"
						onclick="javascript:js_registroUsuario();">					
					</form>	
				
				</section>				
				<section>					
					<h2>Tu Biblioteca Privada y Personal</h2>
					<div class="content oscuro">
						<p>Ya puedes tener tu propia <b>Biblioteca</b> y <b>Emeroteca</b> privada gracias <b>Alejandria</b>. 							
							<ul>
								<li><b>Registrate</b> e Inicia Sesion</li>
								<li>Guarda tus <b>Peliculas</b> y <b>Documentales</b> favoritos de Youtube.</li>
								<li>Guarda los <b>Libros</b> y <b>Documentos</b> mas interesantes para ti.</li>
								<li><b>Visualiza Online</b> toda tu biblioteca</li>
								<li>... y todo <b>Gratis!</b></li>
							</ul>												
						</p>
					</div>
				</section>					
			</article>
			<aside class="derecha">
					<section>
						<p>
						<div class="g-person" data-href="//plus.google.com/116013699202610954014" data-rel="author"></div>
						</p>			
					<script type="text/javascript">
						(function() {
						var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						po.src = 'https://apis.google.com/js/plusone.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						})();
					</script>
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

