<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

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
							<h4 class="page-title">Tambah Dosen</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Dosen
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="container">
					<form action="<?php echo base_url('proses_tambah_dosen')?>" method="post" class="data-parsley-validate novalidate">

						<div class="form-group">
							<label for="userName">Username<span class="text-danger">*</span></label>
							<input type="text" name="username" parsley-trigger="change" required
								   placeholder="Enter user name" class="form-control" id="userName">
						</div>

						<div class="form-group">
							<label for="pass1">Password<span class="text-danger">*</span></label>
							<input id="pass1"  name="password" type="password" placeholder="Password" required
								   class="form-control">
						</div>

						<div class="form-group">
							<label for="userName">NIK<span class="text-danger">*</span></label>
							<input type="text" name="nik" parsley-trigger="change" required
								   placeholder="Enter NIK" class="form-control" id="telepone">
						</div>

						<div class="form-group">
							<label for="userName">Nama<span class="text-danger">*</span></label>
							<input type="text" name="nama" parsley-trigger="change" required
								   placeholder="Enter user name" class="form-control" id="userName">
						</div>

						<div class="form-group">
							<label for="emailAddress">Email address<span class="text-danger">*</span></label>
							<input type="email" name="email" parsley-trigger="change" required
								   placeholder="Enter email" class="form-control" id="emailAddress">
						</div>


						<div class="form-group">
							<label for="userTelepone">Telepone<span class="text-danger">*</span></label>
							<input type="text" name="telepone" parsley-trigger="change" required
								   placeholder="Enter Telepone" class="form-control" id="telepone">
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
							<label for="userAlamat">Alamat<span class="text-danger">*</span></label>
							<input type="text" name="alamat" parsley-trigger="change" required
								   placeholder="Enter Alamat" class="form-control" id="alamat">
						</div>

						<div class="form-group">
							<label for="userTempatLahir">Tempat Lahir<span class="text-danger">*</span></label>
							<input type="text" name="tempat_lahir" parsley-trigger="change" required
								   placeholder="Enter Tempat Lahir" class="form-control" id="tempat_lahir">
						</div>

						<div class="form-group">
							<label for="userTempatLahir">Tempat Lahir<span class="text-danger">*</span></label>
							<input type="date" name="tanggal_lahir" id="" class="form-control">
						</div>

						<div class="form-group">
							<label for="userGelar">Gelar<span class="text-danger">*</span></label>
							<input type="text" name="gelar" id="" placeholder="Enter Gelar" class="form-control">
						</div>

						<div class="form-group">
							<label for="jenisKelamin">Jenis Kelamin<span class="text-danger">*</span></label>
							<select name="jenis_kelamin" id="" class="form-control">
								<option readonly="">Pilih Jenis Kelamin</option>
								<option value="pria">Pria</option>
								<option value="wanita">Wanita</option>
							</select>
						</div>

						<div class="form-group text-right m-b-0">
							<input type="submit" value="submit" class="btn btn-success">
						</div>

					</form>
				</div>


			</div>

		</div> <!-- content -->

		<footer class="footer text-right">
			2016 - 2018 ?? Zircos theme by Coderthemes.
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


