<?php

    require "include/connect.php";
    session_start();
    if(isset($_REQUEST['submit']))
    {
         $user_name=$_REQUEST['user_name'];
         $password=$_REQUEST['password'];
         $q="select * from admin where `username`='$user_name' && `password`='$password' ";
         $s=mysqli_query($con,$q);
         if($r=mysqli_fetch_assoc($s))
         {
                $_SESSION['username']=$r['username'];
                header("location:dashboard.php");
         }else
         {
            echo "incorrect username or password";
         }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/style.css" rel="stylesheet" />    
    <title>Document</title>
</head>
<body>
    <div class="wrapper">    
        <center>
        <form action="#" method="post" class="login_form">
            <h3>Admin Login Form</h3>
            <table cellpadding="25px" cellspacing="25px">
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Login" ></td>
                </tr>
            </table>
        </form>
        </center>
    </div>
</body>
</html>
