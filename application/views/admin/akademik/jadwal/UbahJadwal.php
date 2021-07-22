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
							<h4 class="page-title">Dashboard Jadwal Kuliah </h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Jadwal Kuliah
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Ubah Jadwal Kuliah</b></h4>
						<?php foreach ($jadwal as $data):?>
						<form action="<?php echo base_url('proses_ubah_jadwal') ?>" method="post">
							<div class="card-box table-responsive">
								<div class="form-group">
									<label for="">Pilih Prodi</label>
									<input type="hidden" name="id" value="<?= $data['id']?>">
									<select name="prodi_id" id="prodi" class="form-control" required>
										<option value="">---Pilih Prodi---</option>
										<?php foreach ($prodi as $key1): ?>
											<option value="<?= $key1->id ?>"><?= $key1->nama_prodi ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Program</label>
									<select name="program_id" class="form-control" required>
										<option value="">---Pilih Program---</option>
										<?php foreach ($program as $key2): ?>
											<option value="<?= $key2->id ?>"><?= $key2->nama_program ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pilih Mata Kuliah</label>
									<select name="matkul_id" id="matkul" class="form-control" required>
										<option>No Selected</option>
									</select>
								</div>
								<div class="form-group">
									<label for="">Tahun</label>
									<input type="text" value="<?= $data['tahun']?>" name="tahun" class="form-control" placeholder="Tahun">
								</div>

								<div class="form-group">
									<label for="">Hari</label>
									<select name="hari" class="form-control" id="">
										<option value="<?= $data['hari']?>"><?= $data['hari']?></option>
										<option value="senin">senin</option>
										<option value="selasa">selasa</option>
										<option value="rabu">rabu</option>
										<option value="kamis">kamis</option>
										<option value="jumat">jumat</option>
										<option value="sabtu">sabtu</option>
										<option value="minggu">minggu</option>
									</select>
								</div>
								<div class="form-group">
									<label>Pukul</label>
									<div>
										<div class="input-daterange input-group">
											<input type="time" class="form-control" value="<?= $data['jadwal_masuk']?>" name="jadwal_masuk"/>
											<span class="input-group-addon bg-custom text-white b-0">to</span>
											<input type="time" class="form-control" value="<?= $data['jadwal_selesai']?>" name="jadwal_selesai"/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Nama Kelas</label>
									<input type="text" value="<?= $data['nama_kelas']?>" name="nama_kelas" class="form-control" placeholder="Nama Kelas">
								</div>
								<div class="form-group">
									<label for="">Kampus</label>
									<select name="kampus_id" id="kampus" class="form-control" required>
										<option value="">---Pilih Kampus---</option>
										<?php foreach ($kampus as $key1): ?>
											<option value="<?= $key1->id ?>"><?= $key1->nama_kampus ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label for="">Pilih Ruangan</label>
									<select name="ruangan" id="ruangan" class="form-control" required>
										<option>No Selected</option>
									</select>
								</div>

								<div class="form-group">
									<label for="">Pilih Dosen Pengampu</label>
									<select name="dosen" class="form-control" required>
										<?php foreach ($dosen as $key1): ?>
											<option value="<?= $key1->id ?>"><?= $key1->nama ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="form-group">
									<input type="submit" value="Simpan" class="btn btn-success">
								</div>
						</form>
						<?php endforeach;?>
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

</body>
<!-- END wrapper -->


