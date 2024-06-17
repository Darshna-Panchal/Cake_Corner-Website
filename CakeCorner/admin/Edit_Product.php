<?php 
	include "include/connect.php";

	if(isset ($_REQUEST['submit']))
         {
         		$pr_id=$_REQUEST['pr_id'];
			$name=$_REQUEST['name'];
			$price=$_REQUEST['price'];
			$quantity=$_REQUEST['quantity'];
			$description=$_REQUEST['description'];
			$image_name=$_REQUEST['image'];
			$image="images/".$image_name;
            $sql="UPDATE product SET `name`='$name',`price`='$price',`quantity`='$quantity',`description`='$description',`image_name`='$image_name',`image`='$image' WHERE `pr_id`='$pr_id'";

            if(mysqli_query($con,$sql)){
                 include("products.php");
            }
            else{
                 echo "Somthing Wrong";
            }
         }

?>