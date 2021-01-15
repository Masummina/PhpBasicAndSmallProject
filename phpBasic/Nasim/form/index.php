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
  <div class="container col-md-6">
 
  <h2>PHP Form Control</h2>
    <form action="savedata.php" method="POST">
        <div class="form-group">
        <label for="fname">Your First Name:</label>
        <input type="text" class="form-control" name="fname" placeholder="Your first name">
        </div>
        <div class="form-group">
        <label for="fname">Your last Name:</label>
        <input type="text" class="form-control" name="lname" placeholder="Your last name">
        </div>
        <div class="form-group">
        <label for="fname">User Name:</label>
        <input type="text" class="form-control" name="user_name" placeholder="User Name">
        </div>
        <div class="form-group">
        <label for="fname">Your Email Address:</label>
        <input type="email" class="form-control" name="user_email" placeholder="Your email Address">
        </div>
        <div class="form-group">
            <label for="fname">Pass Word:</label>
            <input type="password" class="form-control" name="user_pass" placeholder="User password">
        </div>
        <div class="form-group">
            <label for="fname">Conform Pass:</label>
            <input type="password" class="form-control" name="user_cpass" placeholder="Conform password">
        </div>
        <div class="form-group">
            <label for="comment">User Comment</label>
            <textarea class="form-control" name="user_comment"></textarea>
        </div>
            <input type="submit" value="Sbumit" name="submit" class="btn-primary">
        </form>


        
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>