
<!DOCTYPE html>
<html>
<head>
	<title>helloPhp</title>
</head>
<body>
	<form action="save_info.php" method="GET">
		<label for="Fname">First Name</label>
		<input type="text" placeholder="First Name" name="Fname">
		<label for="Last">Last Name</label>
		<input type="text" name="Lname">
		<textarea name="usercom" placeholder="your text"></textarea>
		<label for="pass">Pass</label>
		<input type="password" name="password">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>



<?php
// while loop executes a block of code as long as the specified condition is true
	// while loop => First declare a variable then conditon and increment 
$x=0;
while($x<=10){
	echo "The number is: 
	". $x ."<br>";
	$x++;
}
?>
<?php
$y=4;
do {
	echo "<br> THis number is:". $y;
	$y++;
}while($y<22);
?>

<?php
	echo "<h2>Here is the functon of php</h2>";
	function myfunction($fname){
		echo "$fname Reference.<br>";
	}
	myfunction ("Masum");
	myfunction("Mamun");
?>
<?php
	echo $_SERVER['SERVER_ADDR']
?>
