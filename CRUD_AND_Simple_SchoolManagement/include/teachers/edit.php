
<?php 
session_start();
	?>

<?php 
	if(isset($_GET['update']))
		{
			$update = $_GET['update'];
		}
		$sql = "SELECT * FROM teachers  WHERE `teachers`.`id` = $update";
	    		$result = $conn->query($sql);
    		// $row = 
    		if($result->num_rows > 0)
    		{
   				while ($row = $result->fetch_assoc()) 
   				{
   					$id = $row['id'];
   					$name = $row['name'];
   					$email = $row['email'];
   					$mobile = $row['mobile'];
   					$gender = $row['gender'];
   					$position = $row['position'];
   					$address = $row['address'];
   					$subject = $row['subject'];
   					$image = $row['image'];
   				}
    		}
 		?>   

<?php
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
		    echo $extension;
		    $file_name = rand(0, 999) . time() . '.' . $extension;
		    
		    $target = 'image/TchImage/'. $file_name;
		     move_uploaded_file($tmp,  $target);
				if(empty($image) || $image ==""){
					$sql = "SELECT * FROM teachers  WHERE `teachers`.`id` = $update";
					$result = $conn->query($sql);
					while ($rowimg = $result->fetch_assoc()){
						$file_name = $rowimg['image'];
					} 
				}
				$sql = "UPDATE `teachers` SET `name` = '$name', `email` = '$email', `mobile` = '$mobile', `gender` = 'male', `address` = '$address', `subject` = '$subject', `image` = '$file_name' WHERE `teachers`.`id` = $update";

					$result = $conn->query($sql);
					if($result){
						 
              			echo  "Yes Data added successfully";
						header('Location: teachers.php');
					}else {
						echo "Data not Inserted";
					}
	}


?>

	<div class="add-new-student row bg-secondary p-2">
		<a class="btn btn-primary " href="all_students.php">View All Student</a>
	</div>		


<div class="add_new_student">
	  <h2>Add New Student</h2>
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
			  <option value="male" <?php if($gender=='male'){echo "selected='selected'";}?> >Male</option>
			  <option value="femele" <?php if($gender=='femele'){echo "selected='selected'";}?>>Femele</option>
		</select>
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
				  			 <option value="<?php echo $subValue ?>" <?php if($subValue == $subject) {echo "selected='selected'";} ?> ><?php echo $subValue ?></option>
				  			 <?php
				  		}
				  	}
			  ?>
			 
			  <option value="assteacher">Asst Teacher</option>
		</select>
	</div>
	<div class="form-group">
      <label for="name">Address:</label>
      <textarea type="text" class="form-control" name="address" id="address"><?php  if(isset($address)){echo $address;}?>
      </textarea>
	</div>
	<div class="form-group">
      <label for="name">Designations:</label>
	      <select id="position" name="position" >
			  <option>Select designation</option>
			  <?php 
				  	$subSql = "SELECT * FROM `designations`";
				  	$degResult = $conn->query($subSql);
				  	if($degResult->num_rows > 0){
				  		while($degRow = $degResult->fetch_assoc()){
				  			$degValue = $degRow['desi_name'];
				  			?>
				  			 <option value="<?php echo $degValue; ?>" <?php if($position == $degValue) {echo "selected='selected'";} ?> ><?php echo $degValue; ?></option>
				  			 <?php
				  		}
				  	}
			  ?>
			  


		</select>
			
	</div>
	<div class="form-group">
      <label for="name">Select Image:</label>
	      <input type="file" name="image" id="image">
	      <?php 
	      	echo "<img style='max-width:60px' src='image/TchImage/{$image}'>";
	       ?>
	</div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
</div>



