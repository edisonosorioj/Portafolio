<?php

require_once "conection.php";

$conex = new conection();
$result = $conex->conex();


	$nombre		=	$_POST['nombre'];
	$correo		=	$_POST['correo'];
	$telefono 	=	$_POST['telefono'];
	$mensaje 	=	$_POST['mensaje'];

	$query = mysqli_query($result,"INSERT INTO contactos (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje');");
	
?>
<html>
	<head>
		<title>Respuesta de Mensaje</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<center>	
			<?php if($query > 0){ ?>
				<h1>Mensaje Enviado!</h1>
				<?php }else{ ?>
				<h1>Error al Enviar Mensaje</h1>		
			<?php	} ?>		
			<a href="index-3.html">Listo!</a>
		</center>
	</body>
	</html>	