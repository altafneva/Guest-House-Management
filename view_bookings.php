<?php
include('config.php');
$query_selectBook = "SELECT *,booking.checkin AS checkin, booking.checkout AS checkout FROM booking,tbl_customer,tbl_room WHERE booking.cust_id = tbl_customer.cust_id AND booking.room_id = tbl_room.room_id";
$result_selectBook = mysqli_query($con,$query_selectBook);

?>
<table border="1" cellpadding="10">
	<tr>
		<td> Booking ID </td>
		<td> Customer Name </td>
		<td> Customer Mobile </td>
		<td> Room </td>
		<td> Check In </td>
		<td> Check Out </td>
	</tr>
<?php
while($row_selectBook = mysqli_fetch_array($result_selectBook)){ ?>
	<tr>
		<td> <?php echo $row_selectBook['booking_id']; ?> </td>
		<td> <?php echo $row_selectBook['cust_name']; ?> </td>
		<td> <?php echo $row_selectBook['cust_tel']; ?> </td>
		<td> <?php echo $row_selectBook['room_no']." - ".$row_selectBook['room_type']." - ".$row_selectBook['bed_type']; ?> </td>
		<td> <?php echo date('j-F-Y, g:i A',strtotime($row_selectBook['checkin'])); ?> </td>
		<td> <?php echo date('j-F-Y, g:i A',strtotime($row_selectBook['checkout'])); ?> </td>
	</tr>
<?php
}
?>
</table>