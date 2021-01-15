<?php
	session_start();
	$localhost = "localhost";
	$username = "root";
	$password= "";
	$dbname = "ordermaintenance";
	$dbconnect = new mysqli($localhost, $username, $password, $dbname);
	if ($dbconnect -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $dbconnect -> connect_error;
	}

?>