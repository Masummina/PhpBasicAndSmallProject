<?php

	include'config.php';
	echo $forget_username =  $_SESSION['username'];
	if(isset($_POST['submit']))
	{
		$password = $_POST['password'];
		$conf_password = $_POST['conf_password'];
		$sql = "SELECT * FROM `auth` WHERE `username` = '$forget_username' LIMIT 0,1";
		$query_data = mysqli_query($dbconnect, $sql);
		$cunt_rows =  mysqli_num_rows($query_data);
		if($cunt_rows > 0)
		{
			if($password != $conf_password)
			{
				$error = "Invalid password please create new password";
			}else{
				$pass_update = "UPDATE `auth` SET `password` = '$password' WHERE `auth`.`username` = '$forget_username'";
				$query1_data = mysqli_query($dbconnect, $pass_update);
				$success = "Password updated";
				if(isset($query1_data)){
					header("location: index.php");
				}
			}
		}else {
			echo 'flase';
		}
	}


?>



<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<body>
<header>
  <div class="container bg-info p-5 ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="dashboard.php">Customer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          .
        </div>
      </div>
      <div class="navbar-nav">
        <div class="navbar-nav">
          <a class="btn btn-danger" href="index.php?logout=1">Logout</a>
        </div>
    </div>
    </nav>
  </div>
  <style type="text/css">
    body{
        background-image:url(https://static.pexels.com/photos/371633/pexels-photo-371633.jpeg);
        background-repeat:no-repeat;
        background-size: 100%;
    }

    footer{

      margin-top: 20px;
      padding-top: 20px;
    }
    .bg__card__navbar{
      background-color: #000000;
    }
    .bg__card__footer{
      background-color: #000000 !important;
    }
    #add__new__list{
        top: -38px;
        right: 0px;
    }
  </style>
</header>
<!---->
<main>
<div class="container">
  <div class="row d-flex justify-content-center text-center bg-ligh">
      <div class="card">
        <h2 class="bg-dark p-2 text-white">Create new Password</h2>
        <?php
        	if(isset($error)){
        		echo $error;
        	}
        		if(isset($success)){
        		echo $success;
        	};

        ?>
          <form action="" method="POST">
              <div class="row p-4 register-form">
                  <div class="col-md-6">
                      <div class="form-group">
                      	<label for="password">New Password:</label>
                          <input type="password" name="password" class="form-control" placeholder="password *" value="<?=@$_POST['password']; ?>"/>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                      	<label for="conf_password">Re-Enter New Password:</label>
                          <input type="password" name="conf_password" class="form-control" placeholder="password *" value="<?=@$_POST['password']; ?>"/>
                      </div>
	                    <div class="form-group text-right">
	                        <input type="submit" name="submit" class="btn btn-primary"value="submit" />
	                    </div>
                    </div>
              </div>
            </form>
      </div>
  </div>
</div>
</main>
<!---->

<!---->
<footer >
</footer>


<style type="text/css">
  
.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

form.navbar-form.navbar-right input {
    width: 200px;
}
.navbar-nav a.btn.btn-danger {
    height: 37px;
    margin-top: 6px;
}
</style>
</body>