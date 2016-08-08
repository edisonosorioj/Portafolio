<?php

class conection{

	function conex(){

	  $dbserver = "52.25.205.86";
	  // $dbserver = "127.0.0.1";
	  // $dbserver = "localhost";
	  $dbuser = "root";
	  $password = "qwer1234";
	  // $password = "";
	  $dbname = "cocorrico";
	 
	  $conex = new mysqli($dbserver, $dbuser, $password, $dbname);

	  if($conex->connect_errno) {
	    die("No se pudo conectar a la base de datos");
	  }

	  return $conex;

	}

}


?>