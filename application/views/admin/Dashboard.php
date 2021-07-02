
<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

	<!-- Top Bar Start -->
	<div class="topbar">

		<!-- LOGO -->
		<div class="topbar-left">
			<a href="../index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
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
				<ul class="nav navbar-nav navbar-left">
					<li>
						<button class="button-menu-mobile open-left waves-effect">
							<i class="mdi mdi-menu"></i>
						</button>
					</li>



				</ul>

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


	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<div class="sidebar-inner slimscrollleft">

			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<ul>
					<li class="menu-title">Navigation</li>

					<li class="has_sub">
						<a href="<?php echo base_url('dashboard')?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Akademik </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="ui-buttons.html">Kalender Akademik</a></li>
							<li><a href="ui-buttons.html">Penjadwalan Kuliah</a></li>
							<li><a href="ui-buttons.html">Daftar Ulang Mahasiswa</a></li>
							<li><a href="ui-buttons.html">KRS Mahasiswa</a></li>
							<li><a href="ui-buttons.html">Input Nilai Mahasiswa</a></li>
							<li><a href="ui-buttons.html">KHS Mahasiswa</a></li>
							<li><a href="ui-buttons.html">Transkrip Nilai Mahasiswa</a></li>
							<li><a href="ui-buttons.html">Absensi Mahasiswa</a></li>
							<li><a href="ui-buttons.html">Absensi Dosen</a></li>
							<li><a href="ui-buttons.html">Pengumuman</a></li>
							<li><a href="ui-buttons.html">Range PMB</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Master </span> <span class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="admin-sweet-alert.html">Identitas Instusi</a></li>
							<li><a href="admin-sweet-alert.html">Program Studi</a></li>
							<li><a href="admin-sweet-alert.html">Program</a></li>
							<li><a href="admin-sweet-alert.html">Kampus</a></li>
							<li><a href="admin-sweet-alert.html">Ruangan</a></li>
							<li><a href="admin-sweet-alert.html">Mata Kuliah</a></li>
							<li><a href="<?php echo base_url('admin_dosen')?>">Dosen</a></li>
							<li><a href="admin-sweet-alert.html">Mahasiswa</a></li>
							<li><a href="admin-sweet-alert.html">Data Nilai</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i
									class="mdi mdi-layers"></i><span> Keuangan </span> <span
									class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="admin-sweet-alert.html">Data COA</a></li>
							<li><a href="admin-sweet-alert.html">Data SUB COA</a></li>
							<li><a href="admin-sweet-alert.html">Data Beban Biaya</a></li>
							<li><a href="admin-sweet-alert.html">Transaksi Keuangan</a></li>
							<li><a href="admin-sweet-alert.html">Pemasukan Pengeluaran</a></li>
							<li><a href="admin-sweet-alert.html">Laporan Keuangan</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i
									class="mdi mdi-layers"></i><span> Marketing </span> <span
									class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i
									class="mdi mdi-layers"></i><span> Manajemen Users </span> <span
									class="menu-arrow"></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url('staff_admin')?>">Staff Administrator</a></li>
						</ul>
					</li>



				</ul>
			</div>
			<!-- Sidebar -->
			<div class="clearfix"></div>

			<div class="help-box">
				<h5 class="text-muted m-t-0">For Help ?</h5>
				<p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
				<p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
			</div>

		</div>
		<!-- Sidebar -left -->

	</div>
	<!-- Left Sidebar End -->



	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="content-page">
		<!-- Start content -->
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-title-box">
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Dashboard</a>
								</li>
								<li class="active">
									Dashboard
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- end row -->

				<div class="row">

					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="card-box widget-box-one">
							<i class="mdi mdi-chart-areaspline widget-one-icon"></i>
							<div class="wigdet-one-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow">Mahasiswa</p>
								<h2>34578</h2>
							</div>
						</div>
					</div><!-- end col -->

					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="card-box widget-box-one">
							<i class="mdi mdi-chart-areaspline widget-one-icon"></i>
							<div class="wigdet-one-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow">Dosen</p>
								<h2>34578</h2>
							</div>
						</div>
					</div><!-- end col -->

					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="card-box widget-box-one">
							<i class="mdi mdi-chart-areaspline widget-one-icon"></i>
							<div class="wigdet-one-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow">Maba</p>
								<h2>34578</h2>
							</div>
						</div>
					</div><!-- end col -->


				</div>
				<!-- end row -->


				<div class="row">
					<div class="col-lg-4">
						<div class="card-box">

							<h4 class="header-title m-t-0">Daily Sales</h4>

							<div class="widget-chart text-center">
								<div id="morris-donut-example" style="height: 245px;"></div>
								<ul class="list-inline chart-detail-list m-b-0">
									<li>
										<h5 class="text-danger"><i class="fa fa-circle m-r-5"></i>Series A</h5>
									</li>
									<li>
										<h5 class="text-success"><i class="fa fa-circle m-r-5"></i>Series B</h5>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- end col -->

					<div class="col-lg-4">
						<div class="card-box">

							<h4 class="header-title m-t-0">Statistics</h4>
							<div id="morris-bar-example" style="height: 280px;"></div>
						</div>
					</div><!-- end col -->

					<div class="col-lg-4">
						<div class="card-box">

							<h4 class="header-title m-t-0">Total Revenue</h4>
							<div id="morris-line-example" style="height: 280px;"></div>
						</div>
					</div><!-- end col -->

				</div>
				<!-- end row -->


				<div class="row">
					<div class="col-lg-6">
						<div class="card-box">
							<h4 class="header-title m-t-0 m-b-30">Recent Users</h4>

							<div class="table-responsive">
								<table class="table table table-hover m-0">
									<thead>
									<tr>
										<th></th>
										<th>User Name</th>
										<th>Phone</th>
										<th>Location</th>
										<th>Date</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<th>
											<img src="<?php echo base_url()?>assets/images/users/avatar-1.jpg" alt="user" class="thumb-sm img-circle" />
										</th>
										<td>
											<h5 class="m-0">Louis Hansen</h5>
											<p class="m-0 text-muted font-13"><small>Web designer</small></p>
										</td>
										<td>+12 3456 789</td>
										<td>USA</td>
										<td>07/08/2016</td>
									</tr>

									<tr>
										<th>
											<img src="<?php echo base_url()?>assets/images/users/avatar-2.jpg" alt="user" class="thumb-sm img-circle" />
										</th>
										<td>
											<h5 class="m-0">Craig Hause</h5>
											<p class="m-0 text-muted font-13"><small>Programmer</small></p>
										</td>
										<td>+89 345 6789</td>
										<td>Canada</td>
										<td>29/07/2016</td>
									</tr>

									<tr>
										<th>
											<img src="<?php echo base_url()?>assets/images/users/avatar-3.jpg" alt="user" class="thumb-sm img-circle" />
										</th>
										<td>
											<h5 class="m-0">Edward Grimes</h5>
											<p class="m-0 text-muted font-13"><small>Founder</small></p>
										</td>
										<td>+12 29856 256</td>
										<td>Brazil</td>
										<td>22/07/2016</td>
									</tr>

									<tr>
										<th>
											<img src="<?php echo base_url()?>assets/images/users/avatar-4.jpg" alt="user" class="thumb-sm img-circle" />
										</th>
										<td>
											<h5 class="m-0">Bret Weaver</h5>
											<p class="m-0 text-muted font-13"><small>Web designer</small></p>
										</td>
										<td>+00 567 890</td>
										<td>USA</td>
										<td>20/07/2016</td>
									</tr>

									<tr>
										<th>
											<img src="<?php echo base_url()?>assets/images/users/avatar-5.jpg" alt="user" class="thumb-sm img-circle" />
										</th>
										<td>
											<h5 class="m-0">Mark</h5>
											<p class="m-0 text-muted font-13"><small>Web design</small></p>
										</td>
										<td>+91 123 456</td>
										<td>India</td>
										<td>07/07/2016</td>
									</tr>

									</tbody>
								</table>

							</div> <!-- table-responsive -->
						</div> <!-- end card -->
					</div>
					<!-- end col -->

					<div class="col-lg-6">
						<div class="card-box">
							<h4 class="header-title m-t-0 m-b-30">Recent Users</h4>

							<div class="table-responsive">
								<table class="table table table-hover m-0">
									<thead>
									<tr>
										<th></th>
										<th>User Name</th>
										<th>Phone</th>
										<th>Location</th>
										<th>Date</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<th>
											<span class="avatar-sm-box bg-success">L</span>
										</th>
										<td>
											<h5 class="m-0">Louis Hansen</h5>
											<p class="m-0 text-muted font-13"><small>Web designer</small></p>
										</td>
										<td>+12 3456 789</td>
										<td>USA</td>
										<td>07/08/2016</td>
									</tr>

									<tr>
										<th>
											<span class="avatar-sm-box bg-primary">C</span>
										</th>
										<td>
											<h5 class="m-0">Craig Hause</h5>
											<p class="m-0 text-muted font-13"><small>Programmer</small></p>
										</td>
										<td>+89 345 6789</td>
										<td>Canada</td>
										<td>29/07/2016</td>
									</tr>

									<tr>
										<th>
											<span class="avatar-sm-box bg-brown">E</span>
										</th>
										<td>
											<h5 class="m-0">Edward Grimes</h5>
											<p class="m-0 text-muted font-13"><small>Founder</small></p>
										</td>
										<td>+12 29856 256</td>
										<td>Brazil</td>
										<td>22/07/2016</td>
									</tr>

									<tr>
										<th>
											<span class="avatar-sm-box bg-pink">B</span>
										</th>
										<td>
											<h5 class="m-0">Bret Weaver</h5>
											<p class="m-0 text-muted font-13"><small>Web designer</small></p>
										</td>
										<td>+00 567 890</td>
										<td>USA</td>
										<td>20/07/2016</td>
									</tr>

									<tr>
										<th>
											<span class="avatar-sm-box bg-orange">M</span>
										</th>
										<td>
											<h5 class="m-0">Mark</h5>
											<p class="m-0 text-muted font-13"><small>Web design</small></p>
										</td>
										<td>+91 123 456</td>
										<td>India</td>
										<td>07/07/2016</td>
									</tr>

									</tbody>
								</table>

							</div> <!-- table-responsive -->
						</div> <!-- end card -->
					</div>
					<!-- end col -->

				</div>
				<!-- end row -->




			</div> <!-- container -->

		</div> <!-- content -->

		<footer class="footer text-right">
			2016 - 2018 © Zircos theme by Coderthemes.
		</footer>

	</div>


	<!-- ============================================================== -->
	<!-- End Right content here -->
	<!-- ============================================================== -->


	<!-- Right Sidebar -->
	<div class="side-bar right-bar">
		<a href="javascript:void(0);" class="right-bar-toggle">
			<i class="mdi mdi-close-circle-outline"></i>
		</a>
		<h4 class="">Settings</h4>
		<div class="setting-list nicescroll">
			<div class="row m-t-20">
				<div class="col-xs-8">
					<h5 class="m-0">Notifications</h5>
					<p class="text-muted m-b-0"><small>Do you need them?</small></p>
				</div>
				<div class="col-xs-4 text-right">
					<input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
				</div>
			</div>

			<div class="row m-t-20">
				<div class="col-xs-8">
					<h5 class="m-0">API Access</h5>
					<p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
				</div>
				<div class="col-xs-4 text-right">
					<input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
				</div>
			</div>

			<div class="row m-t-20">
				<div class="col-xs-8">
					<h5 class="m-0">Auto Updates</h5>
					<p class="m-b-0 text-muted"><small>Keep up to date</small></p>
				</div>
				<div class="col-xs-4 text-right">
					<input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
				</div>
			</div>

			<div class="row m-t-20">
				<div class="col-xs-8">
					<h5 class="m-0">Online Status</h5>
					<p class="m-b-0 text-muted"><small>Show your status to all</small></p>
				</div>
				<div class="col-xs-4 text-right">
					<input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
				</div>
			</div>
		</div>
	</div>
	<!-- /Right-bar -->

</div>
<!-- END wrapper -->


