<?php
if( !session_id() )
{
    session_start();
}
require_once '../conection.php';

$conex = new conection();
$result = $conex->conex();
$tr = '';
$tr2 = '';

$query = mysqli_query($result,'select * from contactos order by fecha desc limit 10');

 while ($row = $query->fetch_array(MYSQLI_BOTH)){

 	$tr .=	"<tr class='rows' id='rows'>
				<td>" . $row['fecha'] 	. "</td>
				<td>" . $row['nombre'] 	. "</td>
				<td>" . $row['correo'] 	. "</td>
				<td>" . $row['telefono']. "</td>
				<td>" . $row['mensaje'] . "</td>
				<td><a href='eliminar.php?id=" . $row['id'] . "' class='botonTab' class='botonTab'><img src='../images/eliminar.png' alt='eliminar'></a></td>
			</tr>";

 }


$html = "<html>
	<head>
		<meta charset='UTF-8' />
		<script src='http://code.jquery.com/jquery-1.10.2.min.js'></script>
		<script src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
		<script src='http://code.jquery.com/ui/1.11.3/jquery-ui.min.js'></script>
		<link rel='stylesheet' href='estilos.css' />
	</head>
	<body>
		<nav>
			<p class='title'><h1>Contactos</h1></p>
			<form method='post'>  
				<input type='button' value='Actualizar' onclick='window.location.reload()' />
			</form>   
		</nav>
		<div class='lista_clientes'>
		<table class='table_result' id='table_result'>
				<tr class='name_list'>
					<td class='row_result' width='10%'>Fecha</td>
					<td class='row_result' width='15%'>Nombre</td>
					<td class='row_result' width='20%'>Correo</td>
					<td class='row_result' width='15%'>Telefono</td>
					<td class='row_result' width='25%'>Mensaje</td>
					<td class='row_result' width='5%'><-></td>
				</tr>"
			 . $tr . 
			 "</table>
		</div>
		<footer>
		</footer>
		</body>
</html>";


echo $html;