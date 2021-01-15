<?php
	echo "<h2>If login are ok then auto redirect</h2>";
	echo "<hr>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<form action="welcome.php" method="POST">
		<label for="UserName">User Name</label>
		<input type="text" name="userName" placeholder="your user Name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>
