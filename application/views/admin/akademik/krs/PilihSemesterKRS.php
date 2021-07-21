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
						<?php foreach ($mahasiswa as $mhs): ?>
						Nim : <b><span><?= $mhs['nim'] ?></span></b><br>
						Nama : <b><span><?= $mhs['nama'] ?></span></b>

						<div class="card-box table-responsive">

							<form action="<?php echo base_url('lihat_krs_semester') ?>" method="post">
								<input type="hidden" name="mahasiswa_id" value="<?= $mhs['id'] ?>">
								<input type="hidden" name="prodi_id" value="<?= $mhs['prodi_id'] ?>">
								<div class="form-group">
									<label for="">Lihat KRS Per Semester</label>
									<select name="semester" id="" class="form-control">
										<option value="">---Pilih Semester---</option>
										<option value="1"> Semester 1</option>
										<option value="2"> Semester 2</option>
										<option value="3"> Semester 3</option>
										<option value="4"> Semester 4</option>
										<option value="5"> Semester 5</option>
										<option value="6"> Semester 6 </option>
										<option value="7"> Semester 7 </option>
										<option value="8"> Semester 8 </option>
										<option value="9"> Semester 9 </option>
										<option value="10"> Semester 10 </option>
										<option value="11"> Semester 11 </option>
										<option value="12"> Semester 12 </option>
										<option value="13"> Semester 13 </option>
										<option value="14"> Semester 14 </option>
									</select>
								</div>
								<div class="form-group">
									<input type="submit" value="Lanjut" class="btn btn-success">
								</div>
							</form>
<!--							<a href="--><?php //echo base_url()?><!--lihat_krs_all_semester/--><?//= $mhs['id']?><!--" class="btn btn-danger">Lihat Semua Semester</a>-->

							<?php endforeach; ?>
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


