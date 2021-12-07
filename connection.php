<?php


	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "1B3GoD3IS512LOve";
	$dbname = "fashion";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;

?>
