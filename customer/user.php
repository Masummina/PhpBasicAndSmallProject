
<?php
include 'config.php';
if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    header("location: index.php");
  }

  $session_auth_id = $_SESSION['auth_id'];
  echo $session_auth_id;

?>






<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<!--===============================================================================================-->

  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

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
          <a class="nav-item nav-link active" </footer>
<style>
form.navbar-form.navbar-right input {
    width: 200px;
}
.navbar-nav a.btn.btn-danger {
    height: 37px;
    margin-top: 6px;
}</style>
</body>


</footer>
<style>
form.navbar-form.navbar-right input {
    width: 200px;
}
.navbar-nav a.btn.btn-danger {
    height: 37px;
    margin-top: 6px;
}</style>
</body>
        </div>
      </div>
      <div class="navbar-nav">
        <form class="navbar-form navbar-right" action="" method="POST">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="searchval">
            <div class="input-group-btn">
              <button class="btn btn-default" name="search" type="submit">
                Search
              </button>
            </div>
          </div>
        </form>
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
      <?php
                    if($_SESSION['auth_id'] != 'manager'){
                ?>
      <div class="adduser">
      <a href="adduser.php">
        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new List</button></a></div>
        <?php
          }
        ?>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile no</th>
                <th scope="col">District</th>
                <th scope="col">Photo</th>
                <th scope="col">Add:</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
                   <?php

                    // search section
                     if(isset($_POST['search']))
                     {
                      $search = $_POST['searchval'];
                           $src_sql ="SELECT * FROM `user_table` WHERE `user_name` LIKE '%$search%' OR `email` LIKE '%$search%' OR `phone` LIKE '%$search%' OR `district` LIKE '%$search%' OR `address` LIKE '%$search%'";
                           $query_data = mysqli_query($dbconnect,  $src_sql);
                     }else if($_SESSION['auth_type']=='admin' || $_SESSION['auth_type'] == 'manager'){
                          $sql = "SELECT * FROM `user_table`";
                          $query_data = mysqli_query($dbconnect, $sql);
                     }

                     else {
                       //$sql = "SELECT * FROM `user_table` WHERE 'auth_id'= '$session_auth_id'";
                       $sql = "SELECT * FROM `user_table` WHERE `auth_id`='$session_auth_id'";
                       $query_data = mysqli_query($dbconnect, $sql);
                     }
                       $rowcount=mysqli_num_rows($query_data);
                       if($rowcount >= 0)
                     {
                      while ($fetchdata = mysqli_fetch_array($query_data)) 
                     {
                ?>
            <tbody>

              <tr>
              <th><?php echo $fetchdata['id'] ?></th>
                <td><?php echo $fetchdata['user_name'] ?></td>
                <td><?php echo $fetchdata['email'] ?></td>
                <td><?php echo $fetchdata['phone'] ?></td>
                <td><?php echo $fetchdata['district'] ?></td>  
                <td><img width="30px" src="images/<?php echo $fetchdata['photo'] ?>"> </td>
                <td><?php echo $fetchdata['address'] ?></td>
                <?php
                    if($_SESSION['auth_type'] == 'admin'){
                ?>
                <td>  
                  <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> edit</a>
                  <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $fetchdata['id'] ?>"><i class="fa fa-trash-alt"></i> delete</a> 
                </td>
                <?php
                  }else {
                    ?>
                    <td>
                    <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-ban" aria-hidden="true"></i> NO PARMITION</a></td>
                    <?php
                  }
                ?>
              </tr>
   
            </tbody>
                       <?php 

                    }
                   }else{
                    echo "No messing with search key";
                   }


              ?>
          </table>
    </div>
    <!-- Large modal -->
</div>
</main>
<!---->

<!---->
<footer >
  <style>
form.navbar-form.navbar-right input {
    width: 200px;
}
.navbar-nav a.btn.btn-danger {
    height: 37px;
    margin-top: 6px;
}

</style>

	</div>
</footer>
</body>