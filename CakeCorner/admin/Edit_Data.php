<?php 
	include "include/connect.php";

	if(isset ($_REQUEST['submit']))
         {
         	$cust_id=$_REQUEST['cust_id'];
			$name=$_REQUEST['name'];
			$address=$_REQUEST['address'];
			$pincode=$_REQUEST['pincode'];
			$contact_no=$_REQUEST['contact_no'];
			$email_id=$_REQUEST['email_id'];
            $sql="UPDATE customer SET `name`='$name',`address`='$address',`pincode`='$pincode',`contact_no`='$contact_no',`email_id`='$email_id' WHERE `cust_id`='$cust_id'";

            if(mysqli_query($con,$sql)){
                 include("customer.php");
            }
            else{
                 echo "Somthing Wrong";
            }
         }

?>