
<?php
session_start();
	if(isset($_POST['btn_update']))
	{
		
	
		
		$con = mysql_connect("localhost","root","");
		if($con)
		{
			mysql_select_db("hotel",$con);
				$name = $_POST['custname'];
				$address = $_POST['custaddress'];
				$mobileno =$_POST['custmobno'];
				$checkin = $_POST['checkin'];
				$checkout = $_POST['checkout'];
				
				$id = $_SESSION['id'];
				$query = "UPDATE tbl_customer SET cust_name='$name' , cust_address='$address' , cust_tel='$mobileno' , checkin ='$checkin',checkout = '$checkout' WHERE cust_id = '$id' ";
				$result = mysql_query($query) OR die("".mysql_error());
				
				if($result)
				{
					header('location:viewallcustomer.php');
				}
				else
				{
					
				}
		}
		
	}

?>