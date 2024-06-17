<?php 
	require "New_header.php";
	require "include/check_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Make Order</title>
</head>
<body>
	<div class="wrapper">
		<center><div class="order">
			<form method="post" action=""> 
				<h3>Place Order</h3>
				<table cellpadding="25" cellspacing="25">
					<tr>
						<td>Name </td>
						<td><input type="text" name="name" placeholder="Name"></td>
					</tr>
					<tr>
						<td>Email-id or Contact Number</td>
						<td><input type="text" name="username" placeholder="Email-id or Contact Number"></td>
					</tr>
					<tr>
						<td><input type="date" name="order_date" value="<?php date(dd-mm-yyyy) ?>"></td>
					</tr>
					<tr>
						<td>Purpose</td>
						<td>
							<select name="purpose" required="" >
								<option value="birthday">For Birhday</option>
								<option value="merrage">For Merrige Aniversary</option>
								<option value="festival">For Festival</option>
								<option value="none">None</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Name</td>
						<td><input type="text" name="purpose_name" placeholder="Enter the name of the person"></td>
					</tr>
					<tr>
						<td>Delivery Date</td>
						<td><input type="date" name="delivery_date" placeholder="Delivery Date"></td>
					</tr>
					<tr>
						<td>Delivery Time</td>
						<td><input type="time" name="delivery_time" placeholder="Delivery Time"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" placeholder="Submit"></td>
					</tr>
				</table>
			</form>
		</div></center>
	</div>
</body>
</html>