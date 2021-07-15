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
							<h4 class="page-title">Dashboard Administrator</h4>
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
				<div class="row">
					<div class="col-sm-12">

						<h4 class="m-t-0 header-title"><b>Data Staff Admin</b></h4>

						<div class="card-box table-responsive">
							<a href="<?php echo base_url('tambah_admin')?>" class="btn btn-primary" style="margin-bottom: 20px;">Tambah Admin</a>
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
								<tr>
									<th>Nama</th>
									<th>Username</th>
									<th>Email</th>
									<th>Telepone</th>
									<th>Level</th>
									<th>Action</th>
								</tr>
								</thead>
								<tbody>
								<?php foreach ($users as $key):?>
								<tr>
									<td><?= $key->nama?></td>
									<td><?= $key->username?></td>
									<td><?= $key->email?></td>
									<td><?= $key->telepone?></td>
									<td><?= $key->level?></td>
									<td>
										<a href="<?php echo base_url()?>ubah_admin/<?= $key->id?>"><i class="glyphicon glyphicon-edit"></i></a>
										||
										<a id="danger-alert" href="<?php echo base_url()?>hapus_admin/<?= $key->id?>"><i class="glyphicon glyphicon-trash"></i></a>
									</td>
								</tr>
								<?php endforeach;?>
								</tbody>
							</table>
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


