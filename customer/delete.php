<?php
	include 'config.php';
	$delete_data = $_GET['id'];
	$delete_query =  "DELETE FROM `user_table` WHERE id = $delete_data ";
   $sql_data = mysqli_query($dbconnect, $delete_query);
    if($sql_data = true){
	    header("location: user.php");
	   }
?>