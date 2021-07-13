<?php

class KurikulumController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramStudiModels');
		$this->load->model('KurikulumModels');
		$this->cek_login();
	}

	public function index()
	{
		$kurikulum['kurikulum'] = $this->KurikulumModels->getDataKurikulumAndProdi();
		$this->load->view('partials/head');
		$this->load->view('admin/master/kurikulum/Kurikulum', $kurikulum);
		$this->load->view('partials/footer');
	}

	public function tambahKurikulum()
	{
		$prodi['prodi'] = $this->ProgramStudiModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/kurikulum/TambahKurikulum', $prodi);
		$this->load->view('partials/footer');
	}

	public function prosesTambahKurikulum()
	{
		$data = array(
			'prodi_id' => $this->input->post('prodi_id'),
			'kode_kurikulum' => $this->input->post('kode_kurikulum'),
			'nama_kurikulum' => $this->input->post('nama_kurikulum')
		);
		$this->KurikulumModels->insert($data);
		redirect(base_url('admin_kurikulum'));
	}

	public function ubahKurikulum($id)
	{
		$idKurikulum = array('id' => $id);
		$kurikulum['prodi'] = $this->ProgramStudiModels->getAllData();
		$kurikulum['kurikulum'] = $this->KurikulumModels->getDataById($idKurikulum);
		$this->load->view('partials/head');
		$this->load->view('admin/master/kurikulum/UbahKurikulum', $kurikulum);
		$this->load->view('partials/footer');
	}

	public function prosesUbahController()
	{
		$idKurikulum = array('id' => $this->input->post('id'));
		if ($this->input->post('new_prodi_id') != null) {
			$data = array(
				'prodi_id' => $this->input->post('new_prodi_id'),
				'kode_kurikulum' => $this->input->post('kode_kurikulum'),
				'nama_kurikulum' => $this->input->post('nama_kurikulum')
			);
			$this->KurikulumModels->update_data($idKurikulum, $data);
			redirect(base_url('admin_kurikulum'));
		} else if ($this->input->post('new_prodi_id') == null) {
			$data = array(
				'prodi_id' => $this->input->post('old_prodi_id'),
				'kode_kurikulum' => $this->input->post('kode_kurikulum'),
				'nama_kurikulum' => $this->input->post('nama_kurikulum')
			);
			$this->KurikulumModels->update_data($idKurikulum, $data);
			redirect(base_url('admin_kurikulum'));
		}

	}

	public function hapusKurikulum($id)
	{
		$idKurikulum = array('id' => $id);
		$this->KurikulumModels->delete($idKurikulum);
		redirect(base_url('admin_kurikulum'));
	}


}
