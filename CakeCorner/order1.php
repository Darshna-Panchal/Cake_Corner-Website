<?php 
	include "New_header.php";
 	include "include/check_session.php";

 		
 	if(isset($_REQUEST['submit']))
	{
		$ord_date=date('d-m-y');
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$contact=$_REQUEST['contact'];
        $address=$_REQUEST['address'];
		$pincode=$_REQUEST['pincode'];
		$type=$_REQUEST['payment'];
		$count=$_REQUEST['count'];

		$insert="INSERT INTO `order` (`ord_id`, `payment_type`, `name`, `email`, `contact`, `address`, `pincode`, `cust_id`,`products`) VALUES (NULL, '$type', '$name', '$email', '$contact', '$address', '$pincode', '$cust_id','$count');";

		if(mysqli_query($con,$insert))
		{
				 
				 header("location:Bill_Detail.php");

		}
		else
		{
				?>
					<script type="text/javascript">
						alert("Problem");
					</script>
				<?php
		}	
	}	

?>