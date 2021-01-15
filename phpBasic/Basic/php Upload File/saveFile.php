<pre>
<?php
	$summitted_Name= $_FILES['filetoupload'];
	//echo var_dump($summitted_Name);
	$file_name = $summitted_Name["name"];
	$file_type = $summitted_Name["type"];
	$file_tmp_name = $summitted_Name["tmp_name"];
	$file_size = $summitted_Name["size"];
	//echo "File size is:" . floor("$file_size/1000 ") ."KB";

	echo "File Name is: ". $file_name;
	echo "<br>";
	echo "File Type is: ". $file_type;
	echo "<br>";
	echo "File Tmp name is: ". $file_tmp_name;
	echo "<br>";
	$file_convert= $file_size/1000;
	if ($file_convert>1000) {
		echo "File Size is:". $file_convert . " MB";
	}
	else{
		echo "File Size is:". $file_convert . " KB";
	}
echo "<br>";
	move_uploaded_file($file_tmp_name, "image/$file_name");

echo "<img src='image/NID Card.png'>";
?>






</pre>

