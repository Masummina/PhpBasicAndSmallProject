<?php

require_once("connectCore.php");
$selectData="SELECT fname,lname,user_name,user_email,user_pass,comment FROM bd_user";
$selectConnect = mysqli_query($dbconnect,$selectData);
if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) && isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])  && isset($_REQUEST['user_name']) && !empty($_REQUEST['user_name']) && isset($_REQUEST['user_pass']) && !empty($_REQUEST['user_pass']) && isset($_REQUEST['comment']) && !empty($_REQUEST['comment'])){

	$fname= $_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$user_name=$_REQUEST['user_name'];
	$user_email=$_REQUEST['user_email'];
	$user_pass=$_REQUEST['user_pass'];
	$comment=$_REQUEST['comment'];
	$insertData="INSERT INTO bd_user(fname,lname,user_name,user_email,user_pass,comment) VALUES('$fname','$lname','$user_name','$user_pass','$comment')";
	$connectINsert=mysqli_query($dbconnect,$insertData);
		if($connectINsert==true){
			echo "inserted Data";
		}else {
			echo "not inserted";
		}
}




$dataCount=mysqli_num_rows($selectConnect);
echo $dataCount;

while ($showData = mysqli_fetch_array($selectConnect)) {
	echo $showData['fname'];
}




?>