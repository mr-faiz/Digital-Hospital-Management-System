<!DOCTYPE html>
<?php
	require 'connection.php';
?>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Digital Hospital Management System</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for user account page" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-content-white">
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
                    <!-- BEGIN SIDEBAR -->
						<?php include 'AdminNavigation.php'; ?>
                    <!-- END SIDEBAR -->
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
                                    <span>User</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> User Profile | Account
                            
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
								
								<?php
									$docId=$_GET["did"];
									$dFetch="select * from tbl_doctor td,tbl_country tr,tbl_state ts,tbl_specialist tsp,tbl_city tci,tbl_role,tbl_department tdep where td.DeptId=tdep.DeptId and td.RoleId=tbl_role.RoleId and  td.CityId=tci.CityId and td.CountryId=tr.CountryId and td.StateId=ts.StateId and td.SpecialistId=tsp.SpecialistId and DoctorId='$docId'";
									//echo $dFetch;
									$res=$con->query($dFetch);
									//echo $res;
									if($res==true)
									{
										while($row=$res->fetch_assoc())
										{
								?>
                                
                                <!-- BEGIN PROFILE CONTENT -->
                                <div class="profile-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="portlet light ">
                                                <div class="portlet-title tabbable-line">
                                                    <div class="caption caption-md">
                                                        <i class="icon-globe theme-font hide"></i>
                                                        <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                    </div>
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                        </li>
														<li>
                                                            <a href="#tab_1_2" data-toggle="tab">Address Info</a>
                                                        </li>
                                                        <li>
                                                            <a href="#tab_1_3" data-toggle="tab">Education </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="tab-content">
                                                        <!-- PERSONAL INFO TAB -->
                                                        <div class="tab-pane active" id="tab_1_1">
                                                            <form role="form" method="post">
                                                                <div class="form-group">
                                                                    <label class="control-label">Doctor Name</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['DoctorName']; ?>"> 
																</div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Email</label>
                                                                    <input type="email" class="form-control" value="<?php echo $row['Email']; ?>"> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Gender</label>
                                                                    <select name="gender" class="form-control">
																		<option value="Male">Male</option>
																		<option value="Female">Female</option>
																	</select>
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Mobile</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['Mobile']; ?>"> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Date of Birth</label>
                                                                    <input type="date" class="form-control" value="<?php echo $row['Birthdate']; ?>"> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Blood Group</label>
                                                                    <select name="bloodgroup" class="form-control" id="bloodgroup" >
																		<option value="A+">A+</option>
																		<option value="A-">A-</option>
																		<option value="B+">B+</option>
																		<option value="B-">B-</option>
																		<option value="O+">O+</option>
																		<option value="O-">O-</option>
																		<option value="AB+">AB+</option>
																		<option value="AB-">AB-</option>
																	</select>
																</div>
                                                            </form>
                                                        </div>
                                                        <!-- END PERSONAL INFO TAB -->
                                                        <!-- CHANGE ADDRESS TAB -->
                                                        <div class="tab-pane" id="tab_1_2">
                                                            <form method="post">
                                                                <div class="form-group">
                                                                    <label class="control-label">Street </label>
                                                                    <textarea name="address" class="form-control" rows="1" id="address"> <?php echo $row['Address']; ?>  </textarea>
																</div>
                                                                <div class="form-group">
                                                                    <label class="control-label"> Country </label>
                                                                    <input type="password" class="form-control" /> 
																</div>
                                                                <div class="form-group">
                                                                    <label class="control-label">State</label>
                                                                    <input type="password" class="form-control" /> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">City</label>
                                                                    <input type="password" class="form-control" /> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Pincode</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['Pincode']; ?>" > 
																</div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE ADDRESS TAB -->
                                                        <!-- CHANGE EDUCATION TAB -->
                                                        <div class="tab-pane" id="tab_1_3">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label class="control-label">Reg. No</label>
                                                                    <input type="text" class="form-control" value="<?php echo $row['RegNo']; ?>" > </div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Degree</label>
                                                                    <textarea name="degree" class="tinymce form-control" id="degree" rows="1"> <?php echo $row['Degree']; ?> </textarea>
																</div>
                                                                <div class="form-group">
                                                                    <label class="control-label">Department</label>
                                                                    <input type="password" class="form-control" /> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Specialist</label>
                                                                    <input type="password" class="form-control" /> 
																</div>
																<div class="form-group">
                                                                    <label class="control-label">Experience</label>
                                                                    <input type="number" class="form-control" value="<?php echo $row['Experience']; ?>" > 
																</div>
                                                            </form>
                                                        </div>
                                                        <!-- END CHANGE EDUCATION TAB -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
								<?php	
										}
									}
								?>
                                    </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            </div>
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
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
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
            })
        </script>
    </body>

</html>