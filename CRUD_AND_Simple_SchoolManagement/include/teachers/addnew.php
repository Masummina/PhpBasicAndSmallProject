
<?php 
session_start();
	

	    if(isset($_POST['submit']))
    {
		    $name = $_POST['name'];
		    $email = $_POST['email'];
		    $mobile = $_POST['mobile'];
		    $gender = $_POST['gender'];
		    $position = $_POST['position'];
		    $address = $_POST['address'];
		    $subject = $_POST['subject'];
		    $image = $_FILES['image']['name'];
		    $imagesize = $_FILES['image']['size'];
		    $tmp = $_FILES['image']['tmp_name'];
		    $extension = pathinfo($image, PATHINFO_EXTENSION);
		    $file_name = rand(0, 999) . time() . '.' . $extension;
		    $target = 'image/TchImage/'. $file_name;
		    move_uploaded_file($tmp, $target);

		    if(empty($name) OR $name == ""){
				$error = "Your user name is empty";
			}else if (empty($email) OR $email == "") {
				$error = "Please enter your father name";
			}else if(empty($gender) || $gender ==""){
				$error = "Please enter gender";
			}else if(empty($mobile) || $mobile ==""){
				$error = "Please enter mobile";
			}else if(empty($position) || $position ==""){
				$error = "Please enter mobile";
			}else if(empty($address) || $address ==""){
				$error = "Please enter address";
			}else if(empty($subject) || $subject ==""){
				$error = "Please enter subject name";
			}else if(empty($image) || $image ==""){
				$error = "Please select image";
			}else {
				$sql = "INSERT INTO `teachers` (`name`, `email`, `mobile`, `gender`, `position`, `address`, `subject`, `image`) VALUES ('$name', '$email', '$mobile', '$gender', '$position', '$address', '$subject', '$file_name')";

					$result = $conn->query($sql);
					if($result){
						header('Location: teachers.php');
					}else {
						echo "Data not Inserted";
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
      <label for="name">Teacher Name:</label>
	      <input type="text" value="<?php  if(isset($name)){echo $name;}   ?>" class="form-control" id="name" placeholder="Enter name" name="name" >
	</div>

	<div class="form-group">
      <label for="name">Email:</label>
	      <input type="email" value="<?php  if(isset($email)){echo $email;}   ?>" class="form-control" id="fat_name" placeholder="Email" name="email" >
	</div>

	<div class="form-group">
      <label for="mobile">Mobile:</label>
	      <input type="number" value="<?php  if(isset($mobile)){echo $mobile;}   ?>" class="form-control" id="mobile" placeholder="Mobile" name="mobile" >
	</div>

	<div class="form-group">
      <label for="name">Gender:</label>
	      <select id="gender" name="gender" >
			  <option>Select Gender</option>
			  <option value="male">Male</option>
			  <option value="femele">Femele</option>
		</select>
	</div>
	<div class="form-group">
      <label for="position">Designation:</label>
			<select id="position" name="position" >
			  <option>Select designation</option>
			  <?php 
				  	$subSql = "SELECT * FROM `designations`";
				  	$degResult = $conn->query($subSql);
				  	if($degResult->num_rows > 0){
				  		while($degRow = $degResult->fetch_assoc()){
				  			$degValue = $degRow['desi_name'];
				  			?>
				  			 <option value="<?php echo $degValue; ?>" ><?php echo $degValue; ?></option>
				  			 <?php
				  		}
				  	}
			  ?>
			  


		</select>

	</div>
	<div class="form-group">
      <label for="name">Address:</label>
      <textarea type="text" class="form-control" name="address" id="address" placeholder="address" rows="3" >
      	<?php  if(isset($address)){echo $address;}   ?>
      </textarea>
	</div>
	<div class="form-group">
      <label for="position">Subject:</label>
	      <select id="position" name="subject" >
			  <option value="0">Select Subject</option>
			   <?php 
				  	$subSql = "SELECT * FROM `subjects`";
				  	$subResult = $conn->query($subSql);
				  	if($subResult->num_rows > 0){
				  		while($subRow = $subResult->fetch_assoc()){
				  			$subValue = $subRow['sub_name'];
				  			?>
				  			 <option value="<?php echo $subValue ?>"><?php echo $subValue ?></option>
				  			 <?php
				  		}
				  	}
			  ?>
		
		</select>
	</div>
	<div class="form-group">
      <label for="name">Select Image:</label>
	      <input type="file" name="image" id="image">
	</div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>



