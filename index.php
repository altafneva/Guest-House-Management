<?php
	include("includes/config.php");
?>
	<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="ViewAllCustomer.php">
                    View ALL Customer 
                </a>
				  <a href="checkout.php">
                   CheckOut
                </a>
                <span class="right">
                    <a href="#">
                        <strong>Logout</strong>
                    </a>
                </span>
            </div><!--/ Codrops top bar -->
			
			<header>
			
				<h1>SABAR <strong>Guest House Management</strong> Software</h1>
				<h2>Your success is our highest calling.</h2>
				
				

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form class="form-1">
					<p class="field">
							<?php		
				$result1 = mysqli_query($con,"SELECT * FROM tbl_room where room_status = 'false' && room_type='AC' ");
				$result2 = mysqli_query($con,"SELECT * FROM tbl_room where room_status = 'false' && room_type='NON-AC' ");
				
				?>
					<table border='1'>
						<tr colspan="2">
							<td>AC</td>
						</tr>
						<tr>
							<td>Room No</td>
						</tr>
						
							
								<?php
									while($row = mysqli_fetch_array($result1))
										
									{
										?><tr><td><?php
										?><a href="customer.php?roomno=<?php echo $row['room_no']; ?>&roomtype=<?php echo $row['room_type'] ?>"><?php echo $row['room_no']; ?></a><?php
									?></td></tr><?php
									}
									
								?>
							
						
						
						
					</table>
					
					<br/>
					<br/>
					
					<table border='1'>
						<tr colspan="2">
							<td>NON-AC</td>
						</tr>
						<tr>
							<td>Room No</td>
						</tr>
						
							
								<?php
								
									while($row = mysqli_fetch_array($result2))
									{
										?><tr><td><?php
										?><a href="customer.php?roomno=<?php echo $row['room_no']; ?>&roomtype=<?php echo $row['room_type'] ?>"><?php echo $row['room_no']; ?></a><?php
										?></td></tr><?php
									}
								?>
							
						
						
						
					</table>
					</p>
				</form>
			</section>
        </div>
   

	
	</body>
</html>