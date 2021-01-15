<!DOCTYPE html>
<html>
<head>
	<title>hello World</title>
</head>
<body>
	<?php 
	echo "My First PHP Script";
	#This is a single comment
	?>
	<?php
		$x= 55;
		function myfunction(){
			$y="dddddd";
			echo "<h>This is a Gloabal Variable $y </h2>";
		}
		myfunction();
	?>
	<?php 
		$x=44;
		$y=55;
		function mytest(){
			global $x, $y;
			$x+=$y;
		}
		mytest();
		echo "</br>";
		echo $x;
	?>
	<?php
		$g=66;
		$u=88;
		function mytes(){
			$GLOBALS['g'] = $GLOBALS['x'] + $GLOBALS['u'];
		}
		mytes();
		echo $g;
	?>
	<?php
		function Myfun(){
		static $x=0;
		echo "<br>";
			echo $x;
			echo "</br>";
			$x++;
		}
		Myfun();
		Myfun();
		Myfun();
	?>
	<?php
	//php array Data Type
	$car = array("Yeamoto", "BMW","TOYOTa","suzuki");
	var_dump($car);
	echo "<br>";
	$color = array(
	"red"=>"#ff0000",
	"green"=>"#00ff00",
	"Blue"=>"#0000ff"
	);
	var_dump($color);
	?>
	<?php
		class greeting{
			//properties...  
			public $tex="Hello World";
			//method
			function myfun(){
				return $this->tex;
			}
		}
		echo "<br>";
		//create opbject from class
		$message= new greeting;
		var_dump($message);
	?>
	<?php
		// open a file for reading
		$handle= fopen("note.txt", "r");
		var_dump($handle)
	?>
	<?php
 $d =date("D");
 if($d== "Sun"){
 	echo "Have a nice day";
 }
 else {
 	echo "string";
 }
	?>
	<?php
	echo "<br>";
		$today= date("D");
		switch($today){
			case 'Sat':
				echo "Tody is Saterday, Buy some food";
				break;
			case 'Sun':
				echo "Today is sunday";
				break;
				case 'Mon':
				echo "Today is monday";
				break;
				case 'Tue':
				echo "Today is Tuesday";
				break;
				default:
				echo "No inforamtion";
				break;
		}
	?>
	<?php
		$discrict  = array("khulna", "Dhaka", "Rajsahi","Comilla");
		$countded= count($discrict);
		for($x=0; $x < $countded; $x++){
			echo $discrict[$x];
		}
	?>
</body>
</html>