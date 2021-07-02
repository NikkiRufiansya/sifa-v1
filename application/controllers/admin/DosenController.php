<?php

class DosenController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('DosenModels');
		$this->cek_login();
	}

	public function index()
	{
		$users['dosen'] = $this->DosenModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/dosen/Dosen', $users);
		$this->load->view('partials/footer');
	}

	public function tambahDosen()
	{
		$this->load->view('partials/head');
		$this->load->view('admin/master/dosen/TambahDosen');
		$this->load->view('partials/footer');
	}

	public function prosesTambahDosen()
	{
		$dataUsers = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepone' => $this->input->post('telepone'),
			'level' => 'dosen'
		);
		$users_id = $this->DosenModels->insert('users',$dataUsers);

		$dataDosen = array(
			'users_id' => $users_id,
			'nama' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'agama' => $this->input->post('agama'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'email' => $this->input->post('email'),
			'telepone' => $this->input->post('telepone'),
			'gelar' => $this->input->post('gelar'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'foto' => 'default_profile.png'
		);

		$this->DosenModels->insert('dosen',$dataDosen);
		redirect(base_url('admin_dosen'));
	}
}
