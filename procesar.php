
<?php
	if($_POST['user_login']){	//si tiene contenido lo comparo
		$conexion= new mysqli("127.0.0.1","root","root","alejandria");
		$resultado=$conexion->query("select id, email, contrasena from usuarios where nombre = '".$_POST['user_login']."'");			
			while($row=$resultado->fetch_array(MYSQLI_ASSOC) ){
				$id_usuario=$row['id'];
				$password=$row['contrasena'];
				$email=$row['email'];	
		}

		if($password==md5($_POST['pass_login'])){
			session_start();
			$_SESSION['id']=$id_usuario;
			$_SESSION['username']=$_POST['user_login'];
			$_SESSION['password']=$password;
			$_SESSION['email']=$email;
			header ("Location: portada.php");
		}else{
			header ("Location: index.php?error_login=2");
		}
	}else{
			header ("Location: index.php?error_login=1");
	}
?>