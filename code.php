<?php
session_start();
	if(isset($_POST['btn_submit']))
	{
		
	
		
		
		
				$name = $_POST['custname'];
				$address = $_POST['custaddress'];
				$mobileno =$_POST['custmobno'];
				$extrabed = $_POST['extrabed'];	
				$roomid = $_SESSION['roomno'];
				$roomtype = $_SESSION['roomtype'];
				
				/*$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
				$checkindate =  $date->format('Y-d-m h:i:s');*/
				$checkindate =$_POST['checkin'];
				
				
				$query1 = "insert into tbl_customer(cust_name,cust_tel,cust_address,room_id,checkin,status,extra_bed) values('$name','$mobileno','$address','$roomid','$checkindate','true','$extrabed')" ;
				$query2 = "update tbl_room set room_status='true' where room_id='$roomid'";
				
				$result = mysqli_query($con,$query1);
				$result1 = mysqli_query($con,$query2);
				
				if($result && $result1)
				{echo"sdsd";
					header('location:index.php');
				}
				else
				{
					echo"sdsd1";
				}
		
		
	}

?>