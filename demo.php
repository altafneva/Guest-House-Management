<?php
include "index.php";
	$con = mysql_connect("localhost","root","");
		if($con)
		{
				mysql_select_db("hotel",$con);
				$result = mysql_query("SELECT * FROM tbl_room where room_type='NON-AC'");
				$result1 = mysql_query("SELECT * FROM tbl_room where room_type='AC'");
				if($result1)
				{
				
					while($row = mysql_fetch_array($result1))
					{
						if($row['room_status'] == 'true')
						{
							?>
							<table cellspacing="10" width="100" height="100" >
									<tr bgcolor="red" >
										<th><?php echo $row['room_no'] ?></th>
									</tr>
							</table>
									
							<?php
						}
						
						if($row['room_status'] == 'false')
						{
							?>
							<table cellspacing="10" width="100" height="100" >
									<tr bgcolor="blue">
										<th><a href="customer.php?roomno=<?php echo $row['room_no']; ?>&roomtype=<?php echo $row['room_type'] ?>" rel="flashfg[Green]"><?php echo $row['room_no']; ?></a></th>
									</tr>
							</table>
									
							<?php
						}
						
						
						
						
					}
						
				}
				if($result)
				{
				
					while($row = mysql_fetch_array($result))
					{
						if($row['room_status'] == 'true')
						{
							?>
							<table cellspacing="10"  width="100" height="100" >
									<tr bgcolor="red">
										<th><?php echo $row['room_no'] ?></th>
									</tr>
							</table>
									
							<?php
						}
						
						if($row['room_status'] == 'false')
						{
							?>
							<table cellspacing="10" width="100" height="100" >
									<tr bgcolor="Blue" >
										<th><a href="customer.php?roomno=<?php echo $row['room_no']; ?>&roomtype=<?php echo $row['room_type'] ?>" rel="flashfg[blue]"><?php echo $row['room_no']; ?></a></th>
									</tr>
							</table>
									
							<?php
						}
						
						
						
						
					}
						
				}
				
		}

?>