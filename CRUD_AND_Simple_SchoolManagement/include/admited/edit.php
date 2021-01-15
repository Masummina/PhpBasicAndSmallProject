
<?php 
	admitStudent();

?>

	<div class="add-new-student row bg-secondary p-2">
		<a class="btn btn-primary " href="all_students.php">View All Student</a>
	</div>

<?php 
	if(isset($_GET['update']))
		{
			$update = $_GET['update'];
		}
		$sql = "SELECT * FROM all_students  WHERE `all_students`.`id` = $update";
	    		$result = $conn->query($sql);
    		// $row = 
    		if($result->num_rows > 0)
    		{
   				while ($row = $result->fetch_assoc()) 
   				{
   					$id = $row['id'];
   					$name = $row['name'];
   					$fat_name = $row['fat_name'];
   					$mot_name = $row['mot_name'];
   					$gender = $row['gender'];
   					$address = $row['address'];
   					$mobile = $row['mobile'];
   					$class_name = $row['class_name'];
   					$age = $row['age'];
   					$image = $row['image'];
   					$admit_date = $row['admit_date'];
   				}
    		}
 ?>


<?php 

if(isset($_POST['update'])){
	    $name = $_POST['name'];
	    $fat_name = $_POST['fat_name'];
	    $mot_name = $_POST['mot_name'];
	    $gender = $_POST['gender'];
	    $address = $_POST['address'];
	    $mobile = $_POST['mobile'];
	    $class_name = $_POST['class_name'];
	    $age = $_POST['age'];
	    $admit_date = $_POST['date'];
	    $image = $_FILES['image']['name'];
	    $imagesize = $_FILES['image']['size'];
	    $tmp = $_FILES['image']['tmp_name'];
	    $extension = pathinfo($image, PATHINFO_EXTENSION);
	    $file_name = rand(0, 999) . time() . '.' . $extension;
	    $target = 'image/'. $file_name;
	    move_uploaded_file($tmp, $target);
		if(empty($image) || $image ==""){
			$sqlimg = "SELECT * FROM all_students  WHERE `all_students`.`id` = $update";
			$result = $conn->query($sqlimg);
			while ($rowsimg = $result->fetch_assoc()) {
				$file_name = $rowsimg['image']; 
			}
		}

	    $sql = "UPDATE `all_students` SET `name` = '$name', `fat_name` = '$fat_name', `mot_name` = '$mot_name', `gender` = '$gender', `address` = '$address', `mobile` = '$mobile', `class_name` = '$class_name', `age` = '$age', `image` = '$file_name', `admit_date` = '$admit_date' WHERE `all_students`.`id` = $update";
	    $result = $conn->query($sql);
	    if($result){
	    	header('Location: all_students.php');
	    }
	}


 ?>




<div class="add_new_student">
	  <h2>Update Student Information</h2>

	  <?php 
		  if(isset($updated)){
		  	echo $updated;
		    	// header('Location: all_students.php');
		  }	
	   ?>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">Student Name:</label>
	      <input type="text" value="<?php  if(isset($name)){echo $name;}   ?>" class="form-control" id="name" placeholder="Enter name" name="name" >
	</div>

	<div class="form-group">
      <label for="name">Father Name:</label>
	      <input type="text" value="<?php  if(isset($fat_name)){echo $fat_name;}?>" class="form-control" id="fat_name" placeholder="Father name" name="fat_name" >
	</div>

	<div class="form-group">
      <label for="name">Mother Name:</label>
	      <input type="text" value="<?php  if(isset($mot_name)){echo $mot_name;}   ?>" class="form-control" id="mot_name" placeholder="Mother name" name="mot_name" >
	</div>

	<div class="form-group">
      <label for="name">Gender:</label>
	      <select id="gender" name="gender" >
			  <option>Select Gender</option>
			  <option value="girl" <?php if($gender=='girl'){echo 'selected="selected"';} ?>>Girl</option>
			  <option value="boy" <?php if($gender=='boy'){echo 'selected="selected"';} ?>>Boy</option>
		</select>
	</div>

	<div class="form-group">
      <label for="name">Address:</label>
      <textarea type="text" class="form-control" name="address" id="address" placeholder="address" rows="3" ><?php  if(isset($address)){echo $address;}   ?></textarea>
	</div>
	<div class="form-group">
      <label for="name">Mobile Number:</label>
	      <input type="number" value="<?php  if(isset($mobile)){echo $mobile;}   ?>" class="form-control" id="mobile" placeholder="Mobile" name="mobile" >
	</div>
	<div class="form-group">
      <label for="name">Class name:</label>
	      	  <select id="gender" name="class_name" >
					  	<?php 

							// select class form schools (database)
								$sqlSchool = "SELECT * FROM `schools`";
								$resultSchool = $conn->query($sqlSchool);
								if($resultSchool->num_rows > 0){
									while ($rowSchools = $resultSchool->fetch_assoc()) {
										$allschool =  $rowSchools['school_name'];
										?>
										<option value="<?php echo $allschool ?>"<?php if($class_name == $allschool){ echo 'selected="selected"';} ?>><?php echo $allschool ?></option>
										<?php
									}
								}
							?>

			   </select>
	</div>

	<div class="form-group">
      <label for="name">Roll:</label>
	      <input value="<?php  if(isset($age)){echo $age;}   ?>" type="number" class="form-control" id="age" placeholder="age" name="age" >
	</div>
	<div class="form-group">
      <label for="name">Admit Date:</label>
	      <input type="date" value="<?php  if(isset($admit_date)){echo $admit_date;}?>" class="form-control" id="date" name="date" >
	</div>
	<div class="form-group">
      <label for="name">Select Image:</label>
	      <input type="file" name="image" id="image">
	       <?php 
	      	echo "<img style='max-width:60px' src='image/{$image}'>";
	       ?>
	</div>

    <button type="submit" class="btn btn-primary" name="update">Submit</button>
  </form>
</div>





