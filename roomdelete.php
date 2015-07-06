<?php
	include"config.php";
	if($con)
	{
		if($_GET['id'])
		{
			$id = $_GET['id'];
			$query = "DELETE FROM tbl_room where room_id = $id";
				$result = mysql_query($query) OR die("".mysql_error());
				
				if($result)
				{
					header('location:roomdetails.php');
				}
				else
				{
					
				}
		}
	}

?>