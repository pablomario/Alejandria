<?php
if($_POST['entrar']){
	$password=$_POST['pass_login'];
	if($password=="hola"){
		session_start();
		$_SESSION['username']=$_POST['user_login'];
		$_SESSION['password']=$password;

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
}
?>