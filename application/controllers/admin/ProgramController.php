<?php

class ProgramController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramModels');
		$this->cek_login();
	}

	public function index()
	{
		$program['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/program/Program', $program);
		$this->load->view('partials/footer');
	}

	public function tambahProgram()
	{
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/program/TambahProgram');
		$this->load->view('partials/footer');
	}

	public function prosesTambahProgram()
	{
		$data = array(
			'kode_program' => $this->input->post('kode_program'),
			'nama_program' => $this->input->post('nama_program')
		);
		$this->ProgramModels->insert($data);
		redirect(base_url('admin_program'));
	}

	public function ubahProgram($id)
	{
		$idProgram = array('id' => $id);
		$program['program'] = $this->ProgramModels->getDataById($idProgram);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/program/UbahProgram', $program);
		$this->load->view('partials/footer');
	}

	public function prosesUbahProgram()
	{
		$idProgram = array('id' => $this->input->post('id'));
		$data = array(
			'kode_program' => $this->input->post('kode_program'),
			'nama_program' => $this->input->post('nama_program')
		);
		$this->ProgramModels->update_data($idProgram, $data);
		redirect(base_url('admin_program'));
	}

	public function hapusProgram($id)
	{
		$idProgram = array('id' => $id);
		$this->ProgramModels->delete($idProgram);
		redirect(base_url('admin_program'));
	}


}
