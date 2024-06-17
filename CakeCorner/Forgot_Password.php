<?php
    include "header.php";
    session_start();
    if(isset($_REQUEST['submit']))
    {
    	$user_name=$_REQUEST['user_name'];
    	$security_que=$_REQUEST['security_que'];
    	$security_ans=md5($_REQUEST['security_ans']);

    	$q="select * from customer where (`email_id`='$user_name' || `contact_no`='$user_name') && `security_que`='$security_que' && `security_ans`='$security_ans'";
         $s=mysqli_query($con,$q);
         if(mysqli_fetch_assoc($s))
         {
         		$_SESSION['user_name']=$_REQUEST['user_name'];
                header("location:Forgot_Password1.php");
         }else
         {
           ?>
					<script type="text/javascript">
						alert("Inserted Data are incorrect!!!");
					</script>
		   <?php
         }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Forgot Password</title>
</head>
<body>
	<div class="wrapper">
		<div class="forgot_pass">
			<center><form>
				<h3>Forgot Password</h3>
				<table cellspacing="20px">
					<tr>
						<td>Email or Contact Number</td>
						<td><input type="text" name="user_name" placeholder="Email or Contact Number"></td>
					</tr>
					<tr>
						<td>Security Question</td>
						<td>
							<select name="security_que" required="" >
								 <option value="born city">In What city were you born?</option>
                				 <option value="pet name">What is your Pet Name?</option>
                				 <option value="favourite pet">What is the name of your favourite pet?</option>
                				 <option value="favourite color">What is your favourite color?</option>
               					 <option value="favourite game">What is your favourite Game?</option>
              					 <option value="favourite teacher">Who is your favourite Teacher?</option>
               					 <option value="favourite catoon in childhood">What was your favourite Cartoon in Childhood?</option>
								 <option value="first school">What is your first school name?</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Security Answer</td>
						<td>
							<input type="password" name="security_ans" placeholder="Security Answer">		
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</form></center>
		</div>
	</div>
</body>
</html>