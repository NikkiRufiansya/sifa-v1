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
							<h4 class="page-title">Dashboard Data Mahasiswa</h4>
							<ol class="breadcrumb p-0 m-0">
								<li>
									<a href="#">Zircos</a>
								</li>
								<li>
									<a href="#">Master</a>
								</li>
								<li class="active">
									Mahasiswa
								</li>
							</ol>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">

						<div class="card-box table-responsive">
							<?php foreach ($mahasiswa as $mhs): ?>
								<?php foreach ($users as $user): ?>
									<form action="<?php echo base_url('proses_ubah_profile_mahasiswa') ?>"
										  method="post" enctype="multipart/form-data">
										<input type="hidden" name="id" value="<?= $mhs->id?>">
										<input type="hidden" name="users_id" value="<?= $user['id']?>">
										<input type="hidden" name="prodi_id" value="<?= $mhs->prodi_id ?>">
										<input type="hidden" name="kurikulum_id" value="<?= $mhs->kurikulum_id?>">
										<input type="hidden" name="foto" value="<?= $mhs->foto?>">
										<h4 class="m-t-0 header-title"><b>Data Mahasiswa</b></h4>
										<hr>
										<div class="form-group">
											<label for="">Program</label>
											<input type="text" name="program" value="<?= $mhs->program?>" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label for="">Nama Lengkap</label>
											<input type="text" value="<?= $mhs->nama ?>" name="nama"
												   class="form-control" placeholder="Nama Lengkap" id="">
										</div>
										<div class="form-group">
											<label for="">Nomor Induk Mahasiswa</label>
											<input type="text" value="<?= $mhs->nim ?>" name="nim"
												   class="form-control" id="nim" readonly placeholder="Nomor Induk Mahasiswa">
										</div>
										<div class="form-group">
											<label for="">Username</label>
											<input type="text" value="<?= $user['username'] ?>" name="username"
												   class="form-control" placeholder="Username" readonly id="">
										</div>
										<div class="form-group">
											<label for="">Ganti Password</label>
											<input type="hidden" name="old_password" value="<?= $user['password'] ?>">
											<input type="password" name="new_password"
												   placeholder="silahkan isi jika ingin ganti password"
												   class="form-control" id="">
										</div>
										<div class="form">
											<label for="">Angkatan Ke - </label>
											<input type="text" value="<?= $mhs->angkatan ?>" name="angkatan"
												   class="form-control"
												   placeholder="Angkatan ke" readonly>
										</div>
										<div class="form-group">
											<label for="">Email</label>
											<input type="email" value="<?= $mhs->email ?>" name="email"
												   class="form-control" placeholder="Email"
												   id="" readonly>
										</div>
										<div class="form-group">
											<label for="">Telepone</label>
											<input type="text" value="<?= $mhs->telepone ?>" name="telepone"
												   class="form-control"
												   placeholder="Telepone">
										</div>
										<div class="form-group">
											<label for="">Tempat Lahir</label>
											<input type="text" value="<?= $mhs->tempat_lahir ?>" name="tempat_lahir"
												   class="form-control" placeholder="Tempat Lahir">
										</div>
										<div class="form-group">
											<label for="">Tanggal Lahir</label>
											<input type="date" value="<?= $mhs->tanggal_lahir ?>" name="tanggal_lahir"
												   class="form-control" placeholder="Tanggal Lahir" id="">
										</div>
										<div class="form-group">
											<label for="">Jenis Kelamin</label>
											<select name="jenis_kelamin" class="form-control" id="">
												<?php
												if ($mhs->jenis_kelamin == 'pria') {
													echo '<option value="pria">Pria</option>';
												} else if ($mhs->jenis_kelamin == 'wanita') {
													echo '<option value="wanita">Wanita</option>';
												}
												?>
												<option value="pria">Pria</option>
												<option value="wanita">Wanita</option>
											</select>
										</div>
										<div class="form-group">
											<label for="userAgama">Agama<span class="text-danger">*</span></label>
											<select name="agama" id="" class="form-control">
												<option value="<?= $mhs->agama ?>"><?= $mhs->agama ?></option>
												<option value="islam">Islam</option>
												<option value="katolik">Katolik</option>
												<option value="protestan">Protestan</option>
												<option value="hindu">Hindu</option>
												<option value="budha">Budha</option>
												<option value="konghucu">Konghucu</option>
												<option value="lain-lainnya">Lain - Lainnya</option>
											</select>
										</div>
										<div class="form-group">
											<label for="">Status Sipil</label>
											<select name="status_sipil" class="form-control" id="">
												<?php
												if ($mhs->status_sipil == 'belum_menikah') {
													echo '<option value=belum_menikah>Belum Menikah</option>';
												} else if ($mhs->status_sipil == 'sudah_menikah') {
													echo '<option value="sudah_menikah">Sudah Menikah</option>';
												}
												?>
												<option value=belum_menikah>Belum Menikah</option>
												<option value="sudah_menikah">Sudah Menikah</option>
											</select>
										</div>
										<div class="form-group">
											<label for="">Alamat</label>
											<input type="text" value="<?= $mhs->alamat ?>" name="alamat"
												   class="form-control" placeholder="Alamat">
										</div>
										<div class="form-group">
											<input type="hidden" name="status_awal" value="<?= $mhs->status_awal?>">


										</div>
										<div class="form-group">
											<label for="">Ka Prodi</label>
											<input type="text" value="<?= $mhs->ka_prodi ?>" name="ka_prodi"
												   class="form-control" placeholder="Ka Prodi" readonly>
										</div>
										<h4 class="m-t-0 header-title"><b>Data Orang Tua</b></h4>
										<hr>
										<div class="form-group">
											<label for="">Nama Ayah</label>
											<input type="text" name="nama_ayah" value="<?= $mhs->nama_ayah?>" class="form-control" placeholder="Nama Ayah">
										</div>
										<div class="form-group">
											<label for="">NIK KTP Ayah</label>
											<input type="text" name="nik_ayah" value="<?= $mhs->nik_ayah?>" class="form-control" placeholder="NIK KTP Ayah">
										</div>

										<div class="form-group">
											<label for="">Nama Ibu</label>
											<input type="text" name="nama_ibu" value="<?= $mhs->nama_ibu?>" class="form-control" placeholder="Nama Ibu">
										</div>
										<div class="form-group">
											<label for="">NIK KTP Ibu</label>
											<input type="text" name="nik_ibu" value="<?= $mhs->nik_ibu?>" class="form-control" placeholder="NIK KTP Ibu">
										</div>

										<div class="form-group">
											<label for="">No Telepone Ortu</label>
											<input type="text" name="no_tlpn_ortu" value="<?= $mhs->no_tlpn_ortu?>" class="form-control" placeholder="No Telepone Ortu">
										</div>

										<div class="form-group">
											<label for="">Alamat Ortu</label>
											<input type="text" name="alamat_ortu" value="<?= $mhs->alamat_ortu?>" class="form-control" placeholder="Alamat Ortu">
										</div>


										<h4 class="m-t-0 header-title"><b>Data Asal Sekolah</b></h4>
										<hr>

										<div class="form-group">
											<label for="">Nama Sekolah</label>
											<input type="text" name="nama_sekolah" value="<?= $mhs->nama_sekolah?>" class="form-control" placeholder="Nama Sekolah">
										</div>

										<div class="form-group">
											<label for="">Alamat Sekolah</label>
											<input type="text" name="alamat_sekolah" value="<?= $mhs->alamat_sekolah?>" class="form-control" placeholder="Alamat Sekolah">
										</div>

										<div class="form-group">
											<label for="">Kota Sekolah</label>
											<input type="text" name="kota_sekolah" value="<?= $mhs->kota_sekolah?>" class="form-control"  placeholder="Kota Sekolah">
										</div>

										<div class="form-group">
											<label for="">Telepone Sekolah</label>
											<input type="text" name="tlpn_sekolah" value="<?= $mhs->tlpn_sekolah?>" class="form-control" placeholder="Telepone Sekolah">
										</div>

										<div class="form-group">
											<label for="">Email Sekolah</label>
											<input type="email" name="email_sekolah" value="<?= $mhs->email_sekolah?>" class="form-control" placeholder="Email Sekolah">
										</div>

										<div class="form-group">
											<input type="submit" value="Simpan" class="btn btn-success">
										</div>
									</form>
								<?php endforeach; ?>
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


