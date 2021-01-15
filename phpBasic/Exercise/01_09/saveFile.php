 
<pre>
 <?php
  //define variable and set empty file
  $fanem= $_REQUEST['fname'];
  $mail= $_REQUEST['mail'];
  $password= $_REQUEST['password'];
  $cpassword= $_REQUEST['cpassword'];
  $comment= $_REQUEST['comment'];
  $gender= $_REQUEST['gender'];
  $fileupload= $_FILES['fileupload'];



echo $fanem . "<br>";
echo $mail . "<br>";
echo $password . "<br>";
echo $cpassword . "<br>";
echo $comment . "<br>";
echo $gender . "<br>";
echo $fileupload . "<br>";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($fanem)){
		header("location: index.php?Name_ree=Your Filds is empty");
	} else echo "Your Name is:" . $fanem;
	if (($password==$cpassword) == false) {
		header("location: index.php?Wrong_pass=Your Password is not same!");
	}else{
		echo $cpassword;
	}
}
$imagenaem= $fileupload['name'];
move_uploaded_file($fileupload['tmp_name'], "image/$imagenaem]");

  ?>
<?php 

echo "<br>";
?>
<?php
$myfile = fopen("mytext.txt", "r");
echo $myfile;
fclose($myfile);
?>

  </pre>