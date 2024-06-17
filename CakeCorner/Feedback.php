<?php 
	require "New_header.php";
	require "include/check_session.php";


	if(isset($_REQUEST['submit']))
	{
		$cust_id=$_REQUEST['cust_id'];
		$subject=$_REQUEST['subject'];
		$message=$_REQUEST['message'];

	    $insert="insert into feedback(`subject`,`message`,`cust_id`) values ('$subject','$message','$cust_id')";
		if(mysqli_query($con,$insert))
		{
			?>
							<script type="text/javascript">
								alert("Your feedback has been submitted Successfully!!!");
								window.location="Feedback.php";
							</script>
						<?php
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
	<title>Feedback</title>
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
		.wrapper1 .feedback{
			margin-top: 130px;
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
		<center><div class="feedback">  
			<form method="post" action="">
				<h3>Feedback</h3>
				<table cellpadding="25" cellspacing="25">
					<tr>
						<td><input type="text" name="subject" placeholder="Subject" required="">
						<input type="text" name="cust_id" hidden="" value="<?php echo $cust_id ?>"></td>
					</tr>
					<tr>
						<td><textarea cols="5" rows="5" name="message" placeholder="Message" required=""></textarea></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="submit"></td>
					</tr>
				</table>
			</form>
		</div>
	</center>
	</div>
</body>
</html>