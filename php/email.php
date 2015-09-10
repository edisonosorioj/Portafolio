<?php

$to = "edisonsorioj@gmail.com";
$subject = "Contacto por Página";
$user = $_POST["nombre"];
$motivo = $_POST["motivo"];
$txt = "Hola soy " . $user .  "\r\n" . $motivo;
$headers = "From: " . $_POST["email"];

mail($to,$subject,$txt,$headers);

function send(){
	if(mail() == true){
		echo '<script language="javascript">alert("Mensaje enviado correctamente!");</script>';
	}
	else 
		echo '<script language="javascript">alert("Intentalo de nuevo! Algo no se ingreso correctamente");</script>';
}

return send();

?>