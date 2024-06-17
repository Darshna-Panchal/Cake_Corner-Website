 <?php 
	include "New_header.php";
 	include "include/check_session.php";

    $image_name=$_FILES['image']['name'];
    $tmp=$_FILES['image']['tmp_name'];
    $display_image="DisplayImages/".$image_name;

    if(move_uploaded_file($tmp,"DisplayImages/".$image_name))
    {
            echo "upload";
    }

 	$pr_id=$_REQUEST['pr_id'];
 	$qty=$_REQUEST['qty'];
 	$price=$_REQUEST['price'];
 	$total_price=$price*$qty;
    $display_name=$_REQUEST['displayname'];


 	$insert="insert into cart (`quantity`,`total_price`,`cust_id`,`pr_id`,`Display_Name`,`image_name`,`Display_Image`) values($qty,$total_price,$cust_id,$pr_id,'$display_name','$image_name','$display_image')";
 	if(mysqli_query($con,$insert))
 	{
 		?>
            	<script type="text/javascript">
            		alert("Product added to cart");
            		window.location="New_products.php";
            	</script>
            <?php
 	}
 	else
 	{
 		"problem";
 	}

?>