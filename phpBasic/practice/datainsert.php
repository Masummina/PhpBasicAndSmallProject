<?php
require_once("connect_core.php");
$fname= $_REQUEST['fname'];
$lname= $_REQUEST['lname'];
$user_name= $_REQUEST['user_name'];
$user_email= $_REQUEST['user_email'];
$user_pass= $_REQUEST['user_pass'];
$user_cpass= $_REQUEST['user_cpass'];
$insert_data = "INSERT INTO user_access(fname,lname,user_name,user_email,user_pass) VALUES('$fname','$lname','$user_name','$user_email','$user_pass')";
$runInsert = mysqli_query($bdconnect,$insert_data);
if ($runInsert==true){
    header("location:savedata.php");
}
?>