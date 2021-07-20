<?php

class MahasiswaController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->model('MahasiswaModels');
		$this->load->model('PengumumanModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getMhsByUserId($this->session->userdata('id'));
		$data['pengumuman'] = $this->PengumumanModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/Dashboard', $data);
		$this->load->view('partials/footer');
	}

	public function readPengumuman($id)
	{
		$pengumuman_id = array('id' => $id);
		$data['pengumuman'] = $this->PengumumanModels->getDataById($pengumuman_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/ReadPengumuman', $data);
		$this->load->view('partials/footer');
	}

	public function gantiFoto()
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getMhsByUserId($this->session->userdata('id'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/GantiFoto', $data);
		$this->load->view('partials/footer');
	}

	public function prosesGantiFoto()
	{
		$id = $this->input->post('id');
		// get foto
		$config['upload_path'] = './assets/images/fotoMahasiswa';
		$config['allowed_types'] = 'jpg|png|jpeg|gif';
		$config['max_size'] = '2048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['overwrite'] = TRUE;
		$config['file_name'] = $_FILES['foto']['name'];
		$this->upload->initialize($config);
		if (!empty($_FILES['foto']['name'])) {
			if ($this->upload->do_upload('foto')){
				$foto = $this->upload->data();
				$this->MahasiswaModels->gantiFoto($foto['file_name'], $id);
				redirect(base_url('dashboard_mahasiswa'));
			}
		}

	}

}
