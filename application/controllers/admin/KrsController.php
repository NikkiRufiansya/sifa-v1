<?php

class KrsController extends CI_Controller
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
		$this->load->view('admin/akademik/krs/KrsMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function pilihMatkulSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/PilihMatkul', $data);
		$this->load->view('partials/footer');
	}

	public function AturJadwalMahasiswa()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$mhs = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		foreach ($mhs as $prodi_id) ;
		$data['jadwal'] = $this->JadwalModels->getJadwalByKRS($prodi_id['prodi_id'], $this->input->post('semester'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/AturJadwalMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function simpanKrs()
	{
		$id = $this->input->post('jadwal_id');
		foreach ($id as $jadwal_id) {
			$check = $this->KrsModels->validasiQuery($this->input->post('mahasiswa_id'), $jadwal_id);
			if ($check){
				redirect(base_url('admin_krs_mahasiswa'));
			}else{
				$data = array(
					'mahasiswa_id' => $this->input->post('mahasiswa_id'),
					'jadwal_id' => $jadwal_id,
				);
				$this->KrsModels->insertJadwal($data);
			}

		}
		redirect(base_url('admin_krs_mahasiswa'));
	}

	public function lihatKrs($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/PilihSemesterKRS', $data);
		$this->load->view('partials/footer');
	}

	public function KrsAllSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$mahasiswa_id = array('mahasiswa_id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['krs'] = $this->KrsModels->getKRS($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KrsAllSemester', $data);
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
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KrsPerSemester', $data);
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
		$this->load->view('admin/akademik/krs/KhsAllSemester', $data);
		$this->load->view('partials/footer');
	}

}
