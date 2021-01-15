<?php
session_start();
include 'config.php';
if(isset($_POST['user_submit']))
{
	$auth_id = $_SESSION["id"];
	$user_name = $_POST['user_name'];
	$user_mobile = $_POST['user_mobile'];
	$insert_query = "INSERT INTO `myuser` (`auth_id`,`user_name`, `user_mobile`, `user_add`) VALUES ($auth_id,'$user_name', '$user_mobile', '')";
	$insert_conn = mysqli_query($dbconnect, $insert_query);
	if($insert_conn == true){
		header("Location: myuser.php");
	}
}



?>


<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<style type="text/css">
		.logout.center-block.m-4 {
    width: 200px;
    margin: 0 auto !important;
    text-align: center;
    margin-top: 20px !important;
}
	</style>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="fff"">
			<div class=" bg-dark  p-2 text-white">
			<div class="container">
				<h3 style="display: inline-block;"><a href="userdashbord.php">Home</a> </h3>
				<p class="text-center">Create new User </p>
			</div> 
			</div>
			<div class="container">
				<div class="col-md-4">
					<form action="" method="POST">
					  <div class="form-group">
					    <label for="name">User name</label>
					    <input type="text" class="form-control" placeholder="Enter name" id="name" name="user_name">
					  </div>
					  <div class="form-group">
					    <label for="mobile">Mobile:</label>
					    <input type="text" class="form-control" name="user_mobile" placeholder="Enter mobile" id="mobile">
					  </div>
					  <button type="submit" name="user_submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>

		

	</div>
</body>
</html>
