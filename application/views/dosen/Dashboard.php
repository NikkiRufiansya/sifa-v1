<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">


	<!-- ========== Left Sidebar Start ========== -->

	<!-- Left Sidebar End -->


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
							<h4 class="page-title">Dashboard Dosen</h4>
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
					<div class="col-sm-12">
						<div class="card-box">
							<div class="row">
								<div class="col-lg-3 col-md-4">
									<div class="text-center card-box">
										<?php foreach ($dosen as $ds): ?>
										<div class="member-card">
											<div class="thumb-xl member-thumb m-b-10 center-block">
												<img src="<?php echo base_url(); ?>assets/images/fotoDosen/<?= $ds->foto;?>?>"
													 class="img-circle img-thumbnail" alt="profile-image">
												<i class="mdi mdi-star-circle member-star text-success"
												   title="verified user"></i>

											</div>
											<a href="<?php echo base_url('ganti_foto_dosen')?>">Ganti Foto</a>
											<div class="">
												<h4 class="m-b-5"><?php echo $this->session->userdata('nama') ?></h4>
												<h5><?= $ds->nik ?></h5>
												<div class="text-left">
													<p class="text-muted font-13"><strong>Full Name : </strong> <span class="m-l-16"><?= $ds->nama?></span></p>

													<p class="text-muted font-13"><strong>Telepone : </strong><span class="m-l-16"><?= $ds->telepone?></span></p>

													<p class="text-muted font-13"><strong>Email : </strong> <span class="m-l-20	"><?= $ds->email?></span></p>

													<p class="text-muted font-13"><strong>Location : </strong> <span class="m-l-16"><?= $ds->alamat?></span></p>
												</div>

											</div>
										</div>
									<?php endforeach; ?>
									</div> <!-- end card-box -->

								</div> <!-- end col -->

								<div class="col-md-8 col-lg-9">
									<h4>Pengumuman</h4>
									<hr/>
									<?php foreach ($pengumuman as $pg):?>
									<ul>
										<li><a href="<?php echo base_url()?>read_pengumuman_dosen/<?= $pg->id?>"><?= $pg->judul?></a> <span class="text-orange"><?= $pg->tanggal?></span></li>
									</ul>

									<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>

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


