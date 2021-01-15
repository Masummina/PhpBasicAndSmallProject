
<?php
include 'config.php';
if(!isset($_SESSION['id']) || $_SESSION['id'] == ''){
    header("location: index.php");
  }
    if(isset($_POST['search']))
       {
        $search = $_POST['searchval'];
          $src_sql ="SELECT * FROM `order_table` WHERE `order_name` LIKE '%$search%' OR `email` LIKE '%$search%' OR `mobile` LIKE '%$search%' OR `address` LIKE '%$search%' OR `city` LIKE '%$search%' OR `details` LIKE '%$search%'";
             $query_data = mysqli_query($dbconnect,  $src_sql);
       }else {
         $sql = "SELECT * FROM `order_table`";
         $query_data = mysqli_query($dbconnect, $sql);
       }

       $rowcount=mysqli_num_rows($query_data);

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
      <div class="adduser">
        <h2 class="text-center">All Orders</h2>
         <?php
            if($_SESSION['auth_type'] == 'admin'){
              ?>
               <a href="addorder.php">
                  <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Order</button>
                </a>
            <?php
            }

          ?>
    
      </div>


        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Order Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile no</th>
                <th scope="col">Address</th>
                <th scope="col">City:</th>
                <th scope="col">Details</th>
              </tr>
            </thead>
                  <?php
                     if($rowcount >= 0)
                   {
                      while ($fetchdata = mysqli_fetch_array($query_data)) 
                   {
              ?>
            <tbody>

              <tr>
              <th><?php echo $fetchdata['id'] ?></th>
                <td><?php echo $fetchdata['order_name'] ?></td>
                <td><?php echo $fetchdata['email'] ?></td>
                <td><?php echo $fetchdata['mobile'] ?></td>
                <td><?php echo $fetchdata['address'] ?></td>
                <td><?php echo $fetchdata['city'] ?></td>
                <td><?php echo $fetchdata['details'] ?></td>
              </tr>
   
            </tbody>
                       <?php 

                    }
                   }


              ?>
          </table>
    </div>
    <!-- Large modal -->
</div>
</main>
<!---->

<!---->
</footer>
</body>