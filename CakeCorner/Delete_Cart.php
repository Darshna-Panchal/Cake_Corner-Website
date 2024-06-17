<?php 

	require "New_header.php";
	include "include/check_session.php";

	$cart_id=$_REQUEST['cart_id'];
	$delete="delete from cart where `cart_id`='$cart_id'";
	if(mysqli_query($con,$delete))
	{
		header("location:cart.php");
	}
	else
	{
		echo "This record is not deleted";
	}


?>