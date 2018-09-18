<?php
	$page_name=basename($_SERVER['PHP_SELF']);	
?>
<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<li class="nav-item  <?php if($page_name=="AdminDashboard.php") echo "start active open"?>">
				<a href="AdminDashboard.php" class="nav-link nav-toggle">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
				</a>
			</li>
			<li class="nav-item <?php if($page_name=="AddDepartment.php" || $page_name=="DepartmentList.php" ) echo "start active open"?>">
				<a  class="nav-link nav-toggle">
					<i class="fa fa-sitemap fa-fw"></i>
					<span class="title">Department</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AddDepartment.php" class="nav-link nav-toggle">
							<span class="title">Add Department</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="DepartmentList.php" class="nav-link nav-toggle">
							<span class="title">Department List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="AddDoctor.php" || $page_name=="DoctorList.php" ) echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-user-md fa-fw"></i>
					<span class="title">Doctor</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AddDoctor.php" class="nav-link ">
							<span class="title">Add Doctor</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="DoctorList.php" class="nav-link ">
							<span class="title">Doctor List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="PatientList.php") echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-wheelchair fa-fw"></i>
					<span class="title">Patient</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="PatientList.php" class="nav-link ">
							<span class="title">Patient List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="AddSchedule.php" || $page_name=="ScheduleList.php" ) echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-files-o fa-fw"></i>
					<span class="title">Schedule</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AddSchedule.php" class="nav-link ">
							<span class="title">Add Schedule</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="ScheduleList.php" class="nav-link ">
							<span class="title">Schedule List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="AppointmentList.php") echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-pencil fa fw"></i>
					<span class="title">Appointment</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AppointmentList.php" class="nav-link ">
							<span class="title">Appointment List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="AddBed.php" || $page_name=="BedList.php" || $page_name=="AddFloorInfo.php" || $page_name=="FloorRoomAllocation.php" || $page_name=="BedAssignList.php" ) echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-bed"></i>
					<span class="title">Room Manager</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AddBed.php" class="nav-link ">
							<span class="title">Add Room</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="BedList.php" class="nav-link ">
							<span class="title">Room List</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="AddFloorInfo.php" class="nav-link ">
							<span class="title">Add Floor Info</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="FloorRoomAllocation.php" class="nav-link ">
							<span class="title">Floor wise Room List</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="BedAssignList.php" class="nav-link ">
							<span class="title">Bed Assign List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="AddNotice.php" || $page_name=="NoticeList.php" ) echo "start active open"?> ">
				<a href="javascript:;" class="nav-link nav-toggle">
					<i class="fa fa-bell"></i>
					<span class="title">Notice Board</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
				<ul class="sub-menu">
					<li class="nav-item  ">
						<a href="AddNotice.php" class="nav-link ">
							<span class="title">Add Notice</span>
						</a>
					</li>
					<li class="nav-item  ">
						<a href="NoticeList.php" class="nav-link ">
							<span class="title">Notice List</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item <?php if($page_name=="UserProfile.php" ) echo "start active open"?> ">
				<a href="UserProfile.php" class="nav-link nav-toggle">
					<i class="icon-home"></i>
					<span class="title">User Profile</span>
					<span class="arrow"></span>
					<span class="selected"></span>
				</a>
			</li>
		</ul>
	</div>
<!-- END SIDEBAR -->