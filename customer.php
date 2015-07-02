<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="code.php" method="POST">
			<table>
				<tr>
					<td>Customer Name:</td>
					<td><input type="text" name="custname" placeholder="Customer Name"/></td>
				</tr>
				<tr>
					<td>Customer Address:</td>
					<td><input type="text" name="custaddress" placeholder="Customer Address"/></td>
				</tr>
				<tr>
					<td>Customer Mobile no:</td>
					<td><input type="text" name="custmobno" placeholder="Customer Telephone"/></td>
				</tr>
					
				<tr>
					<td colspan=2>
						<input type="Submit" name="btn_submit" value="Submit"/> 	
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>
<?php
	session_start();
	if(isset($_GET['roomtype'])) 
	{
		
		$room_no = $_GET['roomno'];
		$room_type = $_GET['roomtype'];
		
		
		
		$_SESSION['roomno'] = $room_no;
		$_SESSION['roomtype'] = $room_type;
		
	
	}

?>