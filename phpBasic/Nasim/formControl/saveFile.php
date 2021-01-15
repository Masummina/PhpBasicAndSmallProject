
<pre>
<?php


echo "<h1>My form Information </h1>";
$first_Name= $_REQUEST['fname'];
$email_add= $_REQUEST['mail'];
$pass_word= $_REQUEST['password'];
$ConfPass_word= $_REQUEST['cpassword'];

$file_Upload= $_FILES['fileupload'];
if($pass_word==$ConfPass_word){
	echo "";
}else {
	echo "<h2><font color='red'>your Password is not same</font></h2>" . "<br>";
}
if($pass_word==123456){
	header("location:https://tutorialsclass.com/exercises/php/php-all-exercises-assignments");
}
$name_Length= strlen($first_Name);
if (($name_Length>=6)==false) {
	header("location: index.php?U_name=This name is too short");
}

$cpass_check= strlen($ConfPass_word);
if (($cpass_check >= 6) == false) {
	header('location: index.php?pass_word=password is too short!');
}
//password same check
if(($pass_word==$ConfPass_word)==false){
	header("location: index.php?Not_same_pass=Please try again Your password is not same");
}

echo "<b> My Full Name is: </b>" . $first_Name . "<br>";
echo "<b> My Email Address is: </b>". $email_add . "<br>";
echo "<b> Password is </b>" . $pass_word . "<br>";
echo "<b> Conform Password is </b>" . $ConfPass_word . "<br>";
 echo "<h3>My image info:</h3>";
 var_dump($file_Upload) . "<br>";
 echo "<h1>File Information Print </h1>" . "<br>";
 echo "Image name is: " . $file_Upload['name'] . "<br>";
 $image_name= $file_Upload['name'];
 echo "Image type is: " . $file_Upload['type'] . "<br>";
 echo "Image tmp_name is: " . $file_Upload['tmp_name'] . "<br>";
 echo "Image size is: " . floor($file_Upload['size']/1000) . "<br>";
move_uploaded_file($file_Upload['tmp_name'], "image/$image_name");
//echo "<img src='image/coming-soon.jpg' alt='PHPimae'/>";

?>
</pre>