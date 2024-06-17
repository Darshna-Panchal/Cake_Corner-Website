<?php 
	require "header.php";
	include "include/check_session.php";
	if(isset($_REQUEST['submit']))
	{
		$picture_name=$_FILES['product_image']['name'];
    	$tmp=$_FILES['product_image']['tmp_name'];
    	$image="images/".$picture_name;
    	if(move_uploaded_file($tmp,"images/".$picture_name))
    	{
    		echo "upload";
    	}
     
     $p_name=$_REQUEST['name'];
     $price=$_REQUEST['price'];
     $quantity=$_REQUEST['quantity'];
     $description=$_REQUEST['description'];

     $insert="insert into product (`name`,`price`,`quantity`,`description`,`image_name`,`image`) values('$p_name','$price',$quantity,'$description','$picture_name','$image')";
				if(mysqli_query($con,$insert)){
						header("location:products.php");
				}
				else{
						?>
							<script type="text/javascript">
								alert("Problem")
							</script>
						<?php
				}
	}
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
		.products table{
			margin-top: 150px;
		}
		.add_product{
			background-color: green;
		}
	</style>
</head>
<body>
		<div class="products">
			<div class="wrapper">
			<center><table  cellpadding="25" cellspacing="25">
				<tr>
					<th>Sr. No.</th>
					<th>Image</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Description</th>
				</tr>
				<tr>
					<form class="add_product" method="post" enctype='multipart/form-data'>
						<td></td>
						<td><input type="file" name="product_image" required></td>
						<td><input type="text" name="name" required=""></td>
						<td><input type="text" name="price" required=""></td>
						<td><input type="number" name="quantity" min="1" max="100"></td>
						<td><textarea name="description" cols="18" rows="2"></textarea></td>
						<td><input type="submit" name="submit" value="add"></td>
					</form>
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
				</tr>
				<?php 
						$count++;
						}
					}
				?>
			</table>
		</div></center>
		</div>
</body>
</html>