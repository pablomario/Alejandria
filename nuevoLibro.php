<?php

	session_start();
	$id_user=$_SESSION['id'];
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$contenido=$_POST['contenido'];
	$categoria=$_POST['categoria'];

	if(!empty($titulo) && !empty($contenido)) {
		$conexion= new mysqli("127.0.0.1","root","root","alejandria");
		$conexion->query("insert into alejandria(titulo,autor,contenido,categoria,id_usuario) values('$titulo','$autor','$contenido','$categoria','$id_user')");
		echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/gif-load.gif'/><h1>Almacenando Libro</h1></div></body></html>";
		header("Refresh: 5; URL=insertar.php");
	} else {
		echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/alert.jpg' /><h1>Error, algun campo esta vacio</h1></div></body></html>";
		header("Refresh: 5; URL=insertar.php");
	}

?>



