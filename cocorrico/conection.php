<?php

class conection{

	function conex(){

	  $dbserver = "52.25.205.86:3306";
	  // $dbserver = "127.0.0.1";
	  // $dbserver = "localhost";
	  $dbuser = "cocorrico";
	  $password = "qwer1234";
	  // $password = "";
	  $dbname = "cocorrico";
	 
	  $conex = new mysqli($dbserver, $dbuser, $password, $dbname);

	  if($conex->connect_errno) {
	    echo "Errno: " . $conex->connect_errno . "\n";
		echo "Error: " . $conex->connect_error . "\n";
	    die("No se pudo conectar a la base de datos");
	  }

	  return $conex;

	}

}

$conn = new conection();

$conn->conex();


?>