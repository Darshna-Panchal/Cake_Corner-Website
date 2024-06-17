<?php 
	require "header.php";
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$contact=$_REQUEST['contact'];
		$message=$_REQUEST['message'];

	    $insert="insert into contact_us (`name`,`email_id`,`contact_no`,`message`) values('$name','$email','$contact','$message')";
		if(mysqli_query($con,$insert))
		{
			header("location:Contact_Us.php");
		}
		else{
				echo "problem";
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="wrapper">
		<div class="updatemsg">
			<h2>Contact Us</h2>
		</div>
		<div class="contactus">
			<div class="address">
				<table cellpadding="20px" cellspacing="20px">
					<tr>
						<td>Modasa,Gujarat,India</td>
					</tr>
					<tr>
						<td>CakeCorner@yahoo.com</td>
					</tr>
					<tr>
						<td>+91 9467865432</td>
					</tr>
					<tr>
						<td>Mon-Fri 8:00 AM to 8:00 PM</td>
					</tr>
				</table>
			</div>
			<div class="contact">
				<form method="post" action="">
				<table cellpadding="25" cellspacing="25">
					<tr>
						<td><input type="text" name="name" placeholder="Name"></td>
					</tr>
					<tr>
						<td><input type="email" name="email" placeholder="Email-id"></td>
					</tr>
					<tr>
						<td><input type="tel" name="contact" placeholder="Contact Number"></td>
					</tr>
					<tr>
						<td><textarea cols="5" rows="5" name="message" placeholder="Message"></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="send"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
</body>
</html>