<!DOCTYPE html>
<?php 
	require 'connection.php';
	function role()
	{ 
		$output='';
		$c=mysqli_connect("localhost", "root", "", "db_hospital");
		$dFet="select * from tbl_role order by RoleName";
		$res=$c->query($dFet);
		if($res==true)
		{
			while($row=$res->fetch_assoc())
			{
				$output .= '<option value="'.$row["RoleId"].'">'.$row["RoleName"].'</option>';
			}
		}
		echo $output;
	}
	/*if(isset($_POST["btnSub"]))
	{	
		$tit=$_POST["title"];
		$desc=$_POST["description"];
		$sdate=$_POST["startdate"];
		$edate=$_POST["enddate"];
		//echo $tit,$desc,$sdate,$edate;
		$qry="insert into tbl_notice(Title,Description,StartDate,EndDate) values('$tit','$desc','$sdate','$edate')";
		$res=$con->query($qry);
		if($res==true)
		{
			header("location:NoticeList.php");
		}
		else
		{
			echo "failed";
		}
	}*/
?>

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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css" />
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
                                    <span>Notice</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
						 <div class="row">
                            <div class="col-md-12">
                                <div class="tabbable-line boxless tabbable-reversed">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_0">
                                            <div class="portlet box blue">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="fa fa-list"></i> Add Notice 
													</div>
                                                </div>
                                                <div class="portlet-body form">
                                                    <!-- BEGIN FORM-->
                                                    <form id="aform" class="form-horizontal" method="post">
														<div class="alert alert-danger display-hide">
															<button class="close" data-close="alert"></button> You have some form errors. Please check below. 
														</div>
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label bold">Title </label>
                                                                <div class="col-xs-5">
																	<input name="title" type="text" class="form-control" id="title" placeholder="Title" value="" >
																</div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label bold"> Description </label>
                                                                <div class="col-xs-5">
																	<textarea name="description"  id="description" class="form-control tinymce"  placeholder="Description"  rows="7"></textarea>
																</div>
                                                            </div>
															<div class="form-group">
                                                                <label class="col-md-3 control-label bold"> Notice Date </label>
                                                                <div class="col-xs-5">
																	<input type="date" name="noticedate"  id="noticedate" class="form-control datepicker" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>"/>
																</div>
                                                            </div>
															<div class="form-group">
                                                                <label class="col-md-3 control-label bold"> Date </label>
																<div class="col-xs-6">
																	<div class="row">
																		<div class="col-xs-5">
																			<input name="startdate" type="date" class="form-control datepicker" id="startdate" placeholder="Start Date" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>" >
																			<span class="help-block"> Start Date </span>
																		</div>
																		<div class="col-xs-5">
																			<input name="enddate" type="date" class="form-control" id="enddate" placeholder="End Date" value="<?php echo date("Y-m-d"); ?>" min="<?php echo date("Y-m-d"); ?>">
																			<span class="help-block"> End Date </span>
																		</div>
																	</div>
																</div>
                                                            </div>
															<div class="form-group">
																<div class="col-xs-3"></div>
																<div class="col-md-5">
																	<table class="table table-bordered" id="roleDis">
																		<thead>
																			<tr>  
																				<th> Role </th>	 
																				<th> Action </th>	 
																			</tr>
																		</thead>
																		<tbody id="item_table">
																			<tr>
																				<td>
																					<select name="role[]" class="form-control" id="role[]">
																						<option value="">Select Role</option>
																						<?php
																							$rFetch="select * from tbl_role order by RoleName";
																							$res=$con->query($rFetch);
																							if($res==true)
																							{
																								while($row=$res->fetch_assoc())
																								{
																						?>
																								<option value="<?php echo $row['RoleId']?>"><?php echo $row['RoleName']; ?></option>
																						<?php	
																								}
																							}
																						?>
																					</select>
																				</td>
																				<td>
																					<div class="btn btn-group">
																						<input type="button" class="btn btn-sm  btn-primary" value="Add" name="addRole" id="addRole">
																					</div>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                   <input type="submit" name="btnSub" class="btn blue" value="Submit" id="btnSub" />
                                                                    <button type="button" class="btn grey-salsa btn-outline">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
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
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
				
				$(document).on('click', '#addRole', function(){
					//alert('k');
				  var html = '';
				  html += '<tr>';
				  html += '<td><select name="role[]" class="form-control"><option value="">Select Role</option><?php echo role();?></select></td>';
				  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
				  $('#item_table').append(html);
				 });
				 
				 $(document).on('click', '.remove', function(){
				  $(this).closest('tr').remove();
				 });
				 
				 $('#btnSub').click(function()
				 {  
					$.ajax({  
						url:"dataNotice.php",  
						method:"POST",  
						data:$('#aform').serialize(),  
						success:function(data)  
						{  
							 console.log(data); 
							 $('#aform')[0].reset();  
						}  
				    });  
				});
				
				
				$('#aform').bootstrapValidator({
					fields: {
						title: {
							validators:{
								notEmpty: {
									message: 'Title is required'	
								},
								regexp: {
									regexp: /^[a-zA-Z_]+$/,
									message: 'The Title can only consist of alphabetical'
								}
							}
						},
						description: {
							validators:{
								notEmpty: {
									message: 'Description is required'	
								}
							}
						},
						startdate: {
							validators:{
								notEmpty: {
									message: 'Start Date is required'	
								}
							}
						},
						noticedate: {
							validators:{
								notEmpty: {
									message: 'Notice Date is required'	
								}
							}
						},
						enddate: {
							validators:{
								notEmpty: {
									message: 'End Date is required'	
								}
							}
						}
					}
				});
            })
        </script>
    </body>

</html>