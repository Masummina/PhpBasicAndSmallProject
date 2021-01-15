 <?php 

    if(isset($_POST['submit']))
    {
		    $name = $_POST['name'];
		    $std_class_name = $_POST['std_class_name'];
		    $roll = $_POST['roll'];
		    $fat_name = $_POST['fat_name'];
		    $mot_name = $_POST['mot_name'];
		    $ban = $_POST['bangla'];
		    $eng = $_POST['english'];
		    $math = $_POST['mathmetic'];

		    if(isset($_POST['dep01'])){
		    	$dep01 = $_POST['dep01'];
			    $dep02 = $_POST['dep02'];
			    $dep03 = $_POST['dep03'];
		    }
		    $religion = $_POST['religion'];
		    $science = $_POST['science'];



		    if(empty($name) OR $name == ""){
				$error = "Your user name is empty";
			}elseif(empty($roll) OR $roll == ""){
				$error = "Your roll is empty";
			}elseif(empty($fat_name) OR $fat_name == ""){
				$error = "Your father name is empty";
			}elseif(empty($mot_name) OR $mot_name == ""){
				$error = "Your mother name is empty";
			}elseif(empty($ban) OR $ban == ""){
				$error = "Your Bangla subject feild is empty";
			}elseif(empty($ban) OR $ban == ""){
				$error = "Your Bangla subject feild is empty";
			}elseif(empty($eng) OR $eng == ""){
				$error = "Your Eng subject feild is empty";
			}elseif(empty($math) OR $math == ""){
				$error = "Your Math subject feild is empty";
			}elseif(empty($religion) OR $religion == ""){
				$error = "Your Religion subject feild is empty";
			}elseif(empty($science) OR $science == ""){
				$error = "Your Science subject feild is empty";
			}else {

				if($className == 'nine' OR $className == 'ten'){
					$sql = "INSERT INTO `results` (`std_nam`, `classname`, `roll`, `fat_name`, `mot_name`, `ban`, `eng`, `math`, `dep01`, `dep02`, `dep03`, `religion`, `science`) VALUES ('$name', '$std_class_name', '$roll', '$fat_name', '$mot_name', '$ban', '$eng', '$math', '$dep01', '$dep02', '$dep03', '$religion', '$science')";
				}else{
					$sql = "INSERT INTO `results` (`std_nam`, `classname`, `roll`, `fat_name`, `mot_name`, `ban`, `eng`, `math`, `religion`, `science`) VALUES ('$name', '$std_class_name', '$roll', '$fat_name', '$mot_name', '$ban', '$eng', '$math', '$religion', '$science')";
				}

				

					$result = $conn->query($sql);
					if($result){
						echo "Data Inderted Successfully";
					}else {
						$unsuccess = "Data not Inserted";
					}


			}
	}



if (isset($error)) {
		echo $error;
	}






  ?>
  <form action="" method="post" enctype="multipart/form-data">

  		<div class="form-group">
      <label for="name">Student name:</label>
	      	  <select id="StudentName" name="class_name" >
					<option value="0">Select Student</option>
						<?php 
							if(isset($_GET['class']))
							{
								$className = $_GET['class'];
							
							// select class form schools (database)
								$sqlSchool = "SELECT * FROM `all_students` WHERE class_name = '$className'";
								$resultName = $conn->query($sqlSchool);
								if($resultName->num_rows > 0){
									while ($rowName = $resultName->fetch_assoc()) 
									{
										$Student =  $rowName['name'];
										$fat_name =  $rowName['fat_name'];
										?>
										<option value="<?php echo $Student; ?>"><?php echo $Student; ?></option>
										<?php
									}
								}
							}
						?>
				</select>
				<div id="studentmsg"></div>
	</div>


    <div class="form-group">
      <label for="name">Student Name:</label>
	      <input type="text" value="" class="form-control" id="stdname" placeholder="Enter name" name="name" >
	</div>
	<div class="form-group">
      <label for="name">Class:</label>
	      <input type="text" value="" class="form-control" id="std_class_name" placeholder="Enter class name" name="std_class_name" >
	</div>
	<div class="form-group">
      <label for="name">Roll:</label>
	      <input type="number" value="" class="form-control" id="std_roll" placeholder="Enter name" name="roll" >
	</div>

	<div class="form-group">
      <label for="name">Father Name:</label>
	      <input type="text" class="form-control" id="fat_name" placeholder="Father name" name="fat_name" >
	</div>


<!-- 	department	 -->


	


	<div class="form-group">
      <label for="name">Mother Name:</label>
	      <input type="text" value="" class="form-control" id="mot_name" placeholder="Mother name" name="mot_name" >
	</div>



	<div class="subject"> <h4>Subject Result</h4></div>
	<div class="form-group">
      <label for="bangla">Bangla</label>
	      <input type="number" value="" class="form-control" id="bangla" placeholder="Enter number" name="bangla" >
	</div>

	<div class="form-group">
      <label for="bangla">English</label>
	      <input type="number" value="" class="form-control" id="english" placeholder="Enter number" name="english" >
	</div>

	<div class="form-group">
      <label for="bangla">Mathmetic</label>
	      <input type="number" value="" class="form-control" id="math" placeholder="Enter number" name="mathmetic" >
	</div>



	<?php 
		if($className == 'nine' OR $className == 'ten'){
			?>
			<div class="form-group">
		      <label for="name">Department:</label>
		       <select id="department" name="department" name="department">
		       		<option value="0">Select Class</option>
		       		<option value="arch">Arch</option>
		       		<option value="commerce">Commerce</option>
		       		<option value="science">Science</option>
		       </select>
			</div>
			<?php
			echo "<div id='department_feild'>
		
				</div>";
		}

	 ?>

	

	<div class="form-group">
      <label for="bangla">Religion</label>
	      <input type="number" value="" class="form-control" id="religion" placeholder="Enter number" name="religion" >
	</div>
	<div class="form-group">
      <label for="bangla">Science</label>
	      <input type="number" value="" class="form-control" id="science" placeholder="Enter number" name="science" >
	</div>





    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    <?php

    													



	

    ?>







  </form>