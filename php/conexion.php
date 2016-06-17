<?php

$dbhostname = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$DB = "portafolio";

$conn = new mysqli($dbhostname,$dbusername, $dbpassword,$DB); 

if (mysqli_connect_errno()) {
	exit('Fallo Conexion: ' . mysqli_connect_error());
}
 
return $conn;
?>