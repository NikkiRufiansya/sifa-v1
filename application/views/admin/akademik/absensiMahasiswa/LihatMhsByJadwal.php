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
							<h4 class="page-title">Dashboard Data Absensi Mahasiswa</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Absensi Mahasiswa
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box table-responsive">
							<form action="<?php echo base_url('simpan_absensi_mahasiswa') ?>" method="post">
								<div class="form-group">
									<label for="">Pilih Pertemuan</label>
									<select name="pertemuan" class="form-control" id="">
										<option value="">Pilih Pertemuan Ke -</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="3">6</option>
										<option value="4">7</option>
										<option value="5">8</option>
										<option value="3">9</option>
										<option value="4">10</option>
										<option value="5">11</option>
										<option value="3">12</option>
										<option value="4">13</option>
										<option value="5">14</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tanggal Kehadiran</label>
									<input type="date" name="tanggal_kehadiran" class="form-control" id="">
								</div>
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>Nama Mahasiswa</th>
										<th>Status</th>

									</tr>
									</thead>
									<tbody>
									<?php foreach ($jadwal as $key): ?>
										<tr>
											<td><?= $key->nama ?></td>
											<td>
												<select name="status[]" id="" class="form-control">
													<option value="">Pilih Status Kehadiran</option>
													<option value="Hadir">Hadir</option>
													<option value="Sakit">Sakit</option>
													<option value="Izin">Izin</option>
													<option value="Alpa">Alpa</option>
												</select>
											</td>
											<input type="hidden" name="mahasiswa_id[]" value="<?= $key->mahasiswa_id ?>">
											<input type="hidden" name="jadwal_id" value="<?= $key->jadwal_id ?>">
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
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


