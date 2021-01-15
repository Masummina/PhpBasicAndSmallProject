
<?php  if(isset($admit_date)){echo $name;}   ?>
<?php 

include 'system/dbconnection.php';
session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
</head>
<body>

<div class="jumbotron text-center p-3 bg-dark text-white">
  <h1>School Management System</h1>
  <p>We believe in allah</p> 
  <div class="menu"></div>
  <a class="btn btn-primary" href="index.php">Home</a>
  <a class="btn btn-primary" href="all_students.php">All Students</a>
  <a class="btn btn-primary" href="teachers.php">Teachers</a>
  <a class="btn btn-primary" href="class_info.php">Class Info</a>
</div>
<div class="main-content" style="max-width: 1000px; margin: 0 auto">
  