<?php

//CONECTAMOS CON LA BD
require "conexion.php";
if(!empty($_POST['activo'])){
	unset($_POST['activo']);
	$consulta = "INSERT INTO  usuario(Contraseña,Usuario) VALUES('".$_POST['password']."','".$_POST['usuario']."')";
	$consulta2 = "INSERT INTO  `data-user`(Nombre,Apellido,DNI,Fecha_Nacimiento,Genero,Lugar_Nacimiento,Correo) VALUES('".$_POST['nombres']."','".$_POST['apellidos']."','".$_POST['documento']."','".$_POST['fechaNacimeinto']."','".$_POST['genero']."','".$_POST['lugarNacimiento']."','".$_POST['email']."')";
	mysqli_query($enlace, $consulta);
	mysqli_query($enlace, $consulta2);
}

//VOLVEMOS A LA PÁGINA PRINCIPAL
header("Location:crearCuenta.html");