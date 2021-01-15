<?php
include 'config.php';
if(isset($_GET['logout'])){
	session_destroy();
	header("location: index.php");
	echo $_SESSION['name'];
}
if(isset($_POST['login']))
{	
	$forget_session = $_SESSION['username'] = $_POST['username'];
	echo $forget_session;
	if(!isset($_POST['username'])){
		$error = '<p style="color:red;">Your username is invalid</p>';
	}else if(!isset($_POST['username'])){
		$error = '<p style="color:red;">Your Password is invalid</p>';
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM `auth` WHERE `username` = '$username' LIMIT 0,1";
	$query_data = mysqli_query($dbconnect, $sql);
	$row = mysqli_fetch_array($query_data);
	if (isset($row['username']) && $row['password'] == $password) 
	{
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['auth_id'] = $row['auth_id'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['auth_type'] = $row['auth_type'];
		$success = "Login successfully.....";
		header("location: dashboard.php");
	}else{
		$message =  "Your username or password is invalid";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Sign In

					</span>
					<p style="color: red">
						<?php
							if(isset($message)){
								echo $message;
							}
							if(isset($error)){
								echo $error;
							}

						?>
					</p>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<span style="color: red">*
							<?php 
							if(isset($error_name))
							{
								echo $error_name;
								}  
							?>
						</span>
						<input class="input100" type="text" name="username" placeholder="Username">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="forget.php" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="login">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="css/js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="css/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>