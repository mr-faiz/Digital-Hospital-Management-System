<?php 
	require 'connection.php';
	$sql="select * from tbl_roomfloorinfo";
	$res=$con->query($sql);
	$cnt=5;
	if($res)
	{
		while($row=$res->fetch_assoc())
		{
			$floor=$row["No_of_Floor"];
			$room_type=$row["RTId"];
			
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> Digital Hospital Management System </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
		
		<style>
			.avl
			{
			width: 100px;
			border: 2px solid green;
			height: 60px;
			text-align: center;
			font-weight: bold;
			margin: auto;
			padding: 10px;
			background-color:#97fd95;
			color:#3F51B5;
			}
			
			.avl:hover
			{
			width: 100px;
			border: 3px solid green;
			height: 60px;
			text-align: center;
			font-weight: bold;
			margin: auto;
			padding: 10px;
			background-color:#97fd95;
			color:#3F51B5;
			}
			
			.navl
			{
			width: 100px;
			border: 2px solid red;
			height: 60px;
			text-align: center;
			font-weight: bold;
			margin: auto;
			padding: 10px;
			background-color:#ff7b7b;
			color:white;
			}
			
			.navl:hover
			{
			width: 100px;
			border: 3px solid red;
			height: 60px;
			text-align: center;
			font-weight: bold;
			margin: auto;
			padding: 10px;
			background-color:#ff7b7b;
			color:white;
			}
			
			tr .a{
			margin:20px;
			}
		</style>
		
	</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
				<?php include 'AdminHeader.php'; ?>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <?php include 'AdminNavigation.php'; ?>
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="AdminDashboard.php">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Floor wise Room Allocation</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <h1 class="page-title"> Floor wise Room Allocation
                        </h1>
					
						<!-- BEGIN ROW CLASS -->
							<div class="row">
								<div class="col-xs-12">
									<table class="table table-hover">
										<thead>
											<tr>
												<td colspan="<?php echo $cnt+1;?>" align="center" ><h3 class="bg-primary text-white">FLOOR INFORMATION</h3></td>
											</tr>
											<tr class="a">
												<th><center>Room Type</center></th>
												<?php 
													for($i=1;$i<=$cnt;$i++)
													{
														if($i==1)
														{
															echo "<th><center>"."1st Floor"."</center></th>";
														}
														else if($i==2)
														{
															echo "<th><center>"."2nd Floor"."</center></th>";
														}
														else if($i==3)
														{
															echo "<th><center>"."3rd Floor"."</center></th>";
														}
														else
														{
														?>
														<th><center><?php echo $i;?>th Floor</center></th>
														<?php 
														}
													}
												?>
											</tr>
										</thead>	
										<tbody>	
											<?php
												$rt="select * from tbl_roomtype order by RTName";
												$result=$con->query($rt);
												if($result)
												{
													while($rw=$result->fetch_assoc())
													{
								
											?>
											<tr>
												<td align="center">
													<h4><?php echo $rw["RTName"]; ?></h4>
												</td>
											<?php
														$query1="select * from tbl_roomfloorinfo where RTId=".$rw['RTId']." order by No_of_Floor" ;
														$result1=$con->query($query1);
														$no_row=$result1->num_rows;
														if($no_row > 0)
														{
															while($row_data=$result1->fetch_assoc())
															{
																$f_data[]=$row_data;
															}
															$f1=$f2=$f3=$f4=$f5=0;
															foreach($f_data as $key=>$val)
															{
																if($val['No_of_Floor']=="1")
																{
																	$f1=1;
																}
																if($val['No_of_Floor']=="2")
																{
																	$f2=1;
																}
																if($val['No_of_Floor']=="3")
																{
																	$f3=1;
																}
																if($val['No_of_Floor']=="4")
																{
																	$f4=1;
																}
																if($val['No_of_Floor']=="5")
																{
																	$f5=1;
																}
															}
															unset($f_data);
															if($f1=="1")
															{
																echo "<td><div class='avl'>Available</div></td>";
															}
															else
															{
																echo "<td><div class='navl'>N/A</div></td>";
															}
															if($f2=="1")
															{
																echo "<td><div class='avl'>Available</div></td>";
															}
															else
															{
																echo "<td><div class='navl'>N/A</div></td>";
															}
															if($f3=="1")
															{
																echo "<td><div class='avl'>Available</div></td>";
															}
															else
															{
																echo "<td><div class='navl'>N/A</div></td>";
															}
															if($f4=="1")
															{
																echo "<td><div class='avl'>Available</div></td>";
															}
															else
															{
																echo "<td><div class='navl'>N/A</div></td>";
															}
															if($f5=="1")
															{
																echo "<td><div class='avl'>Available</div></td>";
															}
															else
															{
																echo "<td><div class='navl'>N/A</div></td>";
															}
														}
														else
														{
											?>
															<td><div class="navl">N/A</div></td>
															<td><div class="navl">N/A</div></td>
															<td><div class="navl">N/A</div></td>
															<td><div class="navl">N/A</div></td>
															<td><div class="navl">N/A</div></td>
											<?php
														}
											?>
								
											</tr>
											<?php
								
													}
												}
											?>
										</tbody>
									</table>
								</div>
							</div>
						<!-- END ROW CLASS -->
						
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
                <!-- END QUICK SIDEBAR -->
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <?php include 'AdminFooter.php'; ?>
            <!-- END FOOTER -->
        </div>
        <!-- BEGIN QUICK NAV -->
        <!--<nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank" class="active">
                        <span>Purchase Metronic</span>
                        <i class="icon-basket"></i>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/reviews/4021469?ref=keenthemes" target="_blank">
                        <span>Customer Reviews</span>
                        <i class="icon-users"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/showcast/" target="_blank">
                        <span>Showcase</span>
                        <i class="icon-user"></i>
                    </a>
                </li>
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>-->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<script src="../assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/horizontal-timeline/horizontal-timeline.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
		 
         <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
		
		<script  type="text/javascript" src="../assets/global/scripts/Chart/amcharts.js"></script>

		<script type="text/javascript" src="../assets/global/scripts/Chart/serial.js"></script>
		<script type="text/javascript" src="../assets/global/scripts/Chart/light.js"></script>


        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>