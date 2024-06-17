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
</head>
<body>
	<div class="wrapper">
		<center><div class="profileupdatemsg">
			<h2>Profile Updated Successfully!!</h2>
		</div></center>

		<div class="profile1">
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