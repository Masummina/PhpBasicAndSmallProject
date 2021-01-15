<?php
include 'config.php';
if(isset($_POST['submit'])){
	$order_name = $_POST['ordername'];
	$order_comm = $_POST['order_comm'];
	echo $order_name;
	echo $order_comm ;
	$insert_query = "INSERT INTO `myorder` (`order_name`, `order_details`) VALUES ('$order_name', '$order_comm')";
	$insert_conn = mysqli_query($dbconnect, $insert_query);
	if($insert_conn == true){
		header("Location: myorder.php");
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
				<p class="text-center">Order information</p>
			</div> 
			</div>
			<div class="container">
				<div class="row">
					<div class="col-4">
						<form action="" method="POST">
						<div class="form-group">
						  <label for="sel1">Select User:</label>
						  <select class="form-control" id="sel1" name="ordername">
						  	<?php
						  		$select_query = "SELECT * FROM myuser";
								$select_conn = mysqli_query($dbconnect, $select_query);
								$rowcount=mysqli_num_rows($select_conn);
									if($rowcount > 0){
										while ($array_fac = mysqli_fetch_array($select_conn)){

								?>
						    <option><?php echo $array_fac['user_name']; ?></option>
						    <?php
						    		}
									}
						  	?>
						    <option>Aktar</option>
						    <option>Raquibul</option>
						    <option>Nayeem</option>
						    <option>Foysl</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="comment">Product Discription:</label>
						  <textarea class="form-control" rows="5" id="comment" name="order_comm"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
						</form>
					</div>
				</div>
			</div>

		

	</div>
</body>
</html>
