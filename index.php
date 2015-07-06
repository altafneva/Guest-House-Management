<?php include("config.php");?>
	<!DOCTYPE html>
<html lang="en">
  
  <html>
<head>
    <meta charset="UTF-8">
    <title>VIEW All</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
	<!-- header style-->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />


   
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                Sabar Guest House
            </a>
            <!-- Header Navbar: style can be found in header.less -->
				
        </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                           
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                           <ul class="sidebar-menu">
							<li class="active">
                            <a href="index.php">
                                <i class="fa fa-glass"></i> <span>Room Status</span>
                            </a>
                        </li>
                                
                        <li >
                            <a href="Viewallcustomer.php">
                                <i class="fa fa-gavel"></i> <span>Customer Details</span>
                            </a>
                        </li>

                        <li>
                            <a href="checkout.php">
                                <i class="fa fa-globe"></i> <span>Check Out</span>
                            </a>
                        </li>
						<li>
                            <a href="roomdetails.php">
                                <i class="fa fa-dashboard"></i> <span>View All</span>
                            </a>
                        </li>
                        


                            </ul>
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
                <section class="content">

                    <div class="row" style="margin-bottom:5px;">


                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
                                <div class="sm-st-info">
                                    <span><?php if($con){ 
									
									$query = "select * from tbl_room where room_status='false'";
									$result = mysqli_query($con,$query);
										if($result)
										{$counter=0;
											while($row = mysqli_fetch_array($result))
											{
												$counter++;
											}
										}
										echo "$counter";
									} ?></span>
                                    Rooms Avalable 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                                <div class="sm-st-info">
                                    <span><?php if($con){ 
									
									$query = "select * from tbl_room where room_status='true'";
									$result = mysqli_query($con,$query);
										if($result)
										{$counter=0;
											while($row = mysqli_fetch_array($result))
											{
												$counter++;
											}
										}
										echo "$counter";
									} ?></span>
                                    Occupied Rooms 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                                <div class="sm-st-info">
                                    <span>0</span>
                                    Maintainence 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                                <div class="sm-st-info">
                                    <span>5</span>
                                    Total Rooms
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main row -->
                    <div class="row">

                        <div class="col-md-8">
                            <!--earning graph start-->
                          <!--  <section class="panel">
                                <header class="panel-heading">
                                    Earning Graph
                                </header>
                                <div class="panel-body">
                                    <canvas id="linechart" width="600" height="330"></canvas>
                                </div>
                                        </section>-->
                                        <!--earning graph end-->

									</div>
                                    <div class="col-lg-4">

 

									</div>


								</div>
                    <div class="row">

                        <div class="col-md-9">
                            <section class="panel">
                              <header class="panel-heading">
                                  Room Status...
                            </header>
                            <div class="panel-body table-responsive">
							 
				<?php

				
				//$result = mysql_query("SELECT * FROM tbl_room where room_type='NON-AC'");
				$result1 = mysqli_query($con,"SELECT * FROM tbl_room ");
				if($result1)
				{
				
					while($row = mysqli_fetch_array($result1))
					{
						if($row['room_status'] == 'true')
						{
							?>
							<div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                                <div class="sm-st-info">
                                    <span><?php echo $row['room_no']; echo $row['room_type'];?></span>
                                    
                                </div>
                            </div>
							</div>
						
							<?php
						}
						
						if($row['room_status'] == 'false')
						{
							?>
							
						
                            <div class="room_box">
							</div>
                        
						 <!--<div class="sm-st clearfix">
                                 <span class="sm-st-icon st-red"><span style="font-size:18px;"><a href="customer.php?roomno=<?php// echo $row['room_id']; ?>&roomtype=<?php// echo $row['room_type'] ?>"><?php// echo $row['room_no']; echo $row['room_type'];?></a></th>
								 </span></span>
                                 
							    <div class="sm-st-info">
							   
                                     </div>
                             </div> -->
						
									
							<?php
						}
						
						
						
						
					}
						
				}
				
				
		

?>


	
	</body>

                  </div>
              </section>


          </div>
		
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                          
                </section><!-- /.content -->
                <div class="footer-main">
                    Developed By Hidden Tesla PVT .LTD, 2015
                </div>
            </aside><!-- /.right-side -->

        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
       <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>

 
	</html>