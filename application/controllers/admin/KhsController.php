<?php

class KhsController extends CI_Controller
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
		$data['mahasiswa'] = $this->MahasiswaModels->getMahasiswa();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/KhsMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function lihatKHS($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/PilihSemesterKHS', $data);
		$this->load->view('partials/footer');
	}

	public function KhsSemester()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['khs'] = $this->KrsModels->getKHSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/KhsPerSemester', $data);
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
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/KhsAllSemester', $data);
		$this->load->view('partials/footer');
	}
}
