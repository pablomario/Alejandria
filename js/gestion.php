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


	function nuevoLibro(){
		$titulo=$_POST['titulo'];		
		$autor=$_POST['autor'];
		$contenido=$_POST['contenido'];
		$categoria=$_POST['categoria'];			
		if(!empty($titulo) && !empty($contenido)) {	
			$conexion= new mysqli("127.0.0.1","root","root","alejandria");	
			$conexion->query("insert into alejandria(titulo,autor,contenido,categoria,id_usuario) 
				values('$titulo','$autor','$contenido','$categoria','$usuario','$id_user',)");
			echo "Insertado Correctamente";
		} else {
			echo "Error, algun campo esta vacio";
		}
	}

?>


