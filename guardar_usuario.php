<?php
	include('conexion.php');

	foreach ($_REQUEST as $var => $val) {
	$$var=$val;
	}
	
	$consulta = "INSERT INTO usuario(nombre, apellido, documento, celular, fechaNacimiento, id_genero, pais, estado,
	direccion, email, user, pass, confirmPass, foto) VALUES ('$nombre', '$apellido', '$documento', '$celular', '$fechaNacimiento', 
	'$id_genero', '$pais', '$estado', '$direccion', '$email','$user', '$pass', '$confirmPass', '$foto')";

	mysqli_query($enlace, $consulta);
	mysqli_close($enlace);
	header("Location: index.html");
?>	