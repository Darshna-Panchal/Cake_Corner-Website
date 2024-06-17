<?php 
	require "header.php";
	include "include/check_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Products</title>
	<style type="text/css">
		img{
			width: 120px;
			height: 100px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<right><div class="Add_button">
		<div class="wrapper">
			<a href="add_p.php">Add Product</a>
		</div>
	</div></right>
		<center><div class="products">
			<table  cellpadding="25" cellspacing="25">
				<tr>
					<th>Sr. No.</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Description</th>
				</tr>
				<?php
					$count=1;
					$select="select * from product";
					if($result=mysqli_query($con,$select))
					{
						while($row=mysqli_fetch_assoc($result))
						{
								$image_name=$row['image_name'];
				?>
				<tr>
					<td class="headingSerialNo"><?php echo $count; ?></td>
					<td><img src="<?php echo $row['image'] ?>"></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['price']?></td>
					<td><?php echo $row['quantity']?></td>
					<td><?php echo $row['description']?></td>
					<td>
        					<form method="post" action="Edit_Product_Form.php">
        						<input name='pr_id' value="<?php echo $row['pr_id']?>" hidden>
        						<input name="image_name" value="<?php echo $row['image_name'] ?>" hidden >
               					<input name='name' value="<?php echo $row['name']?>" hidden>
                				<input name='price' value="<?php echo $row['price']?>" hidden>
               			 		<input name='quantity' value="<?php echo $row['quantity']?>" hidden>
                				<input name='description' value="<?php echo $row['description']?>" hidden>
                				<button type="submit" name="update" value="update" class="btn1">Edit</button>
            				</form>
        			</td>
        			<td>
        					<form method="post" action="Delete_Product.php">
        						<input name='pr_id' value="<?php echo $row['pr_id']?>" hidden>
                				<button type="submit" name="delete" value="delete" class="btn2">Delete</button>
            				</form>
        			</td>
				</tr>
				<?php 
						$count++;
						}
					}
				?>
			</table>
		</div></center>
</body>
</html>
