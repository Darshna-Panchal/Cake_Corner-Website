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
     
     $p_name=$_REQUEST['product_name'];
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
	<title></title>
</head>
<body>
	<div class="wrapper">    
        <center>
        <form action="" method="post" enctype='multipart/form-data'>
            <h3>Add Product Form</h3>
            <table cellpadding="25px" cellspacing="25px">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="product_name"></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" ></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="text" name="quantity" ></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><textarea name="description" cols="5" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="product_image" ></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="ADD" ></td>
                </tr>
            </table>
        </form>
        </center>
    </div>
</body>
</html>