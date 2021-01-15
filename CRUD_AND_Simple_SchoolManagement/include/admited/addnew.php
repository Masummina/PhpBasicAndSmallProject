
<?php 
	if(isset($_POST['submit']))
    {
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
		    if(move_uploaded_file($tmp, $target)){
		    	echo "File uploaded successfully";
		    }

		    if(empty($name) OR $name == ""){
				$error = "Your user name is empty";
			}else if (empty($fat_name) OR $fat_name == "") {
				$error = "Please enter your father name";
			}else if(empty($mot_name) || $mot_name ==""){
				$error = "Please enter your mother name";
			}else if(empty($gender) || $gender ==""){
				$error = "Please enter gender";
			}else if(empty($address) || $address ==""){
				$error = "Please enter address";
			}else if(empty($mobile) || $mobile ==""){
				$error = "Please enter mobile";
			}else if(empty($class_name) || $class_name ==""){
				$error = "Please enter class name";
			}else if(empty($age) || $age ==""){
				$error = "Please enter age";
			}else if(empty($admit_date) || $admit_date ==""){
				$error = "Please enter admin date";
			}else if(empty($image) || $image ==""){
				$error = "Please select image";
			}else if(empty($image) || $image ==""){
				$error = "Please select image";
			}else {
				$sql = "INSERT INTO `all_students` (`name`, `fat_name`, `mot_name`, `gender`, `address`, `mobile`, `class_name`, `age`, `image`, `admit_date`) VALUES ('$name', '$fat_name', '$mot_name', '$gender', '$address', '$mobile', '$class_name', '$age', '$file_name', '$admit_date')";

					$result = $conn->query($sql);
					if($result){
						 
              			$_SESSION['admit_success'] = "Yes Data added successfully";
						header('Location: all_students.php');
					}else {
						$unsuccess = "Data not Inserted";
					}
			}
	}
?>

	<div class="add-new-student row bg-secondary p-2">
		<a class="btn btn-primary " href="all_students.php">View All Student</a>
	</div>		


<div class="add_new_student">
	  <h2>Add New Student</h2>
	  <?php 
		if(isset($error)){
			echo "<p style='color: red'> . $error . '</p>'";
		}else if(isset($success)){
			echo "<p style='color: green'> .$success . '</p>'";
		}else if(isset($unsuccess)){
			echo "<p style='color: red'> . $unsuccess . '</p>'";
		}

	 ?>
  <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="name">Student Name:</label>
	      <input type="text" value="<?php  if(isset($name)){echo $name;}   ?>" class="form-control" id="name" placeholder="Enter name" name="name" >
	</div>

	<div class="form-group">
      <label for="name">Father Name:</label>
	      <input type="text" value="<?php  if(isset($fat_name)){echo $name;}   ?>" class="form-control" id="fat_name" placeholder="Father name" name="fat_name" >
	</div>

	<div class="form-group">
      <label for="name">Mother Name:</label>
	      <input type="text" value="<?php  if(isset($mot_name)){echo $name;}   ?>" class="form-control" id="mot_name" placeholder="Mother name" name="mot_name" >
	</div>

	<div class="form-group">
      <label for="name">Gender:</label>
	      <select value="<?php  if(isset($name)){echo $gender;}   ?>" id="gender" name="gender" >
			  <option>Select Gender</option>
			  <option value="girl">Girl</option>
			  <option value="boy">Boy</option>
		</select>
	</div>

	<div class="form-group">
      <label for="name">Address:</label>
      <textarea type="text"  class="form-control" name="address" id="address" placeholder="address" rows="3" ><?php  if(isset($name)){echo $address;}   ?></textarea>
	</div>
	<div class="form-group">
      <label for="name">Mobile Number:</label>
	      <input type="number" value="<?php  if(isset($mobile)){echo $name;}   ?>" class="form-control" id="mobile" placeholder="Mobile" name="mobile" >
	</div>
	<div class="form-group">
      <label for="name">Class name:</label>
	      	  <select id="classCheck" name="class_name" id="className">
			<option value="0">Select Class</option>

		<?php 

		// select class form schools (database)
			$sqlSchool = "SELECT * FROM `schools`";
			$resultSchool = $conn->query($sqlSchool);
			if($resultSchool->num_rows > 0){
				while ($rowSchools = $resultSchool->fetch_assoc()) {
					$allschool =  $rowSchools['school_name'];
					?>
					<option value="<?php echo $allschool ?>"><?php echo $allschool ?></option>
					<?php
				}
			}
		?>
	</select>
	<div id="classStudent"></div>
	</div>








	<div class="form-group">
      <label for="name">Roll:</label>
	      <input value="<?php  if(isset($name)){echo $age;}   ?>" type="number" class="form-control" id="age" placeholder="roll" name="age" >
	</div>
	<div class="form-group">
      <label for="name">Admit Date:</label>
	      <input type="date" value="<?php  if(isset($admit_date)){echo $name;}?>" class="form-control" id="date" name="date" >
	</div>
	<div class="form-group">
      <label for="name">Select Image:</label>
	      <input type="file" name="image" id="image">
	</div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>



