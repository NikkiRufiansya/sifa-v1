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
							<h4 class="page-title">Dashboard Kalender Akademik</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Kalender Akademik
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Ubah Kalender Akademik</b></h4>
						<div class="card-box table-responsive">
							<?php foreach ($kalender as $data):?>
							<form action="<?php echo base_url('proses_ubah_kalender')?>" method="post">
								<div class="form-group">
									<input type="hidden" name="id" value="<?= $data['id']?>">
									<label for="">Tahun Kalender</label>
									<input type="text" value="<?= $data['tahun']?>" name="tahun" class="form-control" placeholder="Tahun">
								</div>
								<div class="form-group">
									<label for="">Nama Kalender</label>
									<input type="text" value="<?= $data['nama_kalender']?>" name="nama_kalender" class="form-control" placeholder="Nama">
								</div>
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
									<label for="">Program</label>
									<select name="program_id"  class="form-control" required>
										<option value="">---Pilih Program---</option>
										<?php foreach ($program as $key2): ?>
											<option value="<?= $key2->id ?>"><?= $key2->nama_program ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label>KRS</label>
									<div>
										<div class="input-daterange input-group">
											<input type="date" value="<?= $data['krs_mulai']?>" class="form-control" placeholder="KRS Mulai" name="krs_mulai" />
											<span class="input-group-addon bg-custom text-white b-0">to</span>
											<input type="date" value="<?= $data['krs_selesai']?>" class="form-control" placeholder="KRS Selesai" name="krs_selesai" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Ujian Tengan Semester</label>
									<div>
										<div class="input-daterange input-group">
											<input type="date" value="<?= $data['uts_mulai']?>" class="form-control" placeholder="UTS Mulai" name="uts_mulai" />
											<span class="input-group-addon bg-custom text-white b-0">to</span>
											<input type="date" value="<?= $data['uts_selesai']?>" class="form-control" placeholder="UTS Selesai" name="uts_selesai" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Ujian Akhir Semester</label>
									<div>
										<div class="input-daterange input-group">
											<input type="date" value="<?= $data['uas_mulai']?>" class="form-control" placeholder="UAS Mulai" name="uas_mulai" />
											<span class="input-group-addon bg-custom text-white b-0">to</span>
											<input type="date" value="<?= $data['uas_selesai']?>" class="form-control" placeholder="UAS Selesai" name="uas_selesai" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Input Nilai</label>
									<div>
										<div class="input-daterange input-group">
											<input type="date" value="<?= $data['input_nilai_mulai']?>" class="form-control" placeholder="Input Nilai Mulai" name="input_nilai_mulai" />
											<span class="input-group-addon bg-custom text-white b-0">to</span>
											<input type="date" value="<?= $data['input_nilai_selesai']?>" class="form-control" placeholder="Input Nilai Selesai" name="input_nilai_selesai" />
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="">Cetak KHS</label>
									<input type="date" value="<?= $data['cetak_khs']?>" name="cetak_khs" class="form-control" placeholder="cetak khs" id="">
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

</div>
<!-- END wrapper -->


