
	<?php
		session_start();
	include 'config.php';
	if(isset($_POST['submit'])){
	if(isset($_POST['auth_name']) AND isset($_POST['auth_login_id']) AND isset($_POST['auth_pass']) AND isset($_POST['auth_conf_pass']) AND isset($_POST['auth_type']) AND isset($_POST['auth_status'])){
		if(($_POST['auth_pass'] == $_POST['auth_conf_pass'])==true){
		$_SESSION['auth_name'] = $_POST['auth_name'];
		$_SESSION["auth_login_id"] = $_POST['auth_login_id'];
		$_SESSION["auth_pass"] = $_POST['auth_pass'];
		$_SESSION["auth_conf_pass"] = $_POST['auth_conf_pass'];
		$_SESSION["auth_type"] = $_POST['auth_type'];
		$_SESSION["auth_status"] = $_POST['auth_status'];
		if(($_SESSION["auth_name"] AND $_SESSION["auth_login_id"] AND $_SESSION["auth_pass"] AND $_SESSION["auth_conf_pass"] AND $_SESSION["auth_type"] AND $_SESSION["auth_status"]) == true){

			header("location: index.php");
		}
		}else {
			echo "<p>Your password is not same</p>";
		}
	}else {
		echo "<p>Please fill up all field</p>";
	}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Auth</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>


<style type="text/css">
	.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
</style>

<div class="container">
<br>  <p class="text-center">User Admin</a></p>
<hr>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
<form action="" method="POST">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="auth_name" class="form-control" placeholder="Enter name" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="auth_login_id" class="form-control" placeholder="Login id" type="text">
    </div> <!-- form-group// -->
       
 <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="auth_pass" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
     <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="auth_conf_pass" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->  
       <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="auth_type">
			<option selected=""> Select user type</option>
			<option>Admin</option>
			<option>Customer</option>
			<option>Super Admin</option>
		</select>
	</div> 
	 <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-type"></i> </span>
		</div>
        <input class="form-control" placeholder="Status" type="password" name="auth_status">
    </div> <!-- form-group// -->
                                    
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
</body>
</html>