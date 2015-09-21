<?php

$nombre = $_POST["nombre"];
$de = $_POST["email"];
$mensaje = $_POST["motivo"];

if (!empty($nombre) AND !empty($mensaje) AND !empty($de)) {
// $headers = "MIME-Version:1.0;\r\n";
$para = "edisonosorioj@gmail.com";
$headers = "Content-Type: text/html; charset=UTF-8 \r\n";
$headers .= "From: $de;". "\r\n";
$asunto = "Contacto desde el sitio Website de: $nombre";
// $headers .= "To: $para;. \r\n .Subject:$asunto;. \r\n";

@mail($para,$asunto,$mensaje,$headers);
	echo "Mensaje enviado correctamente<br /><a href='../index.html'>Volver</a>";
} else {
	echo "El mensaje no fue enviado. Intentalo de nuevo";
}

?>