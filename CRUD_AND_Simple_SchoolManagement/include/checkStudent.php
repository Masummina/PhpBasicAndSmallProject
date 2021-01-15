<?php 

   $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schoolmanagement";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


if(isset($_POST['className'])){
	$classnam = $_POST['className'];
	// echo "$classnam";
	$sql = "SELECT * FROM `all_students` WHERE class_name = '$classnam'";
	$result = $conn->query($sql);
	$num_col = $result->num_rows;
	if($num_col > 0){
		echo "Admited student is: ". $num_col;
	}else{
		echo "No student Admited:";
	}
	
}

if(isset($_POST['StudentName'])){
	$stdName =  $_POST['StudentName'];
	$sql = "SELECT * FROM `all_students` WHERE name = '$stdName'";
	$result = $conn->query($sql);
	if($result){
		while($rows = $result->fetch_assoc()){
			$fatName =  $rows['fat_name'];
			$stdname =  $rows['name'];
			$stdid =  $rows['id'];
			$motName =  $rows['mot_name'];
			$stdage =  $rows['age'];
			$stdimg =  $rows['image'];
			$classname =  $rows['class_name'];
			$student_arr = array("id" => $stdid, "name" => "$stdname", "fatname" => "$fatName", "motName" => "$motName", "stdage" => "$stdage", "stdimg" => "$stdimg", "classname" => "$classname");
		}

	}
	// encoding array to json format
	if(isset($student_arr)){
		echo json_encode($student_arr);
	}
	
}


// department Check and form load
if(isset($_POST['department'])){
	$dept = $_POST['department'];
	if($dept=='arch'){
		?>
		<div class="department-area">
			<div class="form-group">
		      <label for="name">Arch Sub01:</label>
			      <input type="number" class="form-control" id="dep01" placeholder="Enter mark" name="dep01" required>
			</div>
			<div class="form-group">
		      <label for="name">Arch Sub02:</label>
			      <input type="number" class="form-control" id="dep02" placeholder="Enter mark" name="dep02" required>
			</div>
			<div class="form-group">
		      <label for="name">Arch Sub03:</label>
			      <input type="number" class="form-control" id="dep03" placeholder="Enter mark" name="dep03" required>
			</div>
		</div>

		<?php
	}elseif($dept=='commerce')
	{
	
	?>
	<div class="department-area">
		<div class="form-group">
	      <label for="name">Commerce Sub01:</label>
		      <input type="number" class="form-control" id="dep01" placeholder="Enter mark" name="dep01" required>
		</div>
		<div class="form-group">
	      <label for="name">Commerce Sub02:</label>
		      <input type="number" class="form-control" id="dep02" placeholder="Enter mark" name="dep02" required>
		</div>
		<div class="form-group">
	      <label for="name">Commerce Sub03:</label>
		       <input type="number" class="form-control" id="dep03" placeholder="Enter mark" name="dep03" required>
		</div>
	</div>

	<?php
	}elseif ($dept=="science") {
			?>
		<div class="department-area">
			<div class="form-group">
		      <label for="name">Science Sub01:</label>
			     <input type="number" class="form-control" id="dep01" placeholder="Enter mark" name="dep01" required>
			</div>
			<div class="form-group">
		      <label for="number">Science Sub02:</label>
			      <input type="number" class="form-control" id="dep02" placeholder="Enter mark" name="dep02" required>
			</div>
			<div class="form-group">
		      <label for="number">Science Sub03:</label>
			       <input type="number" class="form-control" id="dep03" placeholder="Enter mark" name="dep03" required>
			</div>
		</div>
	

	<?php

	}

	//echo $dept;
}

 ?>