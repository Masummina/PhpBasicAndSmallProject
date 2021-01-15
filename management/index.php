<?php
	
	include 'config.php';
	if(isset($_GET['logout']))
	{
		session_destroy();
		header("location: index.php");
	}

	if(isset($_POST['login']))
	{
		$login_id = $_POST['username'];
		$user_pass = $_POST['password'];

		$sql = "SELECT * FROM `auth` WHERE `login_id` = '$login_id' LIMIT 0,1";
		$query_data = mysqli_query($dbconnect, $sql);
		$row = mysqli_fetch_array($query_data);
		 
		if(isset($row['auth_password']) && $row['auth_password'] == $user_pass )
		{
			
			$_SESSION["id"] = $row['id'];
			$_SESSION["auth_name"] = $row['auth_name'];
			$_SESSION["login_id"] = $row['login_id'];
			$_SESSION["auth_password"] = $row['auth_password'];
			$_SESSION["auth_type"] = $row['auth_type'];

			header("location: userdashbord.php");

		} else {
			$message =  "Your username and password is wrong";
		}
	}



?>



<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	  <link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="image/usericon.png" class="brand_logo" alt="Logo">
					</div>
				</div>

				<div class="d-flex justify-content-center form_container">
					<form action="" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
					 		<button type="submit" name="login" class="btn login_btn">Login</button>
					   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="newuser.php" class="ml-2">Sign Up</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
