<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
    
    <div class="row content-center">
        <div class="col-md-6">
            
        <?php

        require_once("connect.php");
        if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname']) && isset($_REQUEST['lname']) && !empty($_REQUEST['lname']) && isset($_REQUEST['user_name']) && !empty($_REQUEST['user_name']) &&  isset($_REQUEST['user_email']) && !empty($_REQUEST['user_email']) && isset($_REQUEST['user_pass'])  && !empty($_REQUEST['user_pass']) && isset($_REQUEST['user_comment']) && !empty($_REQUEST['user_comment'])){

            $fname=$_REQUEST['fname'];
            $lname=$_REQUEST['lname'];
            $user_name=$_REQUEST['user_name'];
            $user_email=$_REQUEST['user_email'];
            $user_pass=$_REQUEST['user_pass'];
            $user_comment=$_REQUEST['user_comment'];

            $insertData="INSERT INTO formtodb(fname,lname,user_name,user_email,user_pass,user_comment) VALUES('$fname','$lname','$user_name','$user_email','$user_pass','$user_comment')";
            $inserRun=mysqli_query($dbconnect,$insertData);
            if($inserRun==true){
                echo "Data inserted";
            }else{
                echo "not inserted";
            }
        }


        ?>


        </div>
        <div class="col-md-12">
            <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Pass</th>
                    <th>User comment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $selectData="SELECT * FROM formtodb";
                $runSelect=mysqli_query($dbconnect,$selectData);
                $dataCount=mysqli_num_rows($runSelect);
                if($dataCount>0){
                    while ($dataShow=mysqli_fetch_array($runSelect)) {?>
                       <tr>
                           <td><?php echo $dataShow['id'] ?></td>
                           <td><?php echo $dataShow['fname'] ?></td>
                           <td><?php echo $dataShow['lname'] ?></td>
                           <td><?php echo $dataShow['user_email'] ?></td>
                           <td><?php echo $dataShow['user_name'] ?></td>
                           <td><?php echo $dataShow['user_pass'] ?></td>
                           <td><?php echo $dataShow['user_comment'] ?></td>
                           <td><a href="#">Edit</a> | <a href="delete.php?id=<?php echo $dataShow['id'] ?>">Delete</a></td>
                       </tr>
                    <?php }
                }



                ?>
            </tbody>
        </table>
        </div>
    </div>


  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

