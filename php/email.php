<?php

$nombre = addslashes($_POST["nombre"]);
$email = addslashes($_POST["email"]);
$mensaje = addslashes($_POST["motivo"]);

$cabeceras = "From: $email\n"
 .  "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web";
$email_to = "edisonosorioj@gmail.com";
$contenido = "$nombre a enviado un mensaje desde el sitio Website\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";

if (mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
die("Gracias, su mensaje se envio correctamente.<br /><a href='index.html'>Volver</a>");
}else{
 
die("Error: Su informaci&oacute;n no pudo ser enviada, 
	intente m&aacute;s tarde");
}

?>