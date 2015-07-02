<?php

	if(isset($_GET['id']))
	{
		$con = mysql_connect("localhost","root","");
		if($con)
		{
			$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
			$checkoutdate =  $date->format('Y-d-m h:i:s');
			mysql_select_db("hotel",$con);
			$roomid = $_GET['id'];
			$custid = $_GET['custid'];
			$query = "UPDATE tbl_room SET room_status = 'false' where room_id = '$roomid'";
			$query1 = 	"UPDATE tbl_customer SET checkout = '$checkoutdate',status = 'false' where cust_id  = '$custid'";
			
			$result = mysql_query($query);
			$result1 = mysql_query($query1) OR die("".mysql_error());
			
			if($result && $result1)
			{echo"hg";
				header('Location:index.php');
			}
			else
			{
			echo"hg12";	
			}
		
		}
		
	}
	
?>