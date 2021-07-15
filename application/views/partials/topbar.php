<!-- Top Bar Start -->
<div class="topbar">

	<!-- LOGO -->
	<div class="topbar-left">
		<a href="<?php base_url('dashboard')?>" class="logo"><span>Sifa<span>v1</span></span><i class="mdi mdi-layers"></i></a>

		<!-- Image logo -->
		<!--<a href="index.html" class="logo">-->
		<!--<span>-->
		<!--<img src="assets/images/logo.png" alt="" height="30">-->
		<!--</span>-->
		<!--<i>-->
		<!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
		<!--</i>-->
		<!--</a>-->
	</div>

	<!-- Button mobile view to collapse sidebar menu -->
	<div class="navbar navbar-default" role="navigation">
		<div class="container">

			<!-- Navbar-left -->


			<!-- Right(Notification) -->
			<ul class="nav navbar-nav navbar-right">


				<li class="dropdown user-box">
					<a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
						<img src="<?php echo base_url()?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
					</a>

					<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
						<li>
							<h5><?php echo $this->session->userdata('nama')?></h5>
						</li>
						<li><a href="<?php echo base_url('logout')?>"><i class="ti-power-off m-r-5"></i> Logout</a></li>
					</ul>
				</li>

			</ul> <!-- end navbar-right -->

		</div><!-- end container -->
	</div><!-- end navbar -->
</div>
<!-- Top Bar End -->
