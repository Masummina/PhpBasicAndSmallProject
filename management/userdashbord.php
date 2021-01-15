
<?php
session_start();

if(!isset($_SESSION["id"]) ||  $_SESSION["id"] == '' )
{					
	header("location: index.php");
}


?>
<!DOCTYPE html>
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
	<div class="fff" style="width: 800px; margin: 0 auto">
		<div class=" bg-dark text-center p-2 text-white">
			User dashboard
		</div>
		<div class="row m-2">
			<div class="col-4">
				<div class="user bg-secondary">
					<a href="#">
						  <div class="card" style="text-align: center;">
						    <img style="width: 80px; height: 110px; padding-top: 20px;" class="card-img-top" src="image/userimg.png" alt="Card image">
						    <div class="card-body">
						      <a href="myuser.php" class="btn btn-primary btn-block">My User</a>
						    </div>
						  </div>
					</a>
				</div>
			</div>	
			<div class="col-4">
				<div class="user bg-secondary">
					<a href="#">
						  <div class="card" style="text-align: center;">
						    <img style="width: 80px; height: 110px;  padding-top: 20px;" class="card-img-top" src="image/profile.png" alt="Card image">
						    <div class="card-body">
						      <a href="profile.php" class="btn btn-primary btn-block">User Profile</a>
						    </div>
						  </div>
					</a>
				</div>
			</div>	
			<div class="col-4">
				<div class="user bg-secondary">
					<a href="#">
						  <div class="card" style="text-align: center;">
						    <img style="width: 80px; height: 110px;  padding-top: 20px;" class="card-img-top" src="image/order.png" alt="Card image">
						    <div class="card-body">
						      <a href="myorder.php" class="btn btn-primary btn-block">My Orders</a>
						    </div>
						  </div>
					</a>
				</div>
			</div>

			<?php

				if($_SESSION["auth_type"]=='admin')
				{
					?>	
					<div class="col-4">
						<div class="user bg-secondary">
							<a href="#">
								  <div class="card" style="text-align: center;">
								    <img style="width: 80px; height: 110px;  padding-top: 20px;" class="card-img-top" src="image/order.png" alt="Card image">
								    <div class="card-body">
								      <a href="myorder.php" class="btn btn-primary btn-block"> Manage Operator </a>
								    </div>
								  </div>
							</a>
						</div>
					</div>
					<?php
				}

			?>


			<hr>
			<div class="logout center-block m-4">
				<a href="index.php?logout=1" class="btn btn-primary text-center">Logout</a>
			</div>
		</div>

			<div class="card">
					<form action="" method="POST">
                                <div class="row p-4 register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="auth_name" class="form-control" placeholder="Enter auth name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="password *" value="" />
                                        </div>
                                   		</div>
                                        <div class="col-md-6">
	                                        <div class="form-group">
	                                            <input type="text" name="auth_id" class="form-control" placeholder="Enter auth id *" value="" />
	                                        </div>
	                                        <div class="form-group">
	                                            <input type="submit" name="submit" class="btn btn-primary"value="submit" />
	                                        </div>
	                                    </div>
                                </div>
                              </form>


			</div>


	</div>
</body>
</php>
