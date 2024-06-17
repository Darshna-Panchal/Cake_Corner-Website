<?php
require "include/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" />
    <style type="text/css">
        .logout{
            display: inline-block;
            text-decoration: none;
            background-color: green;
            text-align: center;
            padding: 5px 5x;
            border-radius: 8px;
            border: 2px solid white;
            color: white;
            font-size: 10px;
            font-family: arial;
            word-spacing: 2px;
            letter-spacing: 1px;
            font-weight: bolder;
        }
    </style>    
</head>
<body>
    <div class="Header">
            <div class="Heading">
                <h1>ADMIN PANEL</h1>
            </div>
            <hr>
            <div class="menu">
                <div class="wrapper">
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="Customer.php">Customer</a></li>
                    <li><a href="Products.php">Products</a></li>
                    <li><a href="o.php">Orders</a></li>
                    <!-- <li><a href="Payment.php">Payment</a></li> -->
                    <li><a href="Feedback.php">Feedback</a></li>
                    <li><a href="Logout.php" class="logout">Logout</a></li>
                </ul>
            </div>
            </div>
            <div class="clear"></div>
     </div>
</body>
</html>