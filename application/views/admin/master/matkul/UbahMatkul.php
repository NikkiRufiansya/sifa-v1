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
							<h4 class="page-title">Dashboard matkul </h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									matkul
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Tambah matkul</b></h4>
						<div class="card-box table-responsive">
							<?php foreach ($matkul as $key): ?>
								<form action="<?php echo base_url('proses_ubah_matkul') ?>" method="post">
									<div class="form-group">
										<label for="">Ganti Prodi</label>
										<input type="hidden" name="id" value="<?= $key['id'] ?>">
										<select name="new_prodi_id" id="prodi" class="form-control" required>
											<option value="">---Ganti Prodi---</option>
											<?php foreach ($prodi as $key1): ?>
												<option value="<?= $key1->id ?>"><?= $key1->nama_prodi ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<label for="">Ganti Kurikulum</label>
										<select name="new_kurikulum_id" id="kurikulum" class="form-control" required>
											<option>No Selected</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Kelompok Matkul</label>
										<select name="kelompok_matkul" id="" class="form-control">
											<?php
											switch ($key['kelompok_matkul']) {
												case 'keahlian':
													echo '<option value="keahlian">Mata Kuliah Keahlian</option>';
													break;
												case 'umum':
													echo '<option value="umum">Mata Kuliah Umum</option>';
													break;
												case 'khusus':
													echo '<option value="khusus">Mata Kuliah Khusus</option>';
													break;
											}
											?>
											<option value="umum">Mata Kuliah Umum</option>
											<option value="keahlian">Mata Kuliah Keahlian</option>
											<option value="khusus">Mata Kuliah Khusus</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Jenis Matkul</label>
										<select name="jenis_matkul" id="" class="form-control">
											<?php
											switch ($key['kelompok_matkul']) {
												case 'wajib':
													echo '<option value="wajib">WAJIB</option>';
													break;
												case 'pilihan':
													echo '<option value="pilihan">PILIHAN</option>';
													break;
												case 'peminatan':
													echo '<option value="peminatan">PEMINATAN</option>';
													break;
											}
											?>
											<option value="wajib">WAJIB</option>
											<option value="pilihan">PILIHAN</option>
											<option value="peminatan">PEMINATAN</option>
										</select>
									</div>
									<div class="form-group">
										<label for="">Kode Matkul</label>
										<input type="text" value="<?= $key['kode_matkul']?>" name="kode_matkul" id="" class="form-control"
											   placeholder="Kode Matkul">
									</div>
									<div class="form-group">
										<label for="">Nama Matkul</label>
										<input type="text" value="<?= $key['nama_matkul']?>" name="nama_matkul" class="form-control"
											   placeholder="Nama Matkul">
									</div>
									<div class="form-group">
										<label for="">Semester</label>
										<input type="text" value="<?= $key['semester']?>" name="semester" class="form-control" placeholder="Semester">
									</div>
									<div class="form-group">
										<label for="">Jumlah SKS</label>
										<input type="text" value="<?= $key['sks']?>" name="sks" class="form-control" placeholder="Jumlah SKS">
									</div>
									<div class="form-group">
										<label for="">Ganti Penangung Jawab</label>
										<select name="new_penanggung_jawab" class="form-control" required>
											<option value="">---Ganti Dosen Penanggung Jawab---</option>
											<?php foreach ($dosen as $key1): ?>
												<option value="<?= $key1->nama ?>"><?= $key1->nama ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="form-group">
										<input type="submit" value="Simpan" class="btn btn-success">
									</div>
								</form>
							<?php endforeach; ?>
						</div>
					</div>
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


