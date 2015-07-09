<?php
	
	include "config.php";
		if($_GET['id'])
		{
			$id = $_GET['id'];
			$query = "DELETE FROM tbl_customer where cust_id = $id";
				$result = mysqli_query($con,$query) OR die("".mysqli_error());
				
				if($result)
				{
					header('location:viewallcustomer.php');
				}
				else
				{
					
				}
		}
	
?>