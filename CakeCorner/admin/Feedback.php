<?php 
	require "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Feedbacks</title>
</head>
<body>
		<center><div class="feedback">
			<table cellpadding="25" cellspacing="25">
				<tr>
					<th>Sr. No.</th>
					<th>Name</th>
					<th>Email-id</th>
					<th>Contact_No</th>
					<th>Address</th>
					<th>Subject</th>
					<th>Message</th>
				</tr>
				<?php
					$count=1;
					$select="select * from feedback";
					if($result=mysqli_query($con,$select))
					{
						while($row=mysqli_fetch_assoc($result))
						{	
							$cust_id=$row['cust_id'];
							$select1="select * from customer where `cust_id`='$cust_id'";
							$result1=mysqli_query($con,$select1);
							$row1=mysqli_fetch_assoc($result1);
				?>
				<tr>
					<td class="headingSerialNo"><?php echo $count; ?></td>
					<td><?php echo $row1['name']?></td>
					<td><?php echo $row1['email_id']?></td>
					<td><?php echo $row1['contact_no']?></td>
					<td><?php echo $row1['address']?></td>
					<td><?php echo $row['subject']?></td>
					<td><?php echo $row['message']?></td>
					<td>
        					<form method="post" action="Delete_Feedback.php">
        						<input name='f_id' value="<?php echo $row['f_id']?>" hidden>
                				<input type="submit" name="delete"  value="Delete" class="btn2">
            				</form>
        			</td>
				</tr>
				<?php 
						$count++;
						}
					}
				?>
			</table>
		</div></center>
</body>
</html>