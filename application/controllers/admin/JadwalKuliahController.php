<?php

class JadwalKuliahController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramStudiModels');
		$this->load->model('ProgramModels');
		$this->load->model('MatkulModels');
		$this->load->model('KampusModels');
		$this->load->model('RuanganModels');
		$this->load->model('DosenModels');
		$this->load->model('JadwalModels');
		$this->cek_login();
	}

	public function index()
	{
		$jadwal['jadwal'] = $this->JadwalModels->getJadwal();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/jadwal/Jadwal', $jadwal);
		$this->load->view('admin/akademik/jadwal/footer');
	}

	public function tambahJadwal()
	{
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['kampus'] = $this->KampusModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/jadwal/TambahJadwal', $data);
		$this->load->view('admin/akademik/jadwal/footer');
	}

	public function getMatkul()
	{
		$prodi_id = array('prodi_id' => $this->input->post('prodi_id'));
		$data = $this->MatkulModels->getDataById($prodi_id);
		echo json_encode($data);
	}

	public function getRuangan()
	{
		$kampus_id = array('kampus_id' => $this->input->post('kampus_id'));
		$data = $this->RuanganModels->getDataById($kampus_id);
		echo json_encode($data);
	}

	public function prosesTambahJadwal()
	{
		$data = array(
			'prodi_id' => $this->input->post('prodi_id'),
			'program_id' => $this->input->post('program_id'),
			'matkul_id' => $this->input->post('matkul_id'),
			'tahun' => $this->input->post('tahun'),
			'hari' => $this->input->post('hari'),
			'jadwal_masuk' => $this->input->post('jadwal_masuk'),
			'jadwal_selesai' => $this->input->post('jadwal_selesai'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'kampus_id' => $this->input->post('kampus_id'),
			'ruangan' => $this->input->post('ruangan'),
			'dosen' => $this->input->post('dosen')
		);
		$this->JadwalModels->insert($data);
		redirect(base_url('admin_jadwal_kuliah'));
	}

	public function ubahJadwal($id)
	{
		$idJadwal = array('id' => $id);
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['kampus'] = $this->KampusModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$data['jadwal'] = $this->JadwalModels->getDataById($idJadwal);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/jadwal/UbahJadwal', $data);
		$this->load->view('admin/akademik/jadwal/footer');
	}

	public function prosesUbahJadwal()
	{
		$idJadwal = array('id' => $this->input->post('id'));
		$data = array(
			'prodi_id' => $this->input->post('prodi_id'),
			'program_id' => $this->input->post('program_id'),
			'matkul_id' => $this->input->post('matkul_id'),
			'tahun' => $this->input->post('tahun'),
			'hari' => $this->input->post('hari'),
			'jadwal_masuk' => $this->input->post('jadwal_masuk'),
			'jadwal_selesai' => $this->input->post('jadwal_selesai'),
			'nama_kelas' => $this->input->post('nama_kelas'),
			'kampus_id' => $this->input->post('kampus_id'),
			'ruangan' => $this->input->post('ruangan'),
			'dosen' => $this->input->post('dosen')
		);
		$this->JadwalModels->update_data($idJadwal, $data);
		redirect(base_url('admin_jadwal_kuliah'));
	}

	public function hapusJadwal($id)
	{
		$idJadwal = array('id' => $id);
		$this->JadwalModels->delete($idJadwal);
		redirect(base_url('admin_jadwal_kuliah'));
	}

}
