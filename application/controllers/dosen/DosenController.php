<?php

class DosenController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('DosenModels');
		$this->load->model('PengumumanModels');
		$this->load->model('JadwalModels');
		$this->load->model('AbsensiDosenModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['dosen'] = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		$data['pengumuman'] = $this->PengumumanModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/Dashboard', $data);
		$this->load->view('partials/footer');
	}

	public function profileDosen()
	{
		$data['dosen'] = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		$users_id = array('id' => $this->session->userdata('id'));
		$data['users'] = $this->DosenModels->getDataById('users', $users_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/profile/DataProfile', $data);
		$this->load->view('partials/footer');
	}

	public function prosesUbahDosen()
	{
		$users_id = array('id' => $this->input->post('users_id'));
		$dosen_id = array('id' => $this->input->post('dosen_id'));
		if ($this->input->post('new_password') == null) {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('old_password'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'dosen'
			);
			$this->DosenModels->update_data('users', $users_id, $dataUsers);
			$dataDosen = array(
				'users_id' => $this->input->post('users_id'),
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
				'foto' => $this->input->post('foto')
			);
			$this->DosenModels->update_data('dosen', $dosen_id, $dataDosen);
			redirect('data_profile_dosen');
		} else {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('new_password')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'dosen'
			);
			$this->DosenModels->update_data('users', $users_id, $dataUsers);
			$dataDosen = array(
				'users_id' => $this->input->post('users_id'),
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
				'foto' => $this->input->post('foto')
			);
			$this->DosenModels->update_data('dosen', $dosen_id, $dataDosen);
			redirect('data_profile_dosen');
		}
	}

	public function gantiFotoDosen()
	{
		$data['dosen'] = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/GantiFoto', $data);
		$this->load->view('partials/footer');
	}

	public function prosesGantiFoto()
	{
		$id = $this->input->post('id');
		// get foto
		$config['upload_path'] = './assets/images/fotoDosen';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['overwrite'] = TRUE;
		$config['file_name'] = $_FILES['foto']['name'];
		$this->upload->initialize($config);
		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data();
				$this->DosenModels->gantiFoto($foto['file_name'], $id);
				redirect(base_url('dashboard_dosen'));
			}
		}
	}

	public function JadwalMengajar()
	{
		$last_id = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		foreach ($last_id as $key) ;
		$dosen_id = $key->id;
		$data['dosen'] = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		$data['jadwal'] = $this->JadwalModels->jadwalNgajar($dosen_id, date('Y'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/JadwalMengajar', $data);
		$this->load->view('partials/footer');
	}

	public function AbsensiDosen()
	{
		$last_id = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		foreach ($last_id as $key) ;
		$dosen_id = $key->id;
		$data['dosen'] = $this->DosenModels->getDosenByUserId($this->session->userdata('id'));
		$data['absensi'] = $this->AbsensiDosenModels->getDataByDosenId($dosen_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/AbsensiDosen', $data);
		$this->load->view('partials/footer');
	}

	public function readPengumuman($id)
	{
		$pengumuman_id = array('id' => $id);
		$data['pengumuman'] = $this->PengumumanModels->getDataById($pengumuman_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('dosen/Sidebar');
		$this->load->view('dosen/ReadPengumuman', $data);
		$this->load->view('partials/footer');
	}

}
