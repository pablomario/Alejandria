<?php
 $funcion=$_POST["funcion"]; 
 if(!empty($funcion))
  call_user_func($funcion);

	function registroUsuario(){
		$nombre=$_POST['user'];
		$email=$_POST['email'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];	
		if($pass1==$pass2){		
			$pass=md5($pass1);			
			if(!empty($nombre) && !empty($email) && !empty($pass)){	
				$conexion= new mysqli("127.0.0.1","root","root","alejandria");				
				$conexion->query("insert into usuarios(nombre,email,contrasena) values('$nombre','$email','$pass')");
				echo "Registrado Correctamente";							
			} else {
				echo "Error, algun campo esta vacio";
			}
		}else{
			echo "Las contrasenas no coinciden";
		}	
	}


	function insertarVideo(){
		$titulo=$_POST['titulo'];
		$categoria=$_POST['categoria'];
		$tags=$_POST['tags'];
		$autor=$_POST['autor'];
		$video=$_POST['video'];
		if(!empty($titulo) && !empty($categoria) && !empty($tags) && !empty($autor) && !empty($video)) {	
		$conexion= new mysqli("127.0.0.1","root","root","alejandria");	
		$conexion->query("insert into alejandria(nombre,categoria,tags,autor,contenido) values('$titulo','$categoria','$tags','$autor','$video')");
			echo "Insertado Correctamente";
		} else {
			echo "Error, algun campo esta vacio";
		}
	}

?>


