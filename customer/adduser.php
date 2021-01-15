<?php
 include 'config.php';
 // redirect login if user didn't login.

 if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    header("location: index.php");
  }

// empty check variable declear
$user_name  = $district = $password =$conf_password = $email = $phone = $phototmp = $user_photo = $phototmp = $address ='';
if(isset($_POST['submit']))
{

      if(!isset($_POST['user_name']) || strlen($_POST['user_name'])<3){
        $error = "Invalid Your user_name Feild";
      } else if(!isset($_POST['password']) || strlen($_POST['password'])<3){
        $error = "Invalid Your password Feild";
      }else if(!isset($_POST['conf_password']) || strlen($_POST['conf_password'])<3){
        $error = "Invalid Your conf_password Feild";
      }else if($_POST['password'] != $_POST['conf_password']){
        $error = "Your password and conform Password is not Same";
      }else if(!isset($_POST['email']) || strlen($_POST['email'])<3){
        $error = "Invalid Your email Feild";
      }else if(!isset($_POST['phone']) || strlen($_POST['phone'])<3){
        $error = "Invalid Your phone Feild";
      }else if(!isset($_POST['district']) || strlen($_POST['district'])<3){
        $error = "Invalid Your district Feild";
      }else if(!isset($_FILES['user_photo'])){
        $error = "Invalid Your user_photo Feild";
      }else if(!isset($_POST['address']) || strlen($_POST['address'])<3){
        $error = "Invalid Your address Feild";
      }else {

              $user_name = $_POST['user_name'];
              $password = $_POST['password'];
              $conf_password = $_POST['conf_password'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $district = $_POST['district'];
              $user_photo = $_FILES['user_photo']['name'];
              $phototmp = $_FILES['user_photo']['tmp_name'];
              move_uploaded_file($phototmp, "images/$user_photo");
              $address = $_POST['address'];
              $auth_id = $_SESSION['auth_id'];

          $sql = "INSERT INTO `user_table` (`auth_id`, `user_name`, `password`, `email`, `phone`, `district`, `photo`, `address`) VALUES ('$auth_id','$user_name', '$password', '$email', '$phone', '$district', '$user_photo', '$address')";
          $query_data = mysqli_query($dbconnect, $sql);
          if(isset($query_data)){
            $success = "Data inserted succrssfully";
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
      </div>
      <div class="navbar-nav">
        <form class="navbar-form navbar-right" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
              <button class="btn btn-default" value="Search" type="submit">
                <i class="glyphicon glyphicon-search"></i>Search
              </button>
            </div>
          </div>
        </form>
        <div class="navbar-nav">
          <a class="btn btn-danger" href="index.php">Logout</a>
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
                                <h3 class="register-heading">Apply as a Employee</h3>
                                <p>
                                 <?php if(isset($error)){
                                  echo $error;
                                 }
                                 if(isset($success)){
                                   echo $success;
                                 }
                                ?>
                                  
                                </p>

                                <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row register-form p-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="user_name" class="form-control" placeholder="User Name *" value="<?=@$_POST['user_name']; ?>" />
                                        </div>
                                      <!--   <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div> -->
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Password *" value="<?=@$_POST['password']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="conf_password" class="form-control"  placeholder="Confirm Password *" value="<?=@$_POST['conf_password']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="<?=@$_POST['email']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Your Phone *" value="<?=@$_POST['phone']; ?>" />
                                        </div>
                                         <div class="form-group">
                                            <select class="form-control" name="district" value="<?=@$_POST['district']; ?>">
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
                                              <input type="file" class="" name="user_photo" id="customFile" value="<?=@$_POST['user_photo']; ?>">
                                        </div>
                                        <div class="form-group">
                                           <textarea name="address" value="<?=@$_POST['address']; ?>" placeholder="Enter your Address" class="form-control form-textarea">
                                           </textarea>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary"  value="Submit"/>
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
    height: calc(2.25rem + 10px);
}
</style>
<style>
form.navbar-form.navbar-right input {
    width: 200px;
}
.navbar-nav a.btn.btn-danger {
    height: 37px;
    margin-top: 6px;
}

</style>
</body>