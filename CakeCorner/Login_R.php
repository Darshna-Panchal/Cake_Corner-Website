<?php 
  session_start();
  include "header.php";
  if(isset($_REQUEST['submit']))
    {
         $user_name=$_REQUEST['user_name'];
         $password=$_REQUEST['password'];
         $password1=md5($password);
         $q="select * from customer where (`email_id`='$user_name' || `contact_no`='$user_name') && `password`='$password1' ";
         $s=mysqli_query($con,$q);
         if($r=mysqli_fetch_assoc($s))
         {
         		$_SESSION['cust_id']=$r['cust_id'];
                header("location:New_index.php");
         }else
         {
           ?>
            	<script type="text/javascript">
            		alert("Incorrect username or password");
            	</script>
            <?php
         }
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<div class="wrapper">
	<div class="updatemsg">
		<h2>Registration Successful!!</h2>
	</div>
	<div class="login">

		<div class="create_acc">
			<center><br><h3>New Customer</h3><br><br><br>
			<a href="Create_An_Account.php">Create an Account</a></center>
		</div>
		<div class="login_form">
			<h3>Login</h3><br>
			<center><form>
				<table cellspacing="10px">
					<tr>
						<td><input type="text" name="user_name" placeholder="Email or Contact Number"></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="Password" minlength="8"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Login"></td>
					</tr>
				</table>
			</form></center>
			<a href="Forgot_Password.php">Lost your password?</a>
		</div>
	</div>
</div>
</body>
</html>