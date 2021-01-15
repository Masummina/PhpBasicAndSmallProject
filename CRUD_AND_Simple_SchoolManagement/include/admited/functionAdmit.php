<?php 
// student admit insert query 



function admitStudent(){
    global $conn;
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
}



// Select All student query

function selectAllStudent(){
	global $conn;
			if(isset($_POST['search'])){
				$searchKey = $_POST['searchkey'];
				$sql = "SELECT * FROM `all_students` WHERE `name` LIKE '%{$searchKey}%' || `fat_name` LIKE '%{$searchKey}%' || `mot_name` LIKE '%{$searchKey}%'";
				// $fffff = $conn->query($sql);
				
				// while ($gggg = $fffff->fetch_assoc()) {
				// 	print_r($gggg);
				// }
				$viewAgain = "<a href='all_students.php'>View All</a>"; 
			}else {
	    		$sql = "SELECT * FROM all_students";
			}
			
    		$result = $conn->query($sql);
    		// $row = 
    		if($result->num_rows > 0){
   				while ($row = $result->fetch_assoc()) {
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
   					echo "<tr>";
   						echo "<td>{$id}</td>";
   						echo "<td>{$name}</td>";
   						echo "<td>{$fat_name}</td>";
   						echo "<td>{$mot_name}</td>";
   						echo "<td>{$gender}</td>";
   						echo "<td>{$address}</td>";
   						echo "<td>{$mobile}</td>";
   						echo "<td>{$class_name}</td>";
   						echo "<td>{$age}</td>";
   						
   						echo "<td> <img style='max-width:60px' src='image/{$image}'></td>";
   						echo "<td>{$admit_date}</td>";
   						echo "<td>
   						<a href='all_students.php?view=$id'><i class='fa fa-eye' aria-hidden='true'></i></a> | 
   						<a href='all_students.php?source=edit&update=$id'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> | 
   						<a href='all_students.php?delete=$id'><i class='fa fa-trash' aria-hidden='true'></i></a> 

   						</td>";
   					echo "</tr>";
   				}
    		}
}



// UPDATE student  query One


// function updateStudentOne(){
// 	global $conn;
// 		if(isset($_GET['update']))
// 		{
// 			$update = $_GET['update'];
// 		}

// 	$sql = "SELECT * FROM all_students  WHERE `all_students`.`id` = $update";
// 	    		$result = $conn->query($sql);
//     		// $row = 
//     		if($result->num_rows > 0)
//     		{
//    				while ($row = $result->fetch_assoc()) 
//    				{
//    					$id = $row['id'];
//    					$name = $row['name'];
//    					$fat_name = $row['fat_name'];
//    					$mot_name = $row['mot_name'];
//    					$gender = $row['gender'];
//    					$address = $row['address'];
//    					$mobile = $row['mobile'];
//    					$class_name = $row['class_name'];
//    					$age = $row['age'];
//    					$image = $row['image'];
//    					$admit_date = $row['admit_date'];
//    				}
//     		}

//    }

// UPDATE student  query Two
  //  function updateStudentTwo()
  //  {
  //  		if(isset($_POST['update']))
  //  		{
		//     $name = $_POST['name'];
		//     $fat_name = $_POST['fat_name'];
		//     $mot_name = $_POST['mot_name'];
		//     $gender = $_POST['gender'];
		//     $address = $_POST['address'];
		//     $mobile = $_POST['mobile'];
		//     $class_name = $_POST['class_name'];
		//     $age = $_POST['age'];
		//     $admit_date = $_POST['date'];
		//     $image = $_FILES['image']['name'];
		//     $imagesize = $_FILES['image']['size'];
		//     $tmp = $_FILES['image']['tmp_name'];
		//     $extension = pathinfo($image, PATHINFO_EXTENSION);
		//     $file_name = rand(0, 999) . $name . time() . '.' . $extension;
		//     $target = 'image/'. rand(0, 999) . $name . time() . '.' . $extension;
		//     move_uploaded_file($tmp, $target);

		//     $sql = "UPDATE `all_students` SET `name` = '$name', `fat_name` = '$fat_name', `mot_name` = '$mot_name', `gender` = '$gender', `address` = '$address', `mobile` = '$mobile', `class_name` = '$class_name', `age` = '$age', `image` = '$file_name', `admit_date` = '$admit_date' WHERE `all_students`.`id` = $update";
		//     $result = $conn->query($sql);
		//     if($result){
		//     	$updated =  "Data updated successfully";
		//     }
		// }

  //  }




 ?>