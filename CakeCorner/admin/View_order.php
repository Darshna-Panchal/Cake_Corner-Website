<?php 

	require "header.php";
	include "include/check_session.php";

	$ord_id=$_REQUEST['ord_id'];

	$x="SELECT * FROM order where `ord_id`='$ord_id';";
	if($y=mysqli_query($con,$x))
	{
		while($z=mysqli_fetch_assoc($y))
		{
			$cust_id=$z['cust_id'];
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
	<style type="text/css">
		.wrapper1{
			max-width: 1050px;
			margin: 0px auto;
		}
		.btn2{
            
            border-radius: 4px;
            font-size: 18px;
            background-color: red;
            text-decoration: none;
            color: white;
            padding: 5px 5px;
        }
        .image{
        	width: 150px;   
        	height: 150px;
        	border-radius: 4px;
        }
        .ordButton{
        	width: 100%;
    border: 2px solid white;
    color: white;
    border-radius: 5px;
    font-size: 17px;
    font-family: arial;
    padding: 5px 5px;
    letter-spacing: 1px;
    word-spacing: 2px;
    background-color: green;
    margin-top: 10px;
    text-transform: uppercase;
    box-shadow: 5px 5px 5px black;
		}
        }
	</style>
</head>
<body>
	<div class="wrapper1">
		<div class="cart">
			<center><table cellpadding="30px" cellspacing="30px">
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
					<td>
						<form method="post" action="Delete_Cart.php">
							<input name="cart_id" value="<?php echo $row['cart_id']?>" hidden>
							<input type="submit" name="submit" value="Delete" class="btn2">
						</form>
					</td>
				<tr>
				<?php 
						$count++;
						}
					}

					$a="select `total_price` from cart_history where `cust_id`='$cust_id'";
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
					<?php if($count!=1) 
						{
					?>
					<td class="totamnt" colspan="2">Total Amount :<?php echo $sum ?></td>
					<?php 
				}
				}	
	}	
					?>
				</tr>
			</table></center>

		</div>
	</div>
</body>
</html>