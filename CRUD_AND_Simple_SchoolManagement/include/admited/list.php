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
      <a href="all_students.php?source=addnew" class="btn btn-primary float-right" style="clear: both;">Add New Student</a>
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
        selectAllStudent();

        if(isset($_GET['delete'])){
          $delete = $_GET['delete'];
            $sql = "DELETE FROM `all_students` WHERE `all_students`.`id` = $delete";
            $result = $conn->query($sql);
            if($result){
              echo "Delete Data successfully";
              header('Location: all_students.php');
            }
        }

    	?>
    </tbody>
  </table>
</div>