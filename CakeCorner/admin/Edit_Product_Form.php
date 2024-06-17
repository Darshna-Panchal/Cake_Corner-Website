<?php 
	require "header.php";
	include "include/check_session.php";

		$pr_id=$_REQUEST['pr_id'];
		$name=$_REQUEST['name'];
		$price=$_REQUEST['price'];
		$quantity=$_REQUEST['quantity'];
		$description=$_REQUEST['description'];
		$image_name=$_REQUEST['image_name'];
		$image="images/".$image_name;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.edit_data form table tr td img{
			width: 150px;
			height: 120px;
			border-radius: 8px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="edit_data">
			<center><form method="post" action="Edit_Product.php">
				<h2>Edit Data</h2>
				<table cellpadding="25px" cellspacing="25px">
					<tr>
						<td>Product Name <br><input type="text" name="name" value="<?php echo "$name"?>" required="">
						<input type="text" name="pr_id" value="<?php echo "$pr_id"?>" hidden=""></td>
						<td>Price<br><input type="text" name="price" value="<?php echo "$price"?>" required=""></td>
					</tr>
					<tr>
						<td>Quantity<br><input type="number" name="quantity" value="<?php echo "$quantity"?>" required=""></td>
						<td>Description<br><input type="text" name="description" value="<?php echo "$description"?>"></td>
					</tr>
					<tr>
						<td><?php echo "$image_name"  ?><br><img src="<?php echo "$image" ?>"></td>
						<center><td>Image<br><input type="file" name="image" value="<?php echo "$image" ?>"></td></center>
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