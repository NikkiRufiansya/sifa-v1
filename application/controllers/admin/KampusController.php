<?php

class KampusController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('KampusModels');
		$this->cek_login();
	}

	public function index()
	{
		$kampus['kampus'] = $this->KampusModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/kampus/Kampus', $kampus);
		$this->load->view('partials/footer');
	}

	public function tambahKampus()
	{
		$this->load->view('partials/head');
		$this->load->view('admin/master/kampus/TambahKampus');
		$this->load->view('partials/footer');
	}

	public function prosesTambahKampus()
	{
		$data = array(
			'kode_kampus' => $this->input->post('kode_kampus'),
			'nama_kampus' => $this->input->post('nama_kampus'),
			'alamat_kampus' => $this->input->post('alamat_kampus')
		);
		$this->KampusModels->insert($data);
		redirect(base_url('admin_kampus'));
	}

	public function ubahKampus($id)
	{
		$idKampus = array('id' => $id);
		$kampus['kampus'] = $this->KampusModels->getDataById($idKampus);
		$this->load->view('partials/head');
		$this->load->view('admin/master/kampus/UbahKampus', $kampus);
		$this->load->view('partials/footer');
	}

	public function prosesUbahKampus()
	{
		$idKampus = array('id' => $this->input->post('id'));
		$data = array(
			'kode_kampus' => $this->input->post('kode_kampus'),
			'nama_kampus' => $this->input->post('nama_kampus'),
			'alamat_kampus' => $this->input->post('alamat_kampus')
		);
		$this->KampusModels->update_data($idKampus, $data);
		redirect(base_url('admin_kampus'));
	}

	public function hapusKampus($id)
	{
		$idKampus = array('id' => $id);
		$this->KampusModels->delete($idKampus);
		redirect(base_url('admin_kampus'));
	}

}
