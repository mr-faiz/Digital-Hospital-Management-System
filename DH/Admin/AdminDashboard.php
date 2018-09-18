<?php require 'connection.php'; ?>
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
		#chartdiv {
			width		: 100%;
			height		: 500px;
			font-size	: 11px;
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
                                    <span>Dashboard</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <h1 class="page-title"> Admin Dashboard
                        </h1>
					
						<!-- BEGIN ROW CLASS -->
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="dashboard-stat2 bordered">
										<div class="display">
											<div class="number">
												<h3 class="font-green-sharp">
												
													<?php
														$cntDoc="select count(*) TotalDoctor from tbl_doctor";
														$res1=$con->query($cntDoc);
														if($res1==true)
														{
															while($row1=$res1->fetch_assoc())
															{
													?>
													<span> <?php echo $row1["TotalDoctor"]; ?> </span>
													<?php
															}
														}
													?>
												</h3>
												<small>Doctors</small>
											</div>
											<div class="icon">
												<i class="fa fa-user-md fa-fw"></i>
											</div>
										</div>
										<div class="progress-info">
											<div class="progress">
												<span style="width: 57%;" class="progress-bar progress-bar-success green-sharp">
													<span class="sr-only">56% change</span>
												</span>
											</div>
											<!--<div class="status">
												<div class="status-title"> change </div>
												<div class="status-number"> 57% </div>
											</div>-->
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="dashboard-stat2 bordered">
										<div class="display">
											<div class="number">
												<h3 class="font-green-sharp">
													<?php
													
														$cntPat="select count(*) TotalPatient from tbl_patient";
														$res2=$con->query($cntPat);
														if($res2==true)
														{
															while($row2=$res2->fetch_assoc())
															{
													?>
													<span data-counter="counterup" data-value="<?php echo $row2["TotalPatient"]; ?>"></span>
													<?php
															}
														}
													?>
												</h3>
												<small>Patients</small>
											</div>
											<div class="icon">
												<i class="fa fa-wheelchair fa-fw"></i>
											</div>
										</div>
										<div class="progress-info">
											<div class="progress">
												<span style="width: 57%;" class="progress-bar progress-bar-success green-sharp">
													<span class="sr-only">56% change</span>
												</span>
											</div>
											<!--<div class="status">
												<div class="status-title"> change </div>
												<div class="status-number"> 57% </div>
											</div>-->
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="dashboard-stat2 bordered">
										<div class="display">
											<div class="number">
												<h3 class="font-green-sharp">
													<?php
														$cntApp="select count(*) TotalAppointment from tbl_appointment";
														$res3=$con->query($cntApp);
														if($res3==true)
														{
															while($row3=$res3->fetch_assoc())
															{
													?>
													<span data-counter="counterup" data-value="<?php echo $row3["TotalAppointment"]; ?>"></span>
													<?php
															}
														}
													?>
												</h3>
												<small>Appointments</small>
											</div>
											<div class="icon">
												<i class="fa fa-pencil fa fw"></i>
											</div>
										</div>
										<div class="progress-info">
											<div class="progress">
												<span style="width: 57%;" class="progress-bar progress-bar-success green-sharp">
													<span class="sr-only">56% change</span>
												</span>
											</div>
											<!--<div class="status">
												<div class="status-title"> change </div>
												<div class="status-number"> 57% </div>
											</div>-->
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="dashboard-stat2 bordered">
										<div class="display">
											<div class="number">
												<h3 class="font-green-sharp">
													<span data-counter="counterup" data-value="13"></span>
												</h3>
												<small>Feedbacks</small>
											</div>
											<div class="icon">
												<i class="icon-like"></i>
											</div>
										</div>
										<div class="progress-info">
											<div class="progress">
												<span style="width: 85%;" class="progress-bar progress-bar-success green-sharp">
													<span class="sr-only">85% change</span>
												</span>
											</div>
											<!--<div class="status">
												<div class="status-title"> change </div>
												<div class="status-number"> 85% </div>
											</div>-->
										</div>
										
									</div>
								</div>
							</div>
						<!-- END ROW CLASS -->
						<div id="chartdiv"></div>
						
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-01-01' and '2018-01-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$j=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-02-01' and '2018-02-30'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$f=$ro["c"];
							}
						}
						?>
						
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-03-01' and '2018-03-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$m=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-04-01' and '2018-04-30'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$a=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-05-01' and '2018-05-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$m=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-06-01' and '2018-06-30'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$ju=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-07-01' and '2018-07-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$juy=$ro["c"];
							}
						}
						?>
						
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-08-01' and '2018-08-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$au=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-09-01' and '2018-09-30'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$s=$ro["c"];
							}
						}
						?>
						
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-10-01' and '2018-10-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$o=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-11-01' and '2018-11-30'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$n=$ro["c"];
							}
						}
						?>
						<?php 
						
							$qr="select count(*) c from tbl_patient where JoiningDate between '2018-12-01' and '2018-12-31'";
							$re=$con->query($qr);
						if($re==true)
						{
							while($ro=$re->fetch_assoc())
							{
								$d=$ro["c"];
							}
						}
						?>

						<input type="hidden" name="jan" id="jan" value="<?php echo $j;?>"/>
						<input type="hidden" name="feb" id="feb" value="<?php echo $f;?>"/>
						<input type="hidden" name="mar" id="mar" value="<?php echo $m;?>"/>
						<input type="hidden" name="apr" id="apr" value="<?php echo $a;?>"/>
						<input type="hidden" name="may" id="may" value="<?php echo $m;?>"/>
						<input type="hidden" name="jun" id="jun" value="<?php echo $ju;?>"/>
						<input type="hidden" name="jul" id="jul" value="<?php echo $juy;?>"/>
						<input type="hidden" name="aug" id="aug" value="<?php echo $au;?>"/>
						<input type="hidden" name="sep" id="sep" value="<?php echo $s;?>"/>
						<input type="hidden" name="oct" id="oct" value="<?php echo $o;?>"/>
						<input type="hidden" name="nov" id="nov" value="<?php echo $n;?>"/>
						<input type="hidden" name="dec" id="dec" value="<?php echo $d;?>"/>
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
		

