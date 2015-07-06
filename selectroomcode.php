
<?php
session_start();
	if(isset($_POST['btn_update']))
	{
		
	
		
		$con = mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("hotel",$con);
				$room_no = $_POST['roomno'];
				$room_type = $_POST['roomtype'];
				$room_status =$_POST['roomstatus'];
				;
				
				$id = $_SESSION['id'];
				$query = "UPDATE tbl_room SET room_no='$room_no' , room_type='$room_type' , room_status='$room_status' WHERE room_id = '$id' ";
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