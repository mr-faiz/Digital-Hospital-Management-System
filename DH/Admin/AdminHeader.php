<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner ">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="#">
				<!--<img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> -->
				<h4 class="logo-default bold"> Digital Hospital </h4>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<span></span>
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			<span></span>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<?php
							$uid=$_SESSION["userid"];
							$pFetch="select * from tbl_login where Username='$uid'";
							$res=$con->query($pFetch);
							if($res==true)
							{
								while($row=$res->fetch_assoc())
								{
						?>
						<img alt="" class="img-circle" src="../assets/global/img/AdminPhotos/<?php echo $row["Picture"]; ?>" />
						<span class="username username-hide-on-mobile"><?php echo $row["Name"]; ?> </span>
						<i class="fa fa-angle-down"></i>
						<?php
								}
							}
						?>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="UserProfile.php">
								<i class="icon-user"></i> My Profile </a>
						</li>
						<li class="divider"> </li>
						<li>
							<a href="UserLock.php">
								<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="logout.php">
								<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>