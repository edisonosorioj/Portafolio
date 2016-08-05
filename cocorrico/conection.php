<?php

class conection{

	function conex(){

	  // $dbserver = "172.31.36.160";
	  $dbserver = "127.0.0.1";
	  $dbuser = "root";
	  $password = "qwer1234";
	  $dbname = "cocorrico";
	 
	  $conex = new mysqli($dbserver, $dbuser, $password, $dbname);

	  if($conex->connect_errno) {
	    die("No se pudo conectar a la base de datos");
	  }

	  return $conex;

	}

}


?>