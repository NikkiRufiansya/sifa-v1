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
								<h5><?php echo $this->session->userdata('nama') ?></h5>
							</li>
							<li><a href="<?php echo base_url('logout') ?>"><i class="ti-power-off m-r-5"></i> Logout</a>
							</li>
						</ul>
					</li>

				</ul> <!-- end navbar-right -->

			</div><!-- end container -->
		</div><!-- end navbar -->
	</div>
	<!-- Top Bar End -->




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
							<h4 class="page-title">Dashboard Data Mahasiswa</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Mahasiswa
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Tambah Data Mahasiswa</b></h4>
						<div class="card-box table-responsive">
							<form action="<?php echo base_url('proses_tambah_mahasiswa') ?>" method="post">
								<div class="form-group">
									<label for="">Pilih Prodi</label>
									<select name="prodi_id" id="prodi" class="form-control" required>
										<option value="">---Pilih Prodi---</option>
										<?php foreach ($prodi as $key1): ?>
											<option value="<?= $key1->id ?>"><?= $key1->nama_prodi ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pilih Kurikulum</label>
									<select name="kurikulum_id" id="kurikulum" class="form-control" required>
										<option>No Selected</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Program</label>
									<select name="program"  class="form-control" required>
										<option value="">---Pilih Program---</option>
										<?php foreach ($program as $key2): ?>
											<option value="<?= $key2->nama_program ?>"><?= $key2->nama_program ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Nama Lengkap</label>
									<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" id="">
								</div>
								<div class="form-group">
									<label for="">Nomor Induk Mahasiswa</label>
									<input type="text" name="nim" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa">
								</div>
								<div class="form-group">
									<label for="">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Username" id="">
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" name="password" class="form-control" id="">
								</div>
								<div class="form">
									<label for="">Angkatan Ke - </label>
									<input type="text" name="angkatan" class="form-control" placeholder="Angkatan ke">
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="email" name="email" class="form-control" placeholder="Email" id="">
								</div>
								<div class="form-group">
									<label for="">Telepone</label>
									<input type="text" name="telepone" class="form-control" placeholder="Telepone">
								</div>
								<div class="form-group">
									<label for="">Tempat Lahir</label>
									<input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
								</div>
								<div class="form-group">
									<label for="">Tanggal Lahir</label>
									<input type="date" name="tanggal_lahir"  class="form-control" placeholder="Tanggal Lahir" id="">
								</div>
								<div class="form-group">
									<label for="">Jenis Kelamin</label>
									<select name="jenis_kelamin" class="form-control" id="">
										<option value="">---Pilih Jenis Kelamin---</option>
										<option value="pria">Pria</option>
										<option value="wanita">Wanita</option>
									</select>
								</div>
								<div class="form-group">
									<label for="userAgama">Agama<span class="text-danger">*</span></label>
									<select name="agama" id="" class="form-control">
										<option readonly>Pilih Agama</option>
										<option value="islam">Islam</option>
										<option value="katolik">Katolik</option>
										<option value="protestan">Protestan</option>
										<option value="hindu">Hindu</option>
										<option value="budha">Budha</option>
										<option value="konghucu">Konghucu</option>
										<option value="lain-lainnya">Lain - Lainnya</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Status Sipil</label>
									<select name="status_sipil" class="form-control" id="">
										<option value="">Pilih Status Sipil</option>
										<option value=belum_menikah>Belum Menikah</option>
										<option value="sudah_menikah">Sudah Menikah</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat">
								</div>
								<div class="form-group">
									<label for="">Status Awal</label>
									<select name="status_awal" class="form-control" id="">
										<option value="">Pilih Status Awal</option>
										<option value=baru>BARU</option>
										<option value="pindahan">PINDAHAN</option>
										<option value="pssb">PSSB</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Ka Prodi</label>
									<input type="text" name="ka_prodi" class="form-control" placeholder="Ka Prodi">
								</div>
								<div class="form-group">
									<input type="submit" value="Simpan" class="btn btn-success">
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


