<?php
// pass valid/invalid emails
$email = "mail@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $email . '" = Valid'."\n";
}
else 
{
     echo '"' . $email . '" = Invalid'."\n";
}
?>
<?php
	//check mail valid or invalid
	$email="masum2mina@gmail.com";
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<br>This Variable" . $email . "is valid";
	}
	else{
		echo "This email is invalid";
	}
?>

<?php
	//Create a table by php
	$a=1000;
	$b=2000;
	$c=3000;
	echo "<table border=1 cellspace=0 cellpading=0>
		<tr><td><font color=blue>Salary of Mr. R is</td><td>$a</font></td></tr>
		<tr><td><font color=blue>Salary of Mr. S is</td><td>$b</font></td></tr>
		<tr><td><font color=blue>Salary of Mr. AA is</td><td>$c</font></td></tr>
	</table>";
?>
<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>

<?php
echo "<br>";
$file = basename($_SERVER['PHP_SELF']); 
$no_of_lines = count(file($file)); 
echo "There are $no_of_lines lines in $file"."\n";
?>
<pre>
<?php
echo "<br>";
// arithmetic operator on character variable
$d= 'A00';
for($n=0; $n<5; $n++){
	echo ++$d . "<br>";
}
echo $x;
print_r(error_get_last());
?>
</pre>
<?php
$a=15;
$b=34;
$temp=$a;
$a=$b;
$b=$temp;
echo "Number a =".$a." and b=".$b."\n";
?>