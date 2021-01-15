<div class="all-student-top">
  <div class="row">
    <div class="col-9">
        <form action="" method="POST">
           <div class="input-group">
            <input type="text" name="searchkey" class="form-control" placeholder="Search this blog">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="submit" name="search">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
    </div>  
  </div>
</div>
<div class="studnts-list">
<div class="bg-dark p-2">
	<h5 class="text-white">All Student List</h5>
</div>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Id</th>
        <th>Roll</th>
        <th>Name</th>
        <th>Fat-Name</th>
        <th>Mot-Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Class</th>
        <th>Age</th>
        <th>Image</th>
        <th>Date</th>
        <th width="90px">Action</th>
      </tr>
    </thead>
    <tbody>

    	<?php
        // all data select function
       		
    		if(isset($_GET['class'])){
    			$className = $_GET['class'];
    		}

    		if(isset($_POST['search'])){
				$searchKey = $_POST['searchkey'];
				$sql = "SELECT * FROM `all_students` WHERE class_name = '$className' && `name` LIKE '%{$searchKey}%' || `fat_name` LIKE '%{$searchKey}%' || `mot_name` LIKE '%{$searchKey}%'";
				$viewAgain = "<a href='all_students.php'>View All</a>"; 
			}elseif(isset($className)) {
	    		$sql = "SELECT * FROM `all_students` WHERE class_name = '$className'";
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
   						echo "<td>01</td>";
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

// delete query start

        if(isset($_GET['delete'])){
          $delete = $_GET['delete'];
            $sql = "DELETE FROM `all_students` WHERE `all_students`.`id` = $delete";
            $result = $conn->query($sql);
            if($result){
              echo "Delete Data successfully";
              header('Location: class_info.php?source=studentlist&class=<?php echo $className ?>');
            }
        }

    	?>
    </tbody>
  </table>
</div>