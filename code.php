<?php
session_start();
	if(isset($_POST['btn_submit']))
	{
		
	
		
		$con = mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("hotel",$con);
				$name = $_POST['custname'];
				$address = $_POST['custaddress'];
				$mobileno =$_POST['custmobno'];
				$roomid = $_SESSION['roomno'];
				$roomtype = $_SESSION['roomtype'];
				/*$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$checkindate =  $date->format('Y-d-m h:i:s');*/
				$checkindate =$_POST['checkin'];
				
				
				$query1 = "insert into tbl_customer(cust_name,cust_tel,cust_address,room_id,checkin,status) values('$name','$mobileno','$address','$roomid','$checkindate','true')" ;
				$query2 = "update tbl_room set room_status='true' where room_id='$roomid'";
				
				$result = mysql_query($query1) OR die("".mysql_error());
				$result1 = mysql_query($query2);
				
				if($result && $result1)
				{echo"sdsd";
					header('location:index.php');
				}
				else
				{
					echo"sdsd1";
				}
		}
		
	}

?>