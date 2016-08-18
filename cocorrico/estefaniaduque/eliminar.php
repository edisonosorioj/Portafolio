<?php 
require_once "../conection.php";

$conex = new conection();
$result = $conex->conex();
	
	$id=$_GET['id'];
	
	$query = mysqli_query($result,"delete from contactos where id='$id'");
	
?>

<html>
	<head>
		<title>Contactos</title>
		<meta charset="UTF-8" />
		<link rel='stylesheet' href='../css/reset.css' />
		<link rel='stylesheet' href='../css/estilos.css' />
	</head>
	
	<body>
		<center>
			<?php 
				if($query > 0){
				?>
				
				<h1>Contacto Eliminado</h1>
				
				<?php 	} else { ?>
				
				<h1>Error al Eliminar Contacto</h1>
				
			<?php 	} ?>		
			
			<a href="index.php">Listo!</a>
			
		</center>
	</body>
</html>