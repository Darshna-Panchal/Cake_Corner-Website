<?php 
	require "New_header.php";
?>
<!DOCTYPE html>
<?php 
	require "include/check_session.php";
	$select="select * from customer where `cust_id`=$cust_id";
	$r=mysqli_query($con,$select);
	$data=mysqli_fetch_assoc($r);


	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$address=$_REQUEST['address'];
		$pincode=$_REQUEST['pincode'];
		$contact=$_REQUEST['contact'];
		$email=$_REQUEST['email'];

		$update="update customer set `name`='$name',`address`='$address',`pincode`='$pincode',`contact_no`='$contact',`email_id`='$email' where `cust_id`=$cust_id";
		if(mysqli_query($con,$update))
		{
			header("location:Profile_update_msg.php");
		}
		else
		{
			?>
				<script type="text/javascript">
					alert("Profile not updated!!!");
				</script>
			<?php
		}
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
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
		.wrapper1 .profile{
			margin-top: 10px;
			width: 600px;
		}
		.select{
			background-color: white;
		}
		.p{
			background-color:rgb(117,0,18);
		}
	</style>
</head>
<body>
	<div class="wrapper1">
		<div class="setting">
			<ul>
			<li><a href="Profile.php" class="p">Profile Setting</a></li>
			<li><a href="Change_Password.php">Change Password</a></li>
			<li class="select"><a href="Feedback.php">Feedback</a></li>
			<li><a href="Logout.php">Logout</a></li>
		</ul>
		</div>
		<div class="profile">
			<center><form method="post" action="">
				<h2>Profile</h2>
				<table cellpadding="25px" cellspacing="25px">
					<tr>
						<td colspan="2">Name <br><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
					</tr>
					<tr>
						<td colspan="2">Address<br><textarea rows="2" cols="10" name="address"  required=""><?php echo $data['address']; ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2">Pincode<br><input type="text" name="pincode" value="<?php echo $data['pincode']; ?>" maxlength="6"></td>
					</tr>
					<tr>
						<td>Contact No<br><input type="tel" name="contact" value="<?php echo $data['contact_no']; ?>" maxlength="10" required=""></td>
						<td>Email<br><input type="email" name="email" value="<?php echo $data['email_id']; ?>" required=""></td>
					</tr>
					<center><tr>
					<td colspan="2"><input type="submit" name="submit" value="Update"></td>
				</tr></center>
				</table>
			</form></center>
		</div>
	</div>
</body>
</html>