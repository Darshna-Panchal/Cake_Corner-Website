<?php 

	require "header.php";
	include "include/check_session.php";

	$cust_id=$_REQUEST['cust_id'];
	$delete="delete from `customer` where `cust_id`='$cust_id'";
	if(mysqli_query($con,$delete))
	{
		header("location:customer.php");
	}
	else
		?>
	<script type="text/javascript">
		alert("This Record is not deleted!!")
		window.location="customer.php";

	</script>
	<?php
?>