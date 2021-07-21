<?php

class KhsMahasiswaController extends CI_Controller
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
		$this->load->view('mahasiswa/akademik/khs/PilihSemesterKHS', $data);
		$this->load->view('partials/footer');
	}

	public function KhsSemester()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['semester'] = array('semester' => $this->input->post('semester'));
		$data['prodi_id'] = array('prodi_id' => $this->input->post('prodi_id'));
		$data['khs'] = $this->KrsModels->getKHSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/khs/KhsPerSemester', $data);
		$this->load->view('partials/footer');
	}

	public function KhsAllSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$mahasiswa_id = array('mahasiswa_id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['khs'] = $this->KrsModels->getKHS($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('mahasiswa/Sidebar');
		$this->load->view('mahasiswa/akademik/khs/KhsAllSemester', $data);
		$this->load->view('partials/footer');
	}

}
