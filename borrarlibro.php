<?php
	session_start();
	$id_user=$_SESSION['id'];
	$libro=$_GET['libro'];
	$imagen=$_GET['imagen'];

echo "<img src=$imagen />";
borrarlibro($libro,$id_user,$imagen);
function borrarlibro($libro, $id_user, $imagen){
		if(!empty($libro)) {
			$conexion= new mysqli("127.0.0.1","root","root","alejandria");
			$conexion->query("delete from alejandria where id ='$libro' and id_usuario ='$id_user'");

			if(file_exists($imagen)){
				if (unlink($imagen))
			else{
				print "Este archivo no existe";
			}

			echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/gif-load.gif'/><h1>Eliminando Libro</h1></div></body></html>";
			header("Refresh: 5; URL=portada.php");
		}else {
			echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/alert.jpg' /><h1>Error, algun campo esta vacio</h1></div></body></html>";
			header("Refresh: 5; URL=portada.php");
		}
	}


?>

