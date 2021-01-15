<?php
require_once("connect.php");
$dldata=$_REQUEST['id'];

$dlData="DELETE FROM formtodb WHERE id=$dldata";
$dldatarun=mysqli_query($dbconnect,$dlData);
if($dldatarun==true){
	header("location:savedata.php?action=deleted");
}

?>