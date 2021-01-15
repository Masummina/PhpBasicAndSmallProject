<?php
	include 'config.php';
	if(isset($_GET['id'])){
	$deleteid = $_GET['id'];
	$delete_query =  "DELETE FROM `user_table` WHERE 'id'='$deleteid'";
   $sql_data = mysqli_query($dbconnect, $delete_query);
    if($sql_data = true){
	    header("location: user.php");
	   }
}
?>