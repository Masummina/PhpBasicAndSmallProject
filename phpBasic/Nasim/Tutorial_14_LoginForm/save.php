<?php
$mail = "masum2mina@gmail.com";
$password = 12345;
	$userEmail = $_REQUEST['fname'] . "<br>";
	$userPass = $_REQUEST['password'] ."<br>";
	echo "<h2>Data Base information</h2>". "<br>";
	echo $mail . "<br>";
	echo $password;
	echo "<h4>User Information</h4>";
	echo $userEmail;
	echo "<br>";
	echo $userPass;
	echo "<br><hr>";
	echo "<h4>Result</h4>";
	if($password==$userPass){
		echo "You are logged";
	}
	else{
		echo "<font color='red'>Please currect email or pass</font>";
	};
?>