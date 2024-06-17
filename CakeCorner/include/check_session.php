<?php 
  session_start();
  $cust_id=$_SESSION['cust_id'];
  if(!isset($_SESSION['cust_id']))
  {
    echo "You are logged out";
    header("location:login.php");
  }
?>
