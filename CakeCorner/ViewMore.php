<?php 
  require "New_header.php";
  include "include/check_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		.ViewMore{
			display: flex;
		}
		.ViewMore .image img{
			width: 330px;
			height: 250px;
			border-radius: 5px;
		}
		.ViewMore .right{
			margin: 0px 60px;
			font-family: arial;
			font-size: 18px;
			word-spacing: 3px;
			letter-spacing: 1px;
			font-weight: bolder;
		}
		.ViewMore .right form input[type="number"],input[type="text"],input[type="file"]{
			border: 1px solid rgb(0,157,225);
			font-family: arial;
			font-size: 17px;
			word-spacing: 4px;
			letter-spacing: 1px;
			border-radius: 2px;
		}
		.ViewMore .right form fieldset{
			padding: 10px 5px;
			border: 1px solid white;
			font-weight: normal;
			border-radius: 5px;
			font-size: 17px;
		}
		.ViewMore .right form input[type="submit"]{
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
		.ViewMore .right form input[type="submit"]:hover{
		background-color: white;
    border: 2px solid green;
    box-shadow: 3px 3px 3px white;
    color: black;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="ViewMore">
			<?php
					$pr_id=$_REQUEST['pr_id'];
					$select="select * from product where `pr_id`='$pr_id'";
								if($result=mysqli_query($con,$select))
								{
										while($row=mysqli_fetch_assoc($result))
										{

			?>
			<div class="image">
				<img src="<?php echo $row['image'] ?>">
			</div>
			<div class="right">
			<br>Name : <?php echo $row['name']; ?><br><br>
			Price : <?php echo $row['price']; ?><br><br>
			<?php echo $row['description'] ?><br><br>

			<form action="cart1.php" method="post" enctype='multipart/form-data'>
				
				<input type="text" name="pr_id" value="<?php echo $pr_id ?>" hidden>
				<input type="text" name="price" value=" <?php echo $row['price']; ?>" hidden>
				Qty : <input type="number" name="qty" value="1" min="1" max="25"><br><br>

				<fieldset>
					<legend>Optional</legend>
					<br>Display Name: <input type="text" name="displayname"><br><br>
					Display Image: <input type="file" name="image" ><br><br>
				</fieldset>
				<br><input type="submit" name="submit" value="Add to cart">
			</form>

		</div>
		</div>	
	</div>
	<?php
			}
		}
	?>
</body>
</html>