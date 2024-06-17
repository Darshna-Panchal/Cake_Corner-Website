<?php 
	require "header.php";
	include "include/check_session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Customers</title>
</head>
<body>
		<center><div class="customers">
			<table  cellpadding="25" cellspacing="25">
				<tr>
					<th>Sr. No.</th>
					<th>Name</th>
					<th>Address</th>
					<th>Pincode</th>
					<th>Contact_No</th>
					<th>Email-id</th>
				</tr>
				<?php
					$count=1;
					$select="select * from customer";
					if($result=mysqli_query($con,$select))
					{
						while($row=mysqli_fetch_assoc($result))
						{
				?>
				<tr>
					<td class="headingSerialNo"><?php echo $count; ?></td>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['address']?></td>
					<td><?php echo $row['pincode']?></td>
					<td><?php echo $row['contact_no']?></td>
					<td><?php echo $row['email_id']?></td>
					<td>
        					<form method="post" action="Delete_Customer.php">
        						<input name='cust_id' value="<?php echo $row['cust_id']?>" hidden>
                				<button type="submit" name="delete" value="delete" class="btn2">Delete</button>
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
