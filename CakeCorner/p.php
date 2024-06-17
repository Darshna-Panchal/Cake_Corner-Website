<?php 
	require "header.php";
	include "include/check_session.php";
?>
<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title></title>
				<style type="text/css">
					.products{
						margin-top: 100px;

					}
					.product{
						background-color: rgb(0, 157, 225);
						border-radius: 5px;
					}
					.product table{
						margin-top: 10px;
					}
					.product table tr td img{
						width: 290px;
						height: 250px;
						border-radius: 5px;
						margin: 20px 150px;
					}
					.product tr .description{
						font-size: 15px;
						padding: 4px 50px;
						font-weight: bold;
						font-family: arial;
						letter-spacing: 1px;
						word-spacing: 2px;
						font-size: 20px;
						line-height: 30px;
					}
					.product table tr td a{
						display: inline-block;
						text-decoration: none;
						border: 2px solid white;
						border-radius: 5px;
						background-color: green;
						font-size: 18px;
						padding: 5px 12px;
						letter-spacing: 1px;
						text-transform: uppercase;
						font-weight: bold;
						color: white;
						margin-top: 12px;
						box-shadow: 3px 3px 3px black;
						font-family: arial;
					}
				</style>
			</head>
			<body>
				<div class="products"></div>
	<?php

		$select="select * from product";
		if($result=mysqli_query($con,$select))
		{
			while ($row=mysqli_fetch_assoc($result)) {
	?>

			<div class="wrapper">	
					<div class="product">
					<table>
						<tr>
							<td><img src="<?php echo $row['image'] ?>"></td>
							<td class="description"><?php echo $row['name']?><br>
							Price : <?php echo $row['price']?><br>
							Quantity : <?php echo $row['quantity']?><br>
							<a href="Cart.php">Add to Cart</a></td>
						</tr>
					</table>
				</div>
			</div>
			</body>
			</html>
			<?php
		}
	}
?>