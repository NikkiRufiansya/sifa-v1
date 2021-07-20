<?php

class NilaiController extends CI_Controller
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
		$this->load->view('admin/akademik/nilai/NilaiMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function pilihSemesterNilai($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/nilai/PilihSemester', $data);
		$this->load->view('partials/footer');
	}

	public function lihatNilaiSemester()
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
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/nilai/NilaiPerSemester', $data);
		$this->load->view('partials/footer');
	}

	public function isiNilai($id)
	{
		$idPenilaian = array('id' => $id);
		$data['nilai'] = $this->KrsModels->getDataById($idPenilaian);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/nilai/IsiNilai', $data);
		$this->load->view('partials/footer');
	}

	public function prosesIsiNilai()
	{
		$idPenilaian = array('id' => $this->input->post('id'));
		$data = array(
			'mahasiswa_id' => $this->input->post('mahasiswa_id'),
			'jadwal_id' => $this->input->post('jadwal_id'),
			'grade' => $this->input->post('grade')
		);
		$this->KrsModels->update_data($idPenilaian, $data);
		redirect(base_url('admin_nilai_mahasiswa'));
	}
}
