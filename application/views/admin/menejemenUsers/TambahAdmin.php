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
							<h4 class="page-title">Tambah Staff Admin</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Manajemen Users</a>
								</li>
								<li class="active">
									Staff Administrator
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="container">
					<form action="<?php echo base_url('proses_tambah_admin')?>" method="post" class="data-parsley-validate novalidate">

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
							<label for="userName">Telepone<span class="text-danger">*</span></label>
							<input type="text" name="telepone" parsley-trigger="change" required
								   placeholder="Enter Telepone" class="form-control" id="telepone">
						</div>

						<div class="form-group">
							<label for="userName">Level User<span class="text-danger">*</span></label>
							<select name="level" id="" class="form-control">
								<option readonly="">Pilih Level</option>
								<option value="admin">Admin</option>
								<option value="akademik">Akademik</option>
								<option value="marketing">Marketing</option>
								<option value="keuangan">Keuangan</option>
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


