<?php


	$dbname = "usermgt";
	$dbuser	= "root";
	$dbpass	= "";
	$host	= "localhost";


	function getConnection(){

		global
		   $dbname, 
		   $dbuser, 
		   $dbpass, 
		   $host;

		$conn = mysqli_connect( $dbname, $dbuser,$dbpass,$host,);
		
		return $conn;
		
		
	}


?>