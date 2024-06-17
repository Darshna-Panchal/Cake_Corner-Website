<?php 

	require "header.php";
	include "include/check_session.php";

	$pr_id=$_REQUEST['pr_id'];
	$delete="delete from product where `pr_id`='$pr_id'";
	if(mysqli_query($con,$delete))
	{
		header("location:products.php");
	}
	else
	?>
	<script type="text/javascript">
		alert("This Product is not deleted!!");
		window.location="products.php";
	</script>
	<?php


?>