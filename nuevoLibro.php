<?php
	session_start();
	$id_user=$_SESSION['id'];
	$titulo=$_POST['titulo'];
	$autor=$_POST['autor'];
	$contenido=$_POST['contenido'];
	$categoria=$_POST['categoria'];

	global $extension, $ruta_foto, $rtOriginal, $original;
	$target_path = "libros/";



almacenar($id_user,$titulo,$autor,$contenido,$categoria,$target_path,$ruta_foto);

function almacenar($id_user,$titulo,$autor,$contenido,$categoria,$target_path,$ruta_foto){
	global $ruta_foto, $target_path;
	if($_FILES['imagen']['type']=="image/jpeg" || $_FILES['imagen']['type']=="image/png"){
		$imagenOriginal=$_FILES['imagen'];
		if(!empty($titulo) && !empty($contenido)) {
			guardar($target_path);
			$conexion= new mysqli("127.0.0.1","root","root","alejandria");
			$conexion->query("insert into alejandria(titulo,portada,autor,contenido,categoria,id_usuario) values('$titulo','$ruta_foto','$autor','$contenido','$categoria','$id_user')");
			echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/gif-load.gif'/><h1>Almacenando Libro</h1></div></body></html>";
			header("Refresh: 2; URL=insertar.php");
		}else {
			echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/alert.jpg' /><h1>Error, algun campo esta vacio</h1></div></body></html>";
			header("Refresh: 2; URL=insertar.php");
		}
	}else {
		echo "<html><head><style type='text/css'>#centrado{padding: 20px;width: 300px;height: auto;text-align: center;margin: 5% auto;box-shadow: 0px 0px 10px #242424;}</style></head><body><div id='centrado'><img src='img/alert.jpg' /><h1>Error, algun campo esta vacio</h1></div></body></html>";
		header("Refresh: 2; URL=insertar.php");
	}
}

function renombrar(){
	if ($_FILES['imagen']['type']=="image/jpeg") {
		$extension = ".jpeg";
	} else if ($_FILES['imagen']['type']=="image/png") {
		$extension = ".png";
	} else{
		$extension = ".jpg";
	}
	$nombre=md5(microtime()).$extension;
	$_FILES['imagen']['name'] = $nombre;
}

function guardar($target_path){	
	renombrar();
	$target_path = $target_path . basename($_FILES['imagen']['name']);
	global $ruta_foto,$rtOriginal, $original;

	if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
		$ruta_foto = $target_path;
		$rtOriginal=$target_path;
		$original = imagecreatefromjpeg($rtOriginal);
		redimensionar($ruta_foto);
	} else{
		$ruta_foto = "libros/portada_default.png";
	}
}

function redimensionar($nombre){
	global $rtOriginal, $original;
	$max_ancho = 180;
	$max_alto = 250;

	list($ancho,$alto)=getimagesize($rtOriginal);

	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;

	if(($ancho <= $max_ancho) && ($alto <= $max_alto)){
	    $ancho_final = $ancho;
	    $alto_final = $alto;
	}else if (($x_ratio * $alto) < $max_alto){
	    $alto_final = ceil($x_ratio * $alto);
	    $ancho_final = $max_ancho;
	}else{
	    $ancho_final = ceil($y_ratio * $ancho);
	    $alto_final = $max_alto;
	}

	$lienzo=imagecreatetruecolor($ancho_final,$alto_final);
	imagecopyresampled($lienzo,$original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	imagedestroy($original);
	$cal=100;
	imagejpeg($lienzo,$nombre,$cal);
}

?>