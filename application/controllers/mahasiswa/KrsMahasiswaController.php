<?php

class KrsMahasiswaController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('MahasiswaModels');
		$this->load->model('DosenModels');
		$this->load->model('JadwalModels');
		$this->load->model('KrsModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getMhsByUserId($this->session->userdata('id'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/krs/PilihSemesterKRS', $data);
		$this->load->view('partials/footer');
	}


	public function KrsSemester()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['krs'] = $this->KrsModels->getKRSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/krs/KrsPerSemester', $data);
		$this->load->view('partials/footer');
	}

	public function KrsAllSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$mahasiswa_id = array('mahasiswa_id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['krs'] = $this->KrsModels->getKHS($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/krs/KrsAllSemester', $data);
		$this->load->view('partials/footer');
	}

}
