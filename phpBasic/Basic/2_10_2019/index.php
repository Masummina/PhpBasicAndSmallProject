<!DOCTYPE html>
<?php

$xname="Masum MIna";
$xValue="Engineer";
setcookie($xname, $xValue, time() + (86400 * 30), "/");
?>
<html>
<head>
	<title>erfsd</title>
</head>
<body>
<?php
	if(isset($_COOKIE[$xname])){
		echo "Cookie Name is:" . $xname . "is not set<br>";
	}else{
		echo "cookie is set of" . $xname . "is set";
	}

?>
</body>
</html>