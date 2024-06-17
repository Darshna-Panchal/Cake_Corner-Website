<?php 

	require "header.php";
	include "include/check_session.php";

	$f_id=$_REQUEST['f_id'];
	$delete="delete from feedback where `f_id`='$f_id'";
	if(mysqli_query($con,$delete))
	{
		header("location:Feedback.php");
	}
	else
	?>
	<script type="text/javascript">
		alert("This Record is not deleted!!");
		window.location="Feedback.php";
	</script>
	<?php


?>