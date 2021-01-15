<?php
// $fname= $_REQUEST['fname'];
// $lname=$_REQUEST['lname'];
// $user_name=$_REQUEST['user_name'];
// $user_email=$_REQUEST['user_email'];
// $user_pass=$_REQUEST['user_pass'];
// $comment=$_REQUEST['comment'];
// echo $comment;

$local="localhost";
$username="freemasum";
$dbpass="freemasum@2019";
$dbname="php22";

$dbconnect=mysqli_connect($local,$username,$dbpass,$dbname);
if($dbconnect==true){
	echo "Core_connected";
}

?>