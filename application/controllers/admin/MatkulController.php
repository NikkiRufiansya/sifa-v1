<?php

class MatkulController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramStudiModels');
		$this->load->model('KurikulumModels');
		$this->load->model('MatkulModels');
		$this->load->model('DosenModels');
		$this->cek_login();
	}

	public function index()
	{
		$matkul['matkul'] = $this->MatkulModels->getMakulByProdiAndKurikulum();
		$this->load->view('partials/head');
		$this->load->view('admin/master/matkul/Matkul', $matkul);
		$this->load->view('admin/master/matkul/footer');
	}

	public function tambahMatkul()
	{
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/matkul/TambahMatkul', $data);
		$this->load->view('admin/master/matkul/footer');
	}

	public function getKurikulum()
	{
		$prodi_id = array('prodi_id' => $this->input->post('prodi_id'));
		$data = $this->KurikulumModels->getDataById($prodi_id);
		echo json_encode($data);
	}

	public function prosesTambahMatkul()
	{
		$data = array(
			'prodi_id' => $this->input->post('prodi_id'),
			'kurikulum_id' => $this->input->post('kurikulum_id'),
			'kelompok_matkul' => $this->input->post('kelompok_matkul'),
			'jenis_matkul' => $this->input->post('jenis_matkul'),
			'kode_matkul' => $this->input->post('kode_matkul'),
			'nama_matkul' => $this->input->post('nama_matkul'),
			'semester' => $this->input->post('semester'),
			'sks' => $this->input->post('sks'),
			'penanggung_jawab' => $this->input->post('penanggung_jawab')
		);
		$this->MatkulModels->insert($data);
		redirect(base_url('admin_matakuliah'));
	}

	public function ubahMatkul($id)
	{
		$idMatkul = array('id' => $id);
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$data['matkul'] = $this->MatkulModels->getDataById($idMatkul);
		$this->load->view('partials/head');
		$this->load->view('admin/master/matkul/UbahMatkul', $data);
		$this->load->view('admin/master/matkul/footer');
	}

	public function prosesUbahMatkul()
	{
		$idMatkul = array('id' => $this->input->post('id'));
		$data = array(
			'prodi_id' => $this->input->post('new_prodi_id'),
			'kurikulum_id' => $this->input->post('new_kurikulum_id'),
			'kelompok_matkul' => $this->input->post('kelompok_matkul'),
			'jenis_matkul' => $this->input->post('jenis_matkul'),
			'kode_matkul' => $this->input->post('kode_matkul'),
			'nama_matkul' => $this->input->post('nama_matkul'),
			'semester' => $this->input->post('semester'),
			'sks' => $this->input->post('sks'),
			'penanggung_jawab' => $this->input->post('new_penanggung_jawab')
		);
		$this->MatkulModels->update_data($idMatkul, $data);
		redirect(base_url('admin_matakuliah'));
	}

	public function hapusMatkul($id)
	{
		$idMatkul = array('id' => $id);
		$this->MatkulModels->delete($idMatkul);
		redirect(base_url('admin_matakuliah'));
	}
}
