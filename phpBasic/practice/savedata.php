<!DOCTYPE html>
<html>
<head>
    <title>show Php</title>
</head>
<body>
  <table border="1">
            <tr>
                <th>Fname</th> 
                <th>Lname</th> 
                <th>User Email</th> 
                <th>Pass name</th> 
                <th>Password</th> 
                <th>Edit and Delete</th> 
            </tr>
            <?php
                require_once("connect_core.php");
                $Email_select = "SELECT * FROM user_access";
                $run_user = mysqli_query($bdconnect,$Email_select);
                $dataCount= mysqli_num_rows($run_user);
                if($dataCount > 0){
                    while($datafname= mysqli_fetch_array($run_user)){ ?>
                        <tr>
                            <td><?php echo $datafname["fname"] ?></td>
                            <td><?php echo $datafname["lname"] ?></td>
                            <td><?php echo $datafname["user_name"] ?></td>
                            <td><?php echo $datafname["user_email"] ?></td>
                            <td><?php echo $datafname["user_pass"] ?></td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                    <?php }
                }

                ?>
            <tr>
        
        </table>
</body>

</html>