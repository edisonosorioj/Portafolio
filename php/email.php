<?php

if (isset($_POST['email'])) {
	$email_to = "edisonosorioj@gmail.com";
	$email_subject = "Contacto desde el sitio Web";

	if(!isset($_POST['nombre']) || !isset($_POST['email']) || !isset($_POST['motivo'])){
		echo "<b>Ocurrío un error y el formulario no ha sido enviado.</b><br />";
		echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
		die();
	}

	$email_message = "Detalles de formulario de contacto:\n\n";
	$email_message = "Nombre: " . $_POST['nombre'] . "\n";
	$email_message = "Email: " . $_POST['email'] . "\n";
	$email_message = "Motivo: " . $_POST['motivo'] . "\n";

	$headers = 'From:'.$email_from."\r\n".
	'Reply-To:'.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to,$email_subject,$email_message,$headers);

echo "El formulario se ha enviado con éxito";

}

?>