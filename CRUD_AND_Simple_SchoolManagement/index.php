<?php
include 'include/header.php';

?>
<div class="container">
  <?php 
  if (isset($_SESSION["name"])) {
    echo $_SESSION["name"];
  }
   ?>
  <div class="row p-3">
    <div class="col-sm-3">
      <div class="dash student-info">
        <a href="all_students.php" class="btn btn-outline-primary"><b>All Student</b><br>Information</a>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="dash Teachers-info">
        <a href="teachers.php" class="btn btn-outline-primary"><b>All Teachers</b><br>Information</a>
      </div>
    </div>
     <div class="col-sm-3">
      <div class="dash class-info">
        <a href="class_info.php" class="btn btn-outline-primary"><b>All Class</b><br>Information</a>
      </div>
    </div>
      <div class="col-sm-3">
        <div class="dash class-dashboard">
          <a href="notice.php" class="btn btn-outline-primary"><b>School</b><br>Notice</a>
        </div>
      </div>
  </div>
  <div class="row p-3">
      <div class="col-sm-3">
        <div class="dash class-notice">
          <a href="committee.php" class="btn btn-outline-primary"><b>School</b><br>Committee</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="dash class-laibrary">
          <a href="laibrary.php" class="btn btn-outline-primary"><b>School</b><br>Laibrary</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="dash class-award">
          <a href="award.php" class="btn btn-outline-primary"><b>achieve</b><br>Award</a>
        </div>
      </div>
  </div>
</div>



