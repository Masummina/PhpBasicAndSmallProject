

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
    <div class="col-3">
      <a href="teachers.php?source=addnew" class="btn btn-primary float-right" style="clear: both;">Add New Teacher</a>
    </div> 
  </div>
</div>
<div class="studnts-list">
<div class="bg-dark p-2">
	<h5 class="text-white">All Teachers List</h5>
</div>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Fat-Name</th>
        <th>Mot-Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Class</th>
        <th>Image</th>
        <th width="90px">Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php
        // all data select function
      if(isset($_POST['search'])){
        $searchKey = $_POST['searchkey'];
        $sql = "SELECT * FROM `teachers` WHERE `name` LIKE '%{$searchKey}%' || `address` LIKE '%{$searchKey}%' || `subject` LIKE '%{$searchKey}%' || `email` LIKE '%{$searchKey}%'";
        $viewAgain = "<a href='all_students.php'>View All</a>"; 
      }else{
        $sql = "SELECT * FROM teachers";
      }
      
        $result = $conn->query($sql);
        // $row = 
        if($result->num_rows > 0){
          while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $gender = $row['gender'];
            $position = $row['position'];
            $address = $row['address'];
            $subject = $row['subject'];
            $image = $row['image'];
            echo "<tr>";
              echo "<td>{$id}</td>";
              echo "<td>{$name}</td>";
              echo "<td>{$email}</td>";
              echo "<td>{$mobile}</td>";
              echo "<td>{$gender}</td>";
              echo "<td>{$position}</td>";
              echo "<td>{$address}</td>";
              echo "<td>{$subject}</td>";
              echo "<td> <img style='max-width:60px' src='image/TchImage/{$image}'></td>";
              echo "<td>
              <a href='teachers.php?view=$id'><i class='fa fa-eye' aria-hidden='true'></i></a> | 
              <a href='teachers.php?source=edit&update=$id'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a> | 
              <a href='teachers.php?delete=$id'><i class='fa fa-trash' aria-hidden='true'></i></a> 

              </td>";
            echo "</tr>";
          }
        }  

        if(isset($_GET['delete'])){
          $delete = $_GET['delete'];
            $sql = "DELETE FROM `teachers` WHERE `teachers`.`id` = $delete";
            $result = $conn->query($sql);
            if($result){
              header('Location: teachers.php');
            }
        }

    	?>
    </tbody>
  </table>

</div>