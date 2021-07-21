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
							<h4 class="page-title">Dashboard Data KRS Mahasiswa</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									KRS Mahasiswa
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="m-t-0 header-title"><b>Pilih Matkul</b></h4>
						<div class="card-box table-responsive">
							<form action="<?php echo base_url('admin_cetak_krs_semester') ?>" method="post"
								  target="_blank">
								<?php foreach ($mahasiswa as $mhs): ?>
							Nim : <span><?= $mhs['nim'] ?></span><br>
							Nama : <span><?= $mhs['nama'] ?></span>
							<input type="hidden" name="nim" value="<?= $mhs['nim'] ?>">
							<input type="hidden" name="nama" value="<?= $mhs['nama'] ?>">
							<input type="hidden" name="id" value="<?= $mhs['id'] ?>">

							<?php foreach ($semester as $sm): ?>
								<input type="hidden" name="semester" value="<?= $sm ?>">
							<?php endforeach; ?>
							<?php foreach ($prodi_id as $pd): ?>
								<input type="hidden" name="prodi_id" value="<?= $pd ?>">
							<?php endforeach; ?>
								<table id="datatable" class="table table-striped table-bordered">
									<thead>
									<tr>
										<th>Kode Matkul</th>
										<th>Nama Matkul</th>
										<th>Semester</th>
										<th>SKS</th>
										<th>Jam Kuliah</th>
										<th>Dosen</th>

									</tr>
									</thead>
									<tbody>
									<?php foreach ($krs as $key): ?>
										<tr>
											<td><?= $key->kode_matkul ?></td>
											<td><?= $key->nama_matkul ?></td>
											<td><?= $key->semester ?></td>
											<td><?= $key->sks ?></td>
											<td><?= $key->jadwal_masuk ?> - <?= $key->jadwal_selesai ?></td>
											<td><?= $key->nama ?></td>

										</tr>
									<?php endforeach; ?>
									<?php endforeach; ?>
									</tbody>
								</table>
								<?php
								$sks = array();
								foreach ($krs as $sks1 => $value) {
									$sks[$sks1] = $value->sks;
								}
								$sksTotal = array_sum($sks);
								echo '<b>Jumlah Pengambilan SKS : ' . $sksTotal . '</b>';
								echo '<br><br>'
								?>
								<div class="form-group">
									<input type="submit" value="Cetak" class="btn btn-success">
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


