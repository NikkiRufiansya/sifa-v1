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
						<a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
						   aria-expanded="true">
							<img src="<?php echo base_url() ?>assets/images/users/avatar-1.jpg" alt="user-img"
								 class="img-circle user-img">
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


	<?php require 'Sidebar.php'?>

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
							<h4 class="page-title">Dashboard Identitas Institusi</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Identitas Insitusi
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Tambah Data Indentitas Institusi</b></h4>
						<div class="card-box table-responsive">
							<form action="<?php echo base_url('proses_tambah_institusi')?>" method="post">
								<div class="form-group">
									<label for="">Kode Hukum</label>
									<input type="text" name="kode_hukum" class="form-control" placeholder="Enter Kode Hukum" id="">
								</div>
								<div class="form-group">
									<label for="">Nama Institusi</label>
									<input type="text" name="nama_identitas" class="form-control" placeholder="Enter Nama Institusi" id="">
								</div>
								<div class="form-group">
									<label for="">Tanggal Mulai</label>
									<input type="date" name="tanggal_mulai" class="form-control" placeholder="Enter Tanggal Mulai" id="">
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Enter Alamat" id="">
								</div>
								<div class="form-group">
									<label for="">Kota</label>
									<input type="text" name="kota" class="form-control" placeholder="Enter Kota" id="">
								</div>
								<div class="form-group">
									<label for="">Kode Pos</label>
									<input type="text" name="kode_pos" class="form-control" placeholder="Enter Kode POS" id="">
								</div>
								<div class="form-group">
									<label for="">Telepone</label>
									<input type="text" name="telepone" class="form-control" placeholder="Enter Telepone" id="">
								</div>
								<div class="form-group">
									<label for="">Fax</label>
									<input type="text" name="fax" class="form-control" placeholder="Enter fax" id="">
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" name="email" class="form-control" placeholder="Enter Email" id="">
								</div>
								<div class="form-group">
									<label for="">Website</label>
									<input type="text" name="website" class="form-control" placeholder="Enter url Website" id="">
								</div>
								<div class="form-group">
									<label for="">No Akta</label>
									<input type="text" name="no_akta" class="form-control" placeholder="Enter No Akta" id="">
								</div>
								<div class="form-group">
									<label for="">No Sah</label>
									<input type="text" name="no_sah" class="form-control" placeholder="Enter No Sah" id="">
								</div>
								<div class="form-group">
									<label for="">Tanggal SAH</label>
									<input type="date" name="tanggal_sah" class="form-control" placeholder="Enter Kode Hukum" id="">
								</div>
								<div class="form-group">

									<input type="submit" name="Submit" class="btn btn-success" >
								</div>
							</form>
						</div>
					</div>
				</div>


			</div>

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

