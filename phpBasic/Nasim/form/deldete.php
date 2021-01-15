<?php
require_once("connect.php");
$dataDelete = "DELETE * FROM material_info WHERE id=$_REQUEST['id']";
$delete_connect = mysqli_query($dbconnect,$dataDelete);
if($delete_connect==true){
    echo "Delete Connected";
} else {
    echo "no Connect";
}
?>