<!-- Chart code -->
	<script type="text/javascript">
			
			var a=document.getElementById("jan").value;
			var b=document.getElementById("feb").value;
			var c=document.getElementById("mar").value;
			var d=document.getElementById("apr").value;
			var e=document.getElementById("may").value;
			var f=document.getElementById("jun").value;
			var g=document.getElementById("jul").value;
			var h=document.getElementById("aug").value;
			var i=document.getElementById("sep").value;
			var j=document.getElementById("oct").value;
			var k=document.getElementById("nov").value;
			var l=document.getElementById("dec").value;
			//alert(a);
			
			
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"categoryField": "category",
					"startDuration": 1,
					"theme": "light",
					"categoryAxis": {
						"gridPosition": "start"
					},
					"trendLines": [],
					"graphs": [
						{
							"colorField": "color",
							"fillAlphas": 1,
							"id": "AmGraph-1",
							"lineColorField": "color",
							"title": "graph 1",
							"type": "column",
							"valueField": "column-1",
							"urlField": "url"
							
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "No of Patient"
						}
					],
					"allLabels": [],
					"balloon": {},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Month wise Patient Chart"
						}
					],
					"dataProvider": [
						{
							"category": "January",
							"column-1": a,
							"url":"../Admin/PatientReportList.php?sd=2018-01-01&ed=2018-01-31"
						},
						{
							"category": "February",
							"column-1": b,
							"url":"../Admin/PatientReportList.php?sd=2018-02-01&ed=2018-02-31"
						},
						{
							"category": "March",
							"column-1": c,
							"url":"../Admin/PatientReportList.php?sd=2018-03-01&ed=2018-03-31"
						},
						{
							"category": "April",
							"column-1": d,
							"url":"../Admin/PatientReportList.php?sd=2018-04-01&ed=2018-04-31"
						},
						{
							"category": "May",
							"column-1": e,
							"url":"../Admin/PatientReportList.php?sd=2018-05-01&ed=2018-05-31"
						},
						{
							"category": "June",
							"column-1": f,
							"url":"../Admin/PatientReportList.php?sd=2018-06-01&ed=2018-06-31"
						},
						{
							"category": "July",
							"column-1": g,
							"url":"../Admin/PatientReportList.php?sd=2018-07-01&ed=2018-07-31"
						},
						{
							"category": "August",
							"column-1": h,
							"url":"../Admin/PatientReportList.php?sd=2018-08-01&ed=2018-08-31"
						},
						{
							"category": "September",
							"column-1": i,
							"url":"../Admin/PatientReportList.php?sd=2018-09-01&ed=2018-09-31"
						},
						{
							"category": "Octomber",
							"column-1": j,
							"url":"../Admin/PatientReportList.php?sd=2018-10-01&ed=2018-10-31"
						}
						,
						{
							"category": "November",
							"column-1":k,
							"url":"../Admin/PatientReportList.php?sd=2018-11-01&ed=2018-11-31"
						},
						{
							"category": "December",
							"column-1": l,
							"url":"../Admin/PatientReportList.php?sd=2018-12-01&ed=2018-12-31"
						}
					]
				}
			);
		</script>


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