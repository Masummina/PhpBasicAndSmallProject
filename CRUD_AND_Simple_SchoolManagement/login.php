<?php
include 'include/header.php';

if(isset($_POST['submit'])){
  $user = $_POST['uname'];
  $psw = $_POST['psw'];

  if(empty($user) OR $user==""){
      $error = "Please enter Your username!";
  }elseif(empty($psw) OR $psw==""){
    $error = "Please enter your Password!";
  }else{

    $sql = "SELECT * FROM `users` WHERE username = '$user' AND password = '$psw'";
    $result = $conn->query($sql);
    $rowCount = $result->num_rows;
    if($rowCount > 0){
      while($rows = $result->fetch_assoc()){
        $name = $rows['name'];
        $status = $rows['status'];
        $username = $rows['username'];
        $password = $rows['password'];
      }

         if($user == $username && $psw == $password){
            echo "Yes connected";
            $_SESSION["name"] = "$name";
            $_SESSION["status"] = "$status";
            $_SESSION["username"] = "$status";
            $_SESSION["username"] = "$username";

            header('location: index.php');
          }else{
            echo "nooo";
          }

      // username and password check
    }else{
      echo "Please enter Correct Password or username!";
    }

//     echo $user;
//     echo $psw;
// echo "<br>";
//         echo $username;
//     echo $password;






  }

}

?>
<div class="container">
  <div class="row p-3">
  <form class="modal-content animate" action="" method="post">
    <div class="container">
      <div class="login-form">
           <table>
              <tr>
                <td><label for="uname"><b>Username</b></label></td>
                <td><input type="text" placeholder="Enter Username" name="uname" required></td>
              </tr>
              <tr>
                <td><label for="psw"><b>Password</b></label></td>
                <td><input type="password" placeholder="Enter Password" name="psw" required></td>
              </tr>
          </table>
      </div>
      <button type="submit" name="submit" id="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
  </div>
</div>



<style type="text/css">
  form.modal-content.animate {
    padding: 30px;
    width: 100%;
}
</style>



