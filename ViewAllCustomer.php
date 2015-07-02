<?php

	$con = mysql_connect("localhost","root","");
	if($con)
	{
		mysql_select_db("hotel",$con);
		$query = 	"SELECT *
					FROM tbl_room
					INNER JOIN tbl_customer
					ON tbl_room.room_id=tbl_customer.room_id
					ORDER BY cust_id"
					;
		$result = mysql_query($query);
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
						<td>Check In</td>
						<td>Check Out</td>	
						
					</tr>
					<?php
					
					while($row = mysql_fetch_array($result))
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
								echo $row['checkin'];
						echo "</td>";
						echo "<td>";
								echo $row['checkout'];
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
	}

?>