<?php
	$user_name= $_REQUEST['userName'] ;
	$user_pass= $_REQUEST['password'];
	echo $user_pass . "<br>";
	if($user_pass==12345){
		header("location: profile.php?text=$user_name");
	}
?>