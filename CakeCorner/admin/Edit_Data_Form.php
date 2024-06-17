<?php 
	require "header.php";
	include "include/check_session.php";

		$cust_id=$_REQUEST['cust_id'];
		$name=$_REQUEST['name'];
		$address=$_REQUEST['address'];
		$pincode=$_REQUEST['pincode'];
		$contact_no=$_REQUEST['contact_no'];
		$email_id=$_REQUEST['email_id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="wrapper">
		<div class="edit_data">
			<center><form method="post" action="Edit_Data.php">
				<h2>Edit Data</h2>
				<table cellpadding="25px" cellspacing="25px">
					<tr><td><input type="text" name="cust_id" value="<?php echo "$cust_id"?>" hidden=""></td></tr>
					<tr>
						<td colspan="2">Name <br><input type="text" name="name" value="<?php echo "$name"?>" required=""></td>
					</tr>
					<tr>
						<td colspan="2">Address<br><textarea rows="2" cols="10" name="address" required=""><?php echo "$address"?></textarea></td>
					</tr>
					<tr>
						<td colspan="2">Pincode<br><input type="number" name="pincode" maxlength="6" value="<?php echo "$pincode"?>" required=""></td>
					</tr>
					<tr>
						<td>Contact No<br><input type="tel" name="contact_no" maxlength="10" value="<?php echo "$contact_no"?>" required=""></td>
						<td>Email<br><input type="email" name="email_id" value="<?php echo "$email_id"?>" required=""></td>
					</tr>
					<center><tr>
						<td colspan="2"><input type="submit" name="submit" value="Edit"></td>
					</tr></center>
				</table>
			</form></center>
		</div>
	</div>
</body>
</html>