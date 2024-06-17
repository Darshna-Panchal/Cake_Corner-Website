<?php
	require "New_header.php";
	require "include/check_session.php";

	$password="select * from customer where `cust_id`='$cust_id'";
	$row=mysqli_query($con,$password);
	$result=mysqli_fetch_assoc($row);
	$pass=$result['password'];

	if(isset($_REQUEST['submit']))
	{
		$old_password=md5($_REQUEST['old_password']);
		$new_password=md5($_REQUEST['new_password']);
		$cpassword=md5($_REQUEST['cpassword']);

		if($old_password===$pass)
		{
			if($new_password===$cpassword)
			{
				if($old_password===$new_password)
				{
					?>
						<script type="text/javascript">
							alert("Old password and new password are same!!! Please change the new password");
						</script>
					<?php
				}
				else
				{
					$update="update customer set `password`='$new_password' where `cust_id`='$cust_id'";
					if(mysqli_query($con,$update))
					{
						?>
							<script type="text/javascript">
								alert("Your password updated successully!!!");
								window.location="Login.php";
							</script>
						<?php
					}
					else
					{
						?>
							<script type="text/javascript">
									alert("Something wrong!!!");
							</script>
						<?php
					}
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("New password and confirm password are not match!!!");
				</script>
			<?php
			}	
		}
		else
		{
			?>
				<script type="text/javascript">
					alert("Your old password is wrong!!!");
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
	<style type="text/css">
		.wrapper1{
			display: flex;
			margin-top: 150px;
			max-width: 1000px;
			margin: 0px auto;
		}
		.wrapper1 .setting{
			margin: 160px 100px;
		}
		.wrapper1 .change_pass{
			margin-top: 100px;
		}
		.select{
			background-color: white;
		}
	</style>
</head>
<body>
	<div class="wrapper1">
		<div class="setting">
			<ul>
			<li><a href="Profile.php">Profile Setting</a></li>
			<li><a href="Change_Password.php">Change Password</a></li>
			<li class="select"><a href="Feedback.php">Feedback</a></li>
			<li><a href="Logout.php">Logout</a></li>
		</ul>
		</div>
		<div class="change_pass">
			<center><form>
				<h3>Change Password</h3>
				<table cellspacing="20px">
					<tr>
						<td><input type="password" name="old_password" placeholder="Old Password"></td>
					</tr>
					<tr>
						<td><input type="password" name="new_password" placeholder="New Password"></td>
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