<?php 
	include "New_header.php";
 	include "include/check_session.php";

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
 		$Dispaly_Image=$r1['Dispaly_Image']; 
 		
 		$insert="INSERT INTO `cart_history` (`cart_id`, `quantity`, `total_price`, `cust_id`, `pr_id`, `Display_Name`, `image_name`, `Display_Image`) VALUES (NULL, '$qty', '$totprice', '$cust', '$pr_id', '$Diaplay_name', '$image_name', '$Dispaly_Image');";

 		if(mysqli_query($con,$insert))
 		{
 			$delete="delete from cart where cust_id=$cust_id";
 			if(mysqli_query($con,$delete))
 			{
 				$s1="select * FROM `order` WHERE cust_id='$cust_id';";
 				$s2=mysqli_query($con,$s1);
 				while($s3=mysqli_fetch_assoc($s2))
 				{	

 					$type=$s3['payment_type'];
 					if($type=="COD")
 					{
 						?>
							<script type="text/javascript">
							alert("Your order will be delivered after 24 hours");
							window.location="Bill_Detail.php";
							</script>
						<?php
 					}
 					else
 					{
 						?>
							<script type="text/javascript">
							alert("Your order successfully placed");
							window.location="New_Products.php";
							</script>
						<?php
 					}
 				}		
 			}	
 		else
 		{
 			?>
					<script type="text/javascript">
						alert("Your");
						// window.location="New_Products.php";
					</script>
				<?php
 		}	 		
}
 	}	
 ?>	