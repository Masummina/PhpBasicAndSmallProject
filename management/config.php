<?php
$localhost = "localhost";
$username = "root";
$pass = "";
$dbname = "order_management";
$dbconnect = new mysqli($localhost, $username, $pass, $dbname);
if ($dbconnect->connect_error) {
die("Connection failed: " . $dbconnect->connect_error);
}


?>