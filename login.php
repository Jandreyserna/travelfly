<?php
	require 'conexion.php';
	session_start();

	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$consulta="SELECT * FROM usuario WHERE user='$email' AND pass='$pass'";
	$ejecutar=mysqli_query($enlace, $consulta);
	$row=mysqli_fetch_array($ejecutar);

	if($row>0){
		$_SESSION['username']= $email;
		header("Location: listar_Administrador.html");
			
	}else{
		echo '<script language="javascript">alert("Error de autentificacion");
			window.location.href="InicioSesion.html"</script>';
	}
?>	
