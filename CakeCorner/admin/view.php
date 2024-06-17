<?php 
	// require "header.php";
	require "include/connect.php";
	include "include/check_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="wrappr">
		<div class="order">
			<table>
				<tr>
					<th>Sr.No</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Display Name</th>
					<th>Display Image</th>
				</tr>
				<?php 
					$cust_id=$_REQUEST['cust_id'];
					$count=1;
					$select="select * from cart_history where `cust_id`='$cust_id'";
					if($result=mysqli_query($con,$select))
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$pr_id=$row['pr_id'];
							$select1="select * from product where `pr_id`='$pr_id'";
							$result1=mysqli_query($con,$select1);
							$row1=mysqli_fetch_assoc($result1);
							$q=$row['quantity'];
				?>
				<tr>
					<td class="headingSerialNo"><?php echo $count;?></td>
					<td><?php echo $row1['name']?></td>
					<td><?php echo $q ?></td>
					<td><?php echo $row['total_price']?></td>
					<td><?php echo $row['Display_Name'] ?></td>
					<td><img src="<?php echo $row['Dispaly_Image'] ?>" class="image"></td>
				</tr>
				<?php	
				}
			}
				?>
			</table>
		</div>
	</div>
</body>
</html>