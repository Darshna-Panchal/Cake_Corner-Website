<?php

    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
			.dashboard{
				margin-top: 40px;
			}

      .dashboard .info{
        margin-top: 70px;
        background-color:rgb(0,157,225) ;
        display: inline-block;
        border-radius: 5px;
        padding: 40px 40px;
        font-size: 20px;
        letter-spacing: 1px;
        word-spacing: 5px;
        font-weight: bold;
        font-family: arial;
        text-transform: uppercase;

      }
     
              .dashboard .welcome{
                margin-top: 70px;
              display: inline-block;
              background-color: rgb(0,157,225);
              padding: 10px 10px;
              border-radius: 5px;
              position: relative;
              animation: welcome 60s infinite linear;
              /*animation-iteration-count: infinite;*/
            }

          @keyframes welcome {
              0%   {left:0px; top:0px;}
              25%  {left:390px; top:0px;}
              50%  {left:780px; top:0px;}
              75%  {left:390px; top:0px;}
              100% {left:0px; top:0px;}
          }
          </style>
</head>
<body>
	<div class="wrapper">
		<div class="dashboard">
			<div class="welcome">
				<h2>Welcome Admin</h2>
			</div>

      <center><div class="info">
        <table cellpadding="28px" cellspacing="28px">
          <tr>
            <td>Total Customers</td>
            <td></td>
            <td>
                <?php 
                    $s="Select * from customer";
                    $r=mysqli_query($con,$s);

                    if($data=mysqli_num_rows($r))
                    {
                      echo $data;
                    } 
                    else
                    {
                      echo "No Data";
                    } 
                ?>
            </td>
          </tr>
          <tr>
            <td>Total Products</td>
            <td></td>
            <td>
                <?php 
                    $s1="Select * from product";
                    $r1=mysqli_query($con,$s1);

                    if($data1=mysqli_num_rows($r1))
                    {
                      echo $data1;
                    } 
                    else
                    {
                      echo "No Data";
                    } 
                ?>
            </td>
          </tr>
         <tr>
            <td>Total orders</td>
            <td></td>
            <td>
                <?php 
                    $s2="Select * from `order`";
                    $r2=mysqli_query($con,$s2);

                    if($data2=mysqli_num_rows($r2))
                    {
                      echo $data2;
                    } 
                    else
                    {
                      echo "No Data";
                    } 
                ?>
            </td>
          </tr>
          <tr>
            <td>Total feedbacks</td>
            <td></td>
            <td>
                <?php 
                    $s3="Select * from feedback";
                    $r3=mysqli_query($con,$s3);

                    if($data3=mysqli_num_rows($r3))
                    {
                      echo $data3;
                    } 
                    else
                    {
                      echo "No Data";
                    } 
                ?>
            </td>
          </tr>
        </table>
      </div>	</center>	
		</div>	
	</div>
</body>
</html>

