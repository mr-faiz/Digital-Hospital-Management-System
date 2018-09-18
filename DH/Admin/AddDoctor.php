<!DOCTYPE html>

<?php
	require 'connection.php';
	if(isset($_POST["btnSub"]))
	{		
		$userid=$_POST['userid'];
		$doctorname=$_POST['doctorname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$designation=$_POST['designation'];
		$department=$_POST['department'];
		$address=$_POST['address'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$pincode=$_POST['pincode'];
		$mobile=$_POST['mobile'];
		//$picture=$_POST['picture'];
		$specialist=$_POST['specialist'];
		$birthdate=$_POST['birthdate'];
		$gender=$_POST['gender'];
		$bloodgroup=$_POST['bloodgroup'];
		$reg=$_POST['regno'];
		$qualification=$_POST['degree'];
		$experience=$_POST['experience'];
		$joiningdate=$_POST['joiningdate'];
		
		function GetImageExtension($imagetype)
		{
		if(empty($imagetype)) return false;
			switch($imagetype)
			{
			   case 'image/jpeg': return '.jpg';
			   case 'image/png': return '.png';
			   default: return false;
			}

		}
		
		$file_name=$_FILES["picture"]["name"];
		$temp_name=$_FILES["picture"]["tmp_name"];
		$imgtype=$_FILES["picture"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "../assets/global/img/DoctorPhotos/".$imagename;

		move_uploaded_file($temp_name, $target_path);
		
		$insert="insert into tbl_doctor(UserId, DoctorName, Email, Password, RoleId, DeptId, Address, CountryId, StateId, CityId, Pincode, Mobile, Picture,SpecialistId, Birthdate, Gender, BloodGroup , RegNo ,Qualification, Experience, JoiningDate) values('$userid','$doctorname','$email',md5($password),'$designation','$department','$address','$country','$state','$city','$pincode','$mobile','$imagename' ,'$specialist','$birthdate','$gender','$bloodgroup','$reg','$qualification','$experience','$joiningdate')";
		$result1=$con->query($insert);
		if($result1==true)
		{
			header ('location:DoctorList.php');
		}
		else
		{
			echo "<script type='text/javascript'>alert('Not Inserted');</script>";
		}
	}
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
                                    <span>Doctor</span>
                                </li>
                            </ul>
                        </div>
                        <!-- END PAGE BAR -->
						<div class="row">
                            <div class="col-md-12">
                                <div class="tabbable-line boxless tabbable-reversed">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_0">
											<div class="tab-pane" id="tab_1">
												<div class="portlet box blue">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-gift"></i> Add Doctor 
														</div>
													</div>
													<div class="portlet-body form">
														<!-- BEGIN FORM-->
														<form enctype="multipart/form-data" id="docform" class="horizontal-form" method="post">
															<div class="form-body">
																<h3 class="form-section bold">Person Info</h3>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">User ID</label>
																			<input name="userid" type="text" class="form-control" id="userid" placeholder="User ID" value="" readonly>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Password </label>
																			<input name="password" class="form-control" type="password" placeholder="Password" id="password" >
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold"> Doctor Name</label>
																			<input name="doctorname" type="text" class="form-control" id="doctorname" placeholder="Doctor Name" value="" >
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Email</label>
																			<input name="email" class="form-control" type="text" placeholder="Email Address" id="email"  value="">
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Gender</label>
																			<select class="form-control" name="gender" class="form-control" id="gender">
																				<option value="Male">Male</option>
																				<option value="Female">Female</option>
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Date of Birth</label>
																			<input name="birthdate" class="datepicker form-control" type="date" placeholder="Date of Birth" id="birthdate" value="" >
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Mobile</label>
																			<input name="mobile" class="form-control" type="text" placeholder="Mobile No" id="mobile" value="" >
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Picture</label>
																			<input type="file" class="form-control" name="picture" id="picture" value=""> 
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Blood Group</label>
																			<select name="bloodgroup" class="form-control" id="bloodgroup" >
																				<option value="" selected="selected">Select Option</option>
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
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<h3 class="form-section bold">Address</h3>
																<div class="row">
																	<div class="col-md-12 ">
																		<div class="form-group">
																			<label class="control-label bold">Street</label>
																			<textarea name="address" class="form-control"  placeholder="Address" rows="1" id="address"></textarea>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Country</label>
																			<select name="country" class="form-control" id="country">
																				<option value="">Select Country</option>	
																				<?php
																					$sCountry="select * from tbl_country order by CountryName";
																					$result2=$con->query($sCountry);
																					if($result2==true)
																					{
																						while($row=$result2->fetch_assoc())
																						{
																				?>
																						<option value="<?php echo $row['CountryId']?>"><?php echo $row['CountryName']; ?></option>
																				<?php	
																						}
																					}
																				?>	
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">State</label>
																			<select name="state" class="form-control" id="state">
																				<option value="-1">Select State</option>
																				<?php
																					$sState="select * from tbl_state order by StateName";
																					$result3=$con->query($sState);
																					if($result3==true)
																					{
																						while($row=$result3->fetch_assoc())
																						{
																				?>
																						<option value="<?php echo $row['StateId']?>"><?php echo $row['StateName']; ?></option>
																				<?php	
																						}
																					}
																				?>								
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">City</label>
																			<select name="city" class="form-control" id="city">
																				<option value="-1">Select City</option><?php
																					$sCity="select * from tbl_city order by CityName";
																					$result4=$con->query($sCity);
																					if($result4==true)
																					{
																						while($row=$result4->fetch_assoc())
																						{
																				?>
																						<option value="<?php echo $row['CityId']?>"><?php echo $row['CityName']; ?></option>
																				<?php	
																						}
																					}
																				?>						
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Post Code</label>
																			<input name="pincode" class="form-control" type="text" placeholder="Pincode" id="pincode" value="" >
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<h3 class="form-section bold">Education</h3>
																<div class="row">
																	<div class="col-md-6 ">
																		<div class="form-group">
																			<label class="control-label bold">Reg No</label>
																			<input name="regno" type="text" class="form-control" id="regno" placeholder="Degree Reg No" value="" >
																		</div>
																	</div>
																	<div class="col-md-6 ">
																		<div class="form-group">
																			<label class="control-label bold">Degree </label>
																			<textarea name="degree" class="tinymce form-control" placeholder="Education/Degree" id="degree" rows="1"></textarea>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Department</label>
																			<select name="department" class="form-control" id="department">
																				<option value="">Select Department</option>
																				<?php
																					$dFetch="select * from tbl_department order by DeptName";
																					$resDept=$con->query($dFetch);
																					if($resDept==true)
																					{
																						while($row=$resDept->fetch_assoc())
																						{
																				?>
																						<option value="<?php echo $row['DeptId']?>"><?php echo $row['DeptName']; ?></option>
																				<?php	
																						}
																					}
																				?>
																			</select>
																		</div>	
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Specialist</label>
																			<select name="specialist" class="form-control" id="specialist">
																				<option value="-1">Select Specialist</option>
																				<?php
																					$sFetch="select * from tbl_specialist order by SpecialistName";
																					$resSpecialist=$con->query($sFetch);
																					if($resSpecialist==true)
																					{
																						while($row=$resSpecialist->fetch_assoc())
																						{
																				?>
																						<option value="<?php echo $row['SpecialistId']?>"><?php echo $row['SpecialistName']; ?></option>
																				<?php	
																						}
																					}
																				?>
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Experience</label>
																			<input type="text" name="experience" class="form-control" placeholder="Experience" id="experience" value="" >
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<h3 class="form-section"></h3>
																<div class="row">
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Joining Date</label>
																			<input name="joiningdate" class="datepicker form-control" type="date" placeholder="Joining Date" id="joiningdate" value="<?php echo date("Y-m-d"); ?>" >
																		</div>	
																	</div>
																	<!--/span-->
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="control-label bold">Role</label>
																			<select name="designation" class="form-control" id="designation" readonly>
																				<option value="1" selected>Doctor</option>
																				
																			</select>
																		</div>
																	</div>
																	<!--/span-->
																</div>
																<!--/row-->
															</div>
															<div class="form-actions right">
																<button type="button" class="btn default">Cancel</button>
																<input type="submit" name="btnSub" class="btn btn-info" value="Submit" />
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
				$.ajax({
						type: "POST",
						url: "count_doctor.php",
						success: function(data){
							$("#userid").val("D"+data);
						}
				});//ajax over
				
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
				$('#country').change(function(){
					var cid=$('#country').val();
					//alert(sid);
					$.ajax({
						type: "POST",
						url: "get_state.php",
						data:'country='+cid,
						success: function(data){
							$("#state").html(data);
						}
					});//ajax over
				});//state drop box change event
				
				$('#state').change(function(){
					var sid=$('#state').val();
					//alert(sid);
					$.ajax({
						type: "POST",
						url: "get_city.php",
						data:'state='+sid,
						success: function(data){
							$("#city").html(data);
						}
					});//ajax over
				});
				$("#name").change(function(){
					var dname=$(this).val();
					$.ajax({
						type: "POST",
						url: "get_avaliabledname.php",
						data:'dname='+dname,
						success: function(data){
							if(data==1){
								alert("This department is already added");
								$("#name").val("");
							}
								
						}
					});

				});
				$('#docform').bootstrapValidator({
					fields: {
						userid: {
							validators:{
								notEmpty: {
									message: 'USerId is required'	
								}
							}
						},
						doctorname: {
							validators: {
								notEmpty: {
									message: 'Doctor Name is required'	
								},
								regexp: {
									regexp: /^[a-zA-Z_ ]+$/,
									message: 'The doctor name can only consist of alphabetical'
								}
							}
						},
						
						email: {
							validators: {
								notEmpty: {
									message: 'Email Address is required'	
								},
								emailAddress: {
									message: 'The input is not a valid email address'
								}
							}
						},
						bloodgroup: {
							validators: {
								notEmpty: {
									message: 'Blood Group is required'	
								}
							}
						},
						password: {
							validators: {
								notEmpty: {
									message: 'Password is required'	
								},
								stringLength: {
									min: 4,
									max: 8,
									message: 'The password must be between 4 to 8 characters'
								}
							}
						},
						department: {
							validators: {
								notEmpty: {
									message: 'Select Department'	
								}
							}
						},
						address: {
							validators: {
								notEmpty: {
									message: 'Address is required'	
								}
							}
						},
						country: {
							validators: {
								notEmpty: {
									message: 'Select Country'	
								}
							}
						},
						state: {
							validators: {
								notEmpty: {
									message: 'Select State'	
								}
							}
						},
						city: {
							validators: {
								notEmpty: {
									message: 'Select City'	
								}
							}
						},
						pincode: {
							validators: {
								notEmpty: {
									message: 'Pincode is required'	
								},
								regexp: {
									regexp: /^[0-9_]+$/,
									message: 'The Pincode can only consist of alphabetical, number'
								},
								stringLength: {
									min: 6,
									max: 6,
									message: 'The Pincode must have at 6 digit'
								}
							}
						},
						mobile: {
							validators: {
								notEmpty: {
									message: 'Mobile Number is required'	
								},
								regexp: {
									regexp: /^[0-9]+$/,
									message: 'The Mobile can only consist of number'
								},
								stringLength: {
									min: 10,
									max: 10,
									message: 'The Mobile must have at 10 digit'
								}
							}
						},
						specialist: {
							validators: {
								notEmpty: {
									message: 'Select Specialist'	
								}
							}
						},
						birthdate: {
							validators: {
								notEmpty: {
									message: 'Date of Birth is required'	
								}
							}
						},
						regno: {
							validators: {
								notEmpty: {
									message: 'Reg No is required'	
								},
								regexp: {
									regexp: /^[0-9a-zA-Z]+$/,
									message: 'The RegNo can only consist of number or Alphabets'
								}
							}
						},
						degree: {
							validators: {
								notEmpty: {
									message: 'Degree is required'	
								},
								regexp: {
									regexp: /^[0-9a-zA-Z]+$/,
									message: 'The Degree can only consist of number or Alphabets'
								}
							}
						},
						gender: {
							validators: {
								notEmpty: {
									message: 'gender is required'	
								}
							}
						},
						experience: {
							validators: {
								notEmpty: {
									message: 'Experience is required'	
								},
								regexp: {
									regexp: /^[0-9_]+(\.\d+)?$/,
									message: 'The Experience can only consist of number'
								},
								stringLength: {
									min: 1,
									max: 3,
									message: 'Enter Proper details '
								}
							}
						},
						joiningdate: {
							validators: {
								notEmpty: {
									message: 'JoiningDate is required'	
								}
							}
						},
						designation: {
							validators: {
								notEmpty: {
									message: 'Select Desgination'	
								}
							}
						},
						picture: {
							validators: {
								notEmpty: {
									message: 'Select Image'	
								}
							}
						}
					}
				});
            });
        </script>
    </body>

</html>