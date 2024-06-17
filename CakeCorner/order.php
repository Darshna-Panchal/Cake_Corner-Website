<?php 
	 require "New_header.php";
	// require "include/connection.php";
	require "include/check_session.php";

	$s="select `cart_id` from cart where `cust_id`='$cust_id'";
 	$r=mysqli_query($con,$s);
 	$count=0;
 	while($r1=mysqli_fetch_assoc($r))
 	{	
 		$count++;
    }

	$select="select * from customer where `cust_id`=$cust_id";
	$r=mysqli_query($con,$select);
	$data=mysqli_fetch_assoc($r);



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.order form h2{
			text-transform: uppercase;
	        font-family: arial;
	        letter-spacing: 1px;
	        word-spacing: 3px;
	        padding: 10px 0px;
	        text-shadow: 5px 5px 8px white;
	        font-weight: bolder;
		}
		.order form tr td{
			font-size: 18px;
	
	font-family: arial;
	letter-spacing: 1px;
	word-spacing: 3px;
		}
		.order form table tr td input[type="text"],
		.order form table tr td input[type="email"],
		.order form table tr td input[type="tel"],
		.order form table tr td textarea
		{
			border: 2px solid rgb(117,0,18);
	width: 100%;
	border-radius: 5px;
	font-size: 15px;
	font-family: arial;
	padding: 5px 5px;
	letter-spacing: 1px;
	word-spacing: 2px;
		}
		.radio{
			color: black;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<center><div class="order">
			<form method="post" action="order1.php">
				<h2>Shipment Detail</h2>

					<table cellpadding="25px" cellspacing="25px">
						<tr>
							<td colspan="2">Name : <input type="text" name="name" value="<?php echo $data['name']; ?>"><input type="text" name="count" value="<?php echo $count ?>" hidden></td>
						</tr>
						<tr>
							<td colspan="2">Address : <textarea rows="2" cols="10" name="address"  required=""><?php echo $data['address']; ?></textarea></td>
						</tr>
						<tr>
							<td colspan="2">Contact No: <input type="tel" name="contact" value="<?php echo $data['contact_no']; ?>" maxlength="10" required=""></td>
						</tr>
						<tr>
							<td colspan="2">Email-id: <input type="email" name="email" value="<?php echo $data['email_id']; ?>" required=""></td>
						</tr>
						<tr>
							<td colspan="2">Pincode : <input type="text" name="pincode" value="<?php echo $data['pincode']; ?>" maxlength="6"></td>
						</tr>
						<tr>
							<td>Payment Type :</td>
							<td class="radio"><input type="radio" name="payment" value="COD" checked="">Cash On Delivery <br><br>
								<input type="radio" name="payment" value="online">Pay Online</td>


						</tr>
						<tr><td><input type="submit" name="submit" value="SUBMIT"></td></tr>
					</table>
			</form>
		</div></center>
	</div>
</body>
</html>