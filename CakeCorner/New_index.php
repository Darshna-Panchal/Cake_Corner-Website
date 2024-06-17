<?php 
  include "New_header.php";
  include "include/check_session.php";

  if(isset($_SESSION['cust_id']))
  {
    $select="select * from customer where `cust_id`='$cust_id'";
    $row=mysqli_query($con,$select);
    $result=mysqli_fetch_assoc($row);
    $name=$result['name'];
    ?>
      <!DOCTYPE html>
      <html>
      <head>
          <meta charset="utf-8">
          <title>Home Page</title>
          <style type="text/css">
            .home .welcome{
              display: inline-block;
              background-color: rgb(0,157,225);
              padding: 10px 10px;
              border-radius: 5px;
              position: relative;
              margin-top: 65px;
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
              <div class="home">
                  <div class="welcome">
                    <h2>Welcome <?php echo $name; ?></h2>
                  </div>
                  <div class="banner1">
                      <img src="images/banner.jpg">
                  </div>

              </div>
          </div>
          <footer>CakeCorner@yahoo.com</footer>
      </body>
      </html> 
      <?php
  }
?>
