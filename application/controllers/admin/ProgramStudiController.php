<?php

class ProgramStudiController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramStudiModels');
		$this->cek_login();
	}

	public function index()
	{
		$studi['studi'] = $this->ProgramStudiModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/programStudi/ProgramStudi', $studi);
		$this->load->view('partials/footer');
	}

	public function tambahProgramStudi()
	{
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/programStudi/TambahProgramStudi');
		$this->load->view('partials/footer');
	}

	public function prosesTambahProgramStudi()
	{
		$data = array(
			'kode_prodi' => $this->input->post('kode'),
			'nama_prodi' => $this->input->post('nama'),
			'jenjang' => $this->input->post('jenjang'),
			'akreditasi' => $this->input->post('akreditasi')
		);
		$this->ProgramStudiModels->insert($data);
		redirect(base_url('admin_program_studi'));
	}

	public function ubahProgramStudi($id)
	{
		$idProgramStudi = array('id' => $id);
		$studi['studi'] = $this->ProgramStudiModels->getDataById($idProgramStudi);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/programStudi/UbahProgramStudi', $studi);
		$this->load->view('partials/footer');
	}

	public function prosesUbahProgramStudi()
	{
		$id = array('id' => $this->input->post('id'));
		$data = array(
			'kode_prodi' => $this->input->post('kode'),
			'nama_prodi' => $this->input->post('nama'),
			'jenjang' => $this->input->post('jenjang'),
			'akreditasi' => $this->input->post('akreditasi')
		);
		$this->ProgramStudiModels->update_data($id, $data);
		redirect(base_url('admin_program_studi'));
	}

	public function hapusProgramStudi($id)
	{
		$idProgramStudi = array('id' => $id);
		$this->ProgramStudiModels->delete($idProgramStudi);
		redirect(base_url('admin_program_studi'));
	}
}
