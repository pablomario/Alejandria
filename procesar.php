<?php
if($_POST['user_login']){	
	$conexion= new mysqli("127.0.0.1","root","root","alejandria");
	$resultado=$conexion->query("select id, email, contrasena from usuarios 
		where nombre = '".$_POST['user_login']."'");			
	while($row=$resultado->fetch_array(MYSQLI_ASSOC) ){
		$id_usuario=$row['id'];
		$password=$row['contrasena'];
		$email=$row['email'];
		echo $id_usuario+$password+$email;
	}
/*			
if($password==$_POST['pass_login']){
	session_start();
	$_SESSION['username']=$_POST['user_login'];
	$_SESSION['password']=$password;
	$_SESSION['email']=$email;
?>
	<script type="text/javascript">
		window.location="portada.php";
	</script>
<?php

}else{
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>
	<?php
}
*/
}

?>