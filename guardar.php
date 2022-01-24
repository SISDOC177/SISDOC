<?php

require("conexion.php");

$conn = connectdb();

$Nombre = $_POST['Nombre'];

$Usuario = $_POST['Usuario'];

$Contraseña = $_POST['Contraseña'];

$Correo = $_POST['Correo'];



$query = "INSERT INTO usuarios (Nombre,Usuario,Password,Correo) VALUES ('$Nombre', '$Usuario', '$Contraseña','$Correo')";
$resultado = $conn->query($query);

	if(!$resultado)
	{

		echo "Error en la ejecucion";
		exit();
	} 
	else
	{
		print" <script lenguaje='javascript'>
		var respuesta = confirm('datos guardados');
		if(respuesta = true) 
		{

			window.location.href='index.php';

		} 
		

			</script>";
		}

?>

