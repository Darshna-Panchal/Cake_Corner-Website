<?php 
	include "header.php";
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$address=$_REQUEST['address'];
		$pincode=$_REQUEST['pincode'];
		$contact=$_REQUEST['contact'];
		$email=$_REQUEST['email'];
		$password=md5($_REQUEST['password']);
		$cpassword=md5($_REQUEST['confirm_password']);
		$security_que=$_REQUEST['security_que'];
		$security_ans=md5($_REQUEST['security_ans']);


		$check_email="select * from customer where `email_id`='$email'";
		$check_contact="select * from customer where `contact_no`='$contact'";
		$query=mysqli_query($con,$check_email);
		$query1=mysqli_query($con,$check_contact);

		$email_count=mysqli_num_rows($query);
		$contact_count=mysqli_num_rows($query1);
		if($email_count>0)
		{
			?>
				<script type="text/javascript">
					alert("Email_id already exists");
				</script>
			<?php
		}
		else
		{
			if($contact_count>0)
			{
				?>
					<script type="text/javascript">
						alert("Contact Number already exists");
					</script>
				<?php
			}
			else
			if($password===$cpassword)
			{
				$insert="insert into customer (`name`,`address`,`pincode`,`contact_no`,`email_id`,`password`,`security_que`,`security_ans`) values('$name','$address',$pincode,'$contact','$email','$password','$security_que','$security_ans')";
				if(mysqli_query($con,$insert)){
						?>
            	<script type="text/javascript">
            		alert("Registration Successfull!!!");
            		window.location="Login.php";
            	</script>
            <?php
			}
			else{
						?>
							<script type="text/javascript">
								alert("Problem")
							</script>
						<?php
				}
			}
			else{
				?>
					<script type="text/javascript">
						alert("Your password is not match with confirm password");
					</script>
				<?php
			}
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create an Account</title>
</head>
<body>
	<div class="wrapper">
		<div class="registration">
			<center><form method="post" action="">
				<h2>Create an account</h2>
				<table cellpadding="25px" cellspacing="25px">
					<tr>
						<td colspan="2">Name <br><input type="text" name="name" required=""></td>
					</tr>
					<tr>
						<td colspan="2">Address<br><textarea rows="2" cols="10" name="address" required=""></textarea></td>
					</tr>
					<tr>
						<td colspan="2">Pincode<br><input type="number" name="pincode" maxlength="6" required=""></td>
					</tr>
					<tr>
						<td>Contact No<br><input type="tel" name="contact" maxlength="10" required=""></td>
						<td>Email<br><input type="email" name="email" required=""></td>
					</tr>
					<tr>
						<td>Password<br><input type="password" name="password" minlength="8" required=""></td>
						<td>Confirm Password<br><input type="password" name="confirm_password" minlength="8" required=""></td>
					</tr>
					<tr>
            <td>
              Security Question<br><select name="security_que" required="">
                <option value="born city">In What city were you born?</option>
                <option value="pet name">What is your Pet Name?</option>
                <option value="favourite pet">What is the name of your favourite pet?</option>
                <option value="favourite color">What is your favourite color?</option>
                <option value="favourite game">What is your favourite Game?</option>
                <option value="favourite teacher">Who is your favourite Teacher?</option>
                <option value="favourite catoon in childhood">What was your favourite Cartoon in Childhood?</option>
								<option value="first school">What is your first school name?</option>
              </select>
            </td><td>Security Answer<br><input type="password" name="security_ans"></td>
          </tr>
					<center><tr>
					<td colspan="2"><input type="submit" name="submit" value="Register"></td>
				</tr></center>
				</table>
				<h3>Already have an Account?<a href="Login.php">Login</a></h3>
			</form></center>
		</div>
	</div>
</body>
</html>