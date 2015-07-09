<?php
include("config.php");

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$custname = $custaddress = $custmobno = $room = $checkin = $checkout = "";
		if(empty($_POST['custname'])){
			echo "customer name is empty";
		}
		else {
			$custname = $_POST['custname'];
		}
		$custaddress = $_POST['custaddress'];
		if(empty($_POST['custmobno'])) {
			echo "customer mobile is empty";
		}
		else {
			$custmobno = $_POST['custmobno'];
		}
		if(!empty($_POST['cmbRoom'])) {
			$room = $_POST['cmbRoom'];
		}
		if(!empty($_POST['checkin'])) {
			$checkin = $_POST['checkin'];
		}
		else {
			echo "No check in date selected";
		}
		if(!empty($_POST['checkout'])) {
			$checkout = $_POST['checkout'];
		}
		else {
			echo "No check out date selected";
		}
		
		if(!$custname && !$custmobno && !$room && !$checkin && !$checkout) {
			echo "All feilds except address are required";
		}
		else {
			$query_insertCust= "INSERT into tbl_customer(cust_name,cust_tel,cust_address) VALUES('$custname','$custmobno','$custaddress')";
			if(mysqli_query($con,$query_insertCust)) {
				$cust_id = mysqli_insert_id($con); //This function will fetch the id of above entered customer.
				$query_insertBook = "INSERT into booking(cust_id,room_id,checkin,checkout) VALUES('$cust_id',$room,'$checkin','$checkout')";
				if(mysqli_query($con,$query_insertBook)) {
					echo "Record inserted successfully";
				}
				else {
					echo "There was some issue inserting in booking table";
				}
			}
			else {
				echo "There was some issue inserting customer";
			}
		}
		
	}
	else {
		echo "wrong place for you";
	}

?>