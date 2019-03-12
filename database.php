<?php
	//DB Connection
	
	$mysqli = new mysqli('127.0.0.1:50508', 'azure', '6#vWHD_$', 'quizmdb');

	// Errors

	if ($mysqli->connect_error) {die('Connect Error: ' . $mysqli->connect_error);}
?>