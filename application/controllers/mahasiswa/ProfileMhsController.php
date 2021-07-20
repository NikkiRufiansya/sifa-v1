<?php

class ProfileMhsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('MahasiswaModels');
		$this->load->model('ProgramStudiModels');
		$this->load->model('ProgramModels');
		$this->cek_login();
	}

	public function index()
	{
		$users_id = array('id' => $this->session->userdata('id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getMhsByUserId($this->session->userdata('id'));
		$data['users'] = $this->MahasiswaModels->getDataById('users', $users_id);
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/profile/DataProfile', $data);
		$this->load->view('admin/master/mahasiswa/footer');
	}

	public function ubahProfile()
	{
		$users_id = array('id' => $this->input->post('users_id'));
		$mahasiswa_id = array('id' => $this->input->post('id'));
		if ($this->input->post('new_password') == null) {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('old_password'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'mahasiswa'
			);
			$this->MahasiswaModels->update_data('users', $users_id, $dataUsers);
			$dataMhs = array(
				'users_id' => $this->input->post('users_id'),
				'prodi_id' => $this->input->post('prodi_id'),
				'kurikulum_id' => $this->input->post('kurikulum_id'),
				'program' => $this->input->post('program'),
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'angkatan' => $this->input->post('angkatan'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'status_sipil' => $this->input->post('status_sipil'),
				'alamat' => $this->input->post('alamat'),
				'status_awal' => $this->input->post('status_awal'),
				'ka_prodi' => $this->input->post('ka_prodi'),
				'foto' =>  $this->input->post('foto'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nik_ayah' => $this->input->post('nik_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nik_ibu' => $this->input->post('nik_ibu'),
				'no_tlpn_ortu' => $this->input->post('no_tlpn_ortu'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat_sekolah' => $this->input->post('alamat_sekolah'),
				'kota_sekolah' => $this->input->post('kota_sekolah'),
				'tlpn_sekolah' => $this->input->post('tlpn_sekolah'),
				'email_sekolah' => $this->input->post('email_sekolah')
			);
			$this->MahasiswaModels->update_data('mahasiswa', $mahasiswa_id, $dataMhs);
			redirect('data_profile_mahasiswa');
		} else {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('new_password')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'mahasiswa'
			);
			$this->MahasiswaModels->update_data('users', $users_id, $dataUsers);
			$dataMhs = array(
				'users_id' => $this->input->post('users_id'),
				'prodi_id' => $this->input->post('prodi_id'),
				'kurikulum_id' => $this->input->post('kurikulum_id'),
				'program' => $this->input->post('program'),
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'angkatan' => $this->input->post('angkatan'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'status_sipil' => $this->input->post('status_sipil'),
				'alamat' => $this->input->post('alamat'),
				'status_awal' => $this->input->post('status_awal'),
				'ka_prodi' => $this->input->post('ka_prodi'),
				'foto' => $this->input->post('foto'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nik_ayah' => $this->input->post('nik_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nik_ibu' => $this->input->post('nik'),
				'no_tlpn_ortu' => $this->input->post('no_tlpn_ortu'),
				'alamat_ortu' => $this->input->post('alamat_ortu'),
				'nama_sekolah' => $this->input->post('nama_sekolah'),
				'alamat_sekolah' => $this->input->post('alamat_sekolah'),
				'kota_sekolah' => $this->input->post('kota_sekolah'),
				'tlpn_sekolah' => $this->input->post('tlpn_sekolah'),
				'email_sekolah' => $this->input->post('email_sekolah')
			);
			$this->MahasiswaModels->update_data('mahasiswa', $mahasiswa_id, $dataMhs);
			redirect('data_profile_mahasiswa');
		}

	}
}
