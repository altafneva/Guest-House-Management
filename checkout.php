<?php
	include("includes/config.php");
		$query = 	"SELECT *
					FROM tbl_room
					INNER JOIN tbl_customer
					ON tbl_room.room_id=tbl_customer.room_id
					where room_status='true' && status = 'true'";
		$result = mysqli_query($con,$query);
		if($result)
		{
			?>
			
				<table border='1'>
					<tr>
						<td>Customer ID</td>
						<td>Customer Name</td>
						<td>Customer Telephone No</td>
						<td>Customer Address</td>
						<td>Room No</td>
						<td>Room Type</td>	
						<td></td>
					</tr>
					<?php
					
					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>";
								echo $row['cust_id'];
						echo "</td>";
						echo "<td>";
								echo $row['cust_name'];
						echo "</td>";
						echo "<td>";
								echo $row['cust_tel'];
						echo "</td>";
						echo "<td>";
								echo $row['cust_address'];
						echo "</td>";
						echo "<td>";
								echo $row['room_no'];
						echo "</td>";
						echo "<td>";
								echo $row['room_type'];
						echo "</td>";
						echo "<td>";
								?><a href="checkoutcode.php?id=<?php echo $row['room_no']; ?>&custid=<?php echo $row['cust_id']; ?>">Checkout</a><?php
						echo "</td>";
						echo "</tr>";
					}
					?>
				</table>
			
			<?php
			
		}
		else
		{
			echo 'sds';
		}
	

?>