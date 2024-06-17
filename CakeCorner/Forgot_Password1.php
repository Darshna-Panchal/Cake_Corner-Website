<?php 
	include "header.php";
	session_start();
	$email=$_SESSION['user_name'];

	if(isset($_REQUEST['submit']))
	{
		$password=md5($_REQUEST['password']);
		$cpassword=md5($_REQUEST['cpassword']);

		if ($password===$cpassword) {
			
			$update="update customer set `password`='$password' where `email_id`='$email' || `contact_no`='$email'";
			if($query=mysqli_query($con,$update))
			{
				?>
            	<script type="text/javascript">
            		alert("Password Updated Successfully!!!");
            		window.location="Login.php";
            	</script>
            <?php
			}
			else
			{
				?>
					<script type="text/javascript">
						alert("Password not updated!!!!")
					</script>
				<?php
			}

		}
		else
		{
			?>
				<script type="text/javascript">
					alert("Password are not match");
				</script>
			<?php
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
	<div class="wrapper">
		<div class="change_pass">
			<center><form>
				<h3>Change Password</h3>
				<table cellspacing="20px">
					<tr>
						<td><input type="password" name="password" placeholder="New Password"></td>
					</tr>
					<tr>
						<td><input type="password" name="cpassword" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Change Password"></td>
					</tr>
				</table>
			</form></center>
		</div>
	</div>
</body>
</html>