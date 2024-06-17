<?php 
	require "New_header.php";
	require "include/check_session.php";

	$select="select * from customer where `cust_id`='$cust_id'";
	$result=mysqli_query($con,$select);
	$row=mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bill Details</title>
	<style type="text/css">
		.image{
        	width: 150px;   
        	height: 150px;
        	border-radius: 4px;
        }
        .bill{
        	background-color: white;
        	border: 2px solid black;
        	border-radius: 5px;
        }
        .bill table tr td{
        	font-size: 17px;
        	color: black;
        }
	</style>
</head>
<body>
	<div class="wrapper">
	<center><div class="bill">
			<form>
				<h3>Bill Detail<h4><?php echo date('y') ?><?php echo date('m') ?><?php echo date('d') ?><?php echo $cust_id ?></h4></h3>
				<table cellpadding="30px" cellspacing="30px">
					<tr>
						<td class="xyz">Name</td>
						<td><?php echo $row['name'] ?></td>
					</tr>
					<tr>
						<td class="xyz">Address</td>
						<td><?php echo $row['address'] ?></td>
					</tr>
					<tr>
						<td class="xyz">Contact Number</td>
						<td><?php echo $row['contact_no'] ?></td>
					</tr>
					<tr>
						<td class="xyz">Email-Id</td>
						<td><?php echo $row['email_id'] ?></td>
					</tr>
				</table>
				<table cellpadding="30px" cellspacing="30px">
					<!-- <tr>
						<td colspan="4"></td>
					</tr> -->
					<tr>
					<th>Sr.No</th>
					<th>Product Name</th>
					<th>Quantity</th>
					<th>Price</th>
					<th>Display Name</th>
					<th>Display Image</th>
				</tr>
				<?php 

					$count=1;
					$select="select * from cart where `cust_id`='$cust_id'";
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
								<td><img src="<?php echo $row['Display_Image'] ?>" class="image"></td>
							</tr>
								<?php 
						$count++;
						}
						
					}
					$a="select `total_price` from cart where `cust_id`='$cust_id'";
					if($b=mysqli_query($con,$a))
					{
						$sum=0;
						while($c=mysqli_fetch_assoc($b))
						{
							
							$sum=$sum+($c['total_price']);
						}
					}
				?>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="totamnt" colspan="2">Total Amount :<?php echo $sum ?></td>
				</tr>
				<?php 
					$select="select * from cart where cust_id=$cust_id";
 	$r=mysqli_query($con,$select);
 	while($r1=mysqli_fetch_assoc($r))
 	{
 		// $cart_id=$r1['cart_id'];
 		$qty=$r1['quantity'];
 		$totprice=$r1['total_price'];
 		$cust=$r1['cust_id'];
 		$pr_id=$r1['pr_id'];
 		$Diaplay_name=$r1['Display_Name'];
 		$image_name=$r1['image_name'];
 		$Dispaly_Image=$r1['Display_Image']; 
 		
 		$insert="INSERT INTO `cart_history` (`cart_id`, `quantity`, `total_price`, `cust_id`, `pr_id`, `Display_Name`, `image_name`, `Display_Image`) VALUES (NULL, '$qty', '$totprice', '$cust', '$pr_id', '$Diaplay_name', '$image_name', '$Dispaly_Image');";

 		if(mysqli_query($con,$insert))
 		{
 			$delete="delete from cart where cust_id=$cust_id";
 			if(mysqli_query($con,$delete))
 			{
 				
 			}
 			else
 			{
 				echo "problem";

 			}	
 		}
 	}		
				?>
				</table>
			</form>
		</div></center>
	
	</div>
</body>
</html>
<?php 
	
?>
