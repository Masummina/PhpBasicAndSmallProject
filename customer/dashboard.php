<?php
  include 'config.php';
  if(!isset($_SESSION['id']) || $_SESSION['id']==''){
      header("location: index.php");
    }

    if(isset($_POST['submit']))
    {
        if(!isset($_POST['auth_name']) || isset($_POST['auth_name']) < 3){
          $error = "your username is invalid please use currect username";
        }else if(!isset($_POST['auth_id']) || isset($_POST['auth_id']) < 3){
             $error = "your auth_id is invalid please use currect auth_id";
        }else if(!isset($_POST['username']) || isset($_POST['username']) < 3){
             $error = "your username is invalid please use currect username";
        }else if(!isset($_POST['password']) || isset($_POST['password']) < 3){
             $error = "your password is invalid please use currect password";
        }else if(!isset($_POST['auth_type']) || isset($_POST['auth_type']) > 3){
          $error = "your auth_type is invalid please use currect auth_type";
        }else {
        $auth_name = $_POST['auth_name'];
        $auth_id = $_POST['auth_id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $auth_type = $_POST['auth_type'];
        $sql = "INSERT INTO `auth` (`name`, `auth_id`, `username`, `password`, `auth_type`) VALUES ('$auth_name', '$auth_id', '$username', '$password', '$auth_type')";
        $mysqli_query = mysqli_query($dbconnect, $sql);
        if(isset($mysqli_query)){
          $auth_created = "<p style='color: green;'>Auth added successfully</p>";
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
          <a class="nav-item nav-link active" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
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
       <div class="card-body text-center">
  </div>
    <div class="card">
        <div class="container bootstrap snippet">
  <div class="row d-flex justify-content-center text-center p-4">
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">Users</div>
          <div class="circle-tile-number text-faded ">.....</div>
          <a style="color: #fff; padding: 10px;" class="circle-tile-footer" href="user.php">All User<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
    <?php
        if($_SESSION['auth_type'] == 'admin'){
              ?>
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Add new User </div>
          <div class="circle-tile-number text-faded ">---</div>
          <a style="color: #fff; padding: 10px;" class="circle-tile-footer" href="adduser.php">add new User<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
    <?php
      }

    ?>
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded">My Order</div>
          <div class="circle-tile-number text-faded ">----</div>
          <a style="color: #fff; padding: 10px;" class="circle-tile-footer" href="order.php">View All order<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     <?php
        if($_SESSION['auth_type'] == 'admin'){
          ?>
             <div class="col-lg-2 col-sm-6">
              <div class="circle-tile ">
                <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content red">
                  <div class="circle-tile-description text-faded"> Add new Order </div>
                  <div class="circle-tile-number text-faded ">---</div>
                  <a style="color: #fff; padding: 10px;" class="circle-tile-footer" href="addorder.php">add new Order<i class="fa fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          <?php
        }

     ?>

  </div> 
</div> 
    </div>
    <!-- Large modal -->
</div>
<?php
if($_SESSION['auth_type'] == 'admin'){

?>
<div class="container">
  <div class="row d-flex justify-content-center text-center bg-ligh">
      <div class="card">
        <h2 class="bg-dark p-2 text-white">Create new Auther</h2>
        <?php
          if(isset($auth_created)){
            echo $auth_created;
          }
          if(isset($error)){
            echo "<p style='color: red;'>". $error ."</b>";
          }
        ?>
          <form action="" method="POST">
              <div class="row p-4 register-form">
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" name="auth_name" class="form-control" placeholder="Enter auth name *" value="<?=@$_POST['auth_name']; ?>"/>
                      </div>
                        <div class="form-group">
                            <input type="number" name="auth_id" class="form-control" placeholder="Enter auth id *" value="<?=@$_POST['auth_id'];?>"/>
                        </div>

                      <div class="form-group">
                          <input type="text" name="username" class="form-control" placeholder="username *" value="<?=@$_POST['username']; ?>"/>
                      </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <input type="password" name="password" class="form-control" placeholder="password *" value="<?=@$_POST['password']; ?>"/>
                      </div>
                         <div class="form-group">
                            <select style="height: 32px; width: 100%;" class="form-control" name="auth_type" value="<?=@$_POST['auth_type']; ?>">
                                <option class="hidden"  selected disabled>Select auth Type</option>
                                <option value="admin">Admin</option>
                                <option value="customer">Customer</option>
                                <option value="manager">Manager</option>
                                <option value="subadmin" >sub-admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary"value="submit" />
                        </div>
                    </div>
              </div>
            </form>
      </div>
  </div>
</div>
<?php
}

?>
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