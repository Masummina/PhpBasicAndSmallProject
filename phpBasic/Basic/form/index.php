<!DOCTYPE html>
<html>
<head>
	<title>PHP Form</title>
</head>
<body>
	<form action="saveinfo.php" method="POST">
		<label for="fname">Your First Name</label>
		<input type="text" name="fname" value="First Name"><br><br>
		<label for="lname">Your Last Name</label>
		<input type="text" name="lname" placeholder="last Name"><br><br>
		<label for="comment">Your comment</label>
		<textarea name="comment" placeholder="your opinion"></textarea><br><br>
		<label for="comment">Password</label>
		<input type="password" name="passwd">
		<input type="submit" name="submit" placeholder="submit">
	</form>
</body>
</html>
<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>