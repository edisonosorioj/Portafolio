<?php

include ('conection.php');

$conex = new conection();

$conection = $conex->conex();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

	$query = "INSERT INTO contactos (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
	
	if ($result = $conection->query($query)) {
		echo "Exito";
	}else{
		echo "Hubo error!";
	}

?>