
<?php
  
  include "config.php";
  if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    header("location: index.php");
  }

  if(isset($_POST['submit']))
  {
    if(!isset($_POST['$order_name']) || strlen($_POST['order_name']) <= 3)
    {
      $error ="Your order name is invalid";
    }else if(!isset($_POST['$email']) || strlen($_POST['email']) <= 3)
    {
      $error ="Your email is invalid";
    }else if(!isset($_POST['$address']) || strlen($_POST['address']) <= 3)
    {
      $error ="Your address is invalid";
    }else if(!isset($_POST['$district']) || strlen($_POST['district']) <= 3)
    {
      $error ="Your district is invalid";
    }else if(!isset($_POST['$detailsdetails']) || strlen($_POST['details']) <= 3)
    {
      $error ="Your details is invalid";
    }else{
       $order_name = $_POST['order_name'];
        $email = $_POST['email'];
        $mobile = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['district'];
        $details = $_POST['details'];

    $sql = "INSERT INTO `order_table` (`order_name`, `email`, `mobile`, `address`, `city`, `details`) VALUES ('$order_name', '$email', '$mobile', '$address', '$city', '$details')";
    $query_data = mysqli_query($dbconnect, $sql);

    if(($query_data) == true){
      header("location: order.php");
    }else{
       die("Error: The file does not exist.");
    }
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
        </div>
      </div>
      <div class="navbar-nav navbar-right">
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
       <div class="card-body text-center">
        </div>
    <div class="card">
                    <div class="row d-flex justify-content-center text-center bg-light">

                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create a Order</h3>
                                <?php
                                  if(isset($error)){
                                    echo "<p style='color:red'>".$error ."</p>";
                                  }
                                ?>
                                <form action="" method="POST">
                                <div class="row p-4 register-form">
                                    <div class="col-md-6">
                                      <div class="form-group">

                                            <select class="form-control" name="order_name">
                                                <option class="hidden"  selected disabled>Select User Name</option>
                                                <?php
                                                    $sqlsel = "SELECT * FROM `user_table`";
                                                    $select_user = mysqli_query($dbconnect, $sqlsel);
                                                    while($selectfetch = mysqli_fetch_array($select_user)){
                                                   ?>
                                                   <option><?php echo $selectfetch['user_name']?></option>
                                                <?php
                                                    
                                                    }

                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" placeholder="Mobile number*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" placeholder="Billing Address *" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                          <div class="form-group">
                                            <select class="form-control" name="district">
                                                <option value="Rajsahi" class="hidden"  selected disabled>Select District</option>
                                                <option value="Dhka">Dhka</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Rajsahi">Rajsahi</option>
                                                <option value="Jessore" >Jessore</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Satkhira">Satkhira</option>
                                                <option value="Sylhet">Sylhet</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                           <textarea name="details" class="form-control form-textarea" placeholder="Add product details"></textarea>
                                        </div>
                                        <input type="submit" name="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    </div>

                </div>

            </div>
    </div>
</div>
</main>
<!---->

<!---->
<footer >
</footer>
<style type="text/css">
  select.form-control:not([size]):not([multiple]) {
    height: calc(2.25rem + 9px);
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