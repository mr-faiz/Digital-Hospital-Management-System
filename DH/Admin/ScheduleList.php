<!DOCTYPE html>

<?php require 'connection.php'; ?>

<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title> Digital Hospital Management System </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for buttons extension demos" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
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
			.na{
				text-align:center;
				color:red;
			}
			.avl{
				text-align:center;
				color:green;
			}
		
		</style>
	</head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Change Status </h4>
					</div>
					<form method="post">
					<div class="modal-body">
						Status :
						<select name="status">
							<option value="Accept"> Accept </option>
							<option value="Reject"> Reject </option>
						</select>
						<input type="hidden" name="apid" id="apid">
					</div>
					<div class="modal-footer form-actions right">
						<button type="button" class="btn default" data-dismiss="modal">Close</button>
						<input type="submit" name="btnSub" class="btn btn-info" value="Submit" />
					</div>
					</form>
				</div>
			</div>
		</div>
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
                                    <span>Schedule</span>
                                </li>
                            </ul>
                        </div>
						<div class="row">
							<div class="col-md-12">
                                <div class="tabbable-line boxless tabbable-reversed">
                                    <div class="tab-content">
										<div class="portlet light portlet-fit portlet-datatable bordered">
											<div class="portlet-title">
												<div class="caption">
													<i class="fa fa-list "></i>
													Schedule List
												</div>
												<div class="actions">
													<div class="btn-group">
														<a class="btn blue btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
															<i class="fa fa-share"></i>
															<span class="hidden-xs"> Tools </span>
															<i class="fa fa-angle-down"></i>
														</a>
														<ul class="dropdown-menu pull-right" id="sample_3_tools">
															<li>
																<a href="javascript:;" data-action="0" class="tool-action">
																	<i class="icon-printer"></i> Print</a>
															</li>
															<li>
																<a href="javascript:;" data-action="2" class="tool-action">
																	<i class="icon-doc"></i> PDF</a>
															</li>
															<li>
																<a href="javascript:;" data-action="3" class="tool-action">
																	<i class="icon-paper-clip"></i> Excel</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="portlet-body">
												<div class="table-container">
													<table class="table table-striped table-bordered table-hover" id="sample_3" width="100%">
														<thead>
															<tr>
																<th>SR.NO</th>
																<th>Doctor Name</th>
																<th>Mon</th>
																<th>Tues</th>
																<th>Wed</th>
																<th>Thurs</th>
																<th>Fri</th>
																<th>Sat</th>
																<th>Sun</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<?php 
																$sql="select * from tbl_doctor order by DoctorName";
																$result=$con->query($sql);
																$i=1;
																while($row=$result->fetch_assoc())
																{
															?>
															<tr>
																<td><?php echo $i;$i++;?></td>
																<td><?php echo $row['DoctorName'];?></td>
															<?php 
																$sql1="select distinct AvailableDay,sc.DoctorId from tbl_schedule as sc 
																where DoctorId=".$row['DoctorId'];
																$result1=$con->query($sql1);
																$no_row=$result1->num_rows;
																if($no_row > 0)
																{
																	while($data=$result1->fetch_assoc())
																	{
																		$arr_data[]=$data;
																	}
																	$d1=$d2=$d3=$d4=$d5=$d6=$d7=0;
																	foreach($arr_data as $key=>$val)
																	{
																		if($val['AvailableDay']=='Monday')
																			$d1=1;
																		if($val['AvailableDay']=='Tuesday')
																			$d2=1;
																		if($val['AvailableDay']=='Wednesday')
																			$d3=1;
																		if($val['AvailableDay']=='Thursday')
																			$d4=1;
																		if($val['AvailableDay']=='Friday')
																			$d5=1;
																		if($val['AvailableDay']=='Saturday')
																			$d6=1;
																		if($val['AvailableDay']=='sunday')
																			$d7=1;
																		
																	}
																	if($d1=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d2=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d3=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d4=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d5=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d6=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	if($d7=="1")
																	{
																		echo "<td class='avl'><i class='fa fa-check'></i></td>";
																	}
																	else
																	{
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	}
																	unset($arr_data);
																}
																else
																{
																	for($f=1;$f<=7;$f++)
																		echo "<td class='na'><i class='fa fa-times'></i></td>";
																	
																}
																																
															?>
																<td class="center"> 
																	<a href="ViewSchedule.php?dnm=<?php echo $row['DoctorName']; ?>" class="btn btn-info" id="btnD" > <i class="fa fa-eye"></i></a>
																	<a href="#" class="btn btn-danger" id="btnD" onclick="delFunction('<?php echo $row['DoctorName']?>')" > <i class="fa fa-trash"></i></a> 
																</td>
															</tr>
															<?php
																}
															?>
														</tbody>
													</table>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
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
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            });
			function delFunction(a)
			{
				var ans=confirm('Are you sure to delete this ?');
				if(ans== true)
				{
					window.location="DeleteSchedule.php?sid="+a;
				}
				else{
					alert('Data is not deleted');
				}
			};
        </script>
	</body>

</html>