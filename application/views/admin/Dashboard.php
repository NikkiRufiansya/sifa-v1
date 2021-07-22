<body class="fixed-left">
<div id="wrapper">
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

					<div class="col-lg-3 col-md-6">
						<div class="card-box widget-box-two widget-two-primary">
							<div class="wigdet-two-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">
									Total Mahasiswa</p>
								<?php foreach ($totalMhs as $totalMh): ?>
									<h2><?= $totalMh->mahasiswa ?></h2>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card-box widget-box-two widget-two-warning">
							<div class="wigdet-two-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">
									Total Dosen</p>
								<?php foreach ($totalDosen as $totalDosen): ?>
									<h2><?= $totalDosen->dosen ?></h2>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card-box widget-box-two widget-two-danger">
							<div class="wigdet-two-content">
								<p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">
									Total Program Studi</p>
								<?php foreach ($totalProdi as $prodi): ?>
									<h2><?= $prodi->program_studi ?></h2>
								<?php endforeach; ?>
							</div>
						</div>
					</div>

				</div>
				<!-- end row -->
				<?php foreach ($institusi as $key): ?>
					<div class="row">
						<div class="col-md-2">
							<b>Kode Hukum</b>
						</div>
						<div class="col-md-2">
							: <b><?= $key['kode_hukum']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Nama Institusi</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['nama_identitas']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Tanggal Berdiri</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['tanggal_mulai']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Alamat Institusi</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['alamat']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Kota</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['kota']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Kode POS</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['kode_pos']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Telepone</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['telepone']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Fax</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['fax']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Email</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['email']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Website</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['website']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>No Akta</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['nama_identitas']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>No Sah</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['no_sah']?></b>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<b>Tanggal Sah</b>
						</div>
						<div class="col-md-10">
							: <b><?= $key['tanggal_sah']?></b>
						</div>
					</div>
				<?php endforeach; ?>

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


