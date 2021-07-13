<?php

class RuanganController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('KampusModels');
		$this->load->model('RuanganModels');
		$this->cek_login();
	}

	public function index()
	{
		$ruangan['ruangan'] = $this->RuanganModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/ruangan/Ruangan', $ruangan);
		$this->load->view('partials/footer');
	}

	public function tambahRuangan()
	{
		$kampus['kampus'] = $this->KampusModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/ruangan/TambahRuangan', $kampus);
		$this->load->view('partials/footer');
	}

	public function prosesTambahRuangan()
	{
		$data = array(
			'kampus_id' => $this->input->post('kampus_id'),
			'kode_ruangan' => $this->input->post('kode_ruangan'),
			'nama_ruangan' => $this->input->post('nama_ruangan'),
			'lantai' => $this->input->post('lantai'),
			'kapasitas' => $this->input->post('kapasitas')
		);
		$this->RuanganModels->insert($data);
		redirect(base_url('admin_ruangan'));
	}

	public function ubahRuangan($id)
	{
		$idRuangan = array('id' => $id);
		$ruangan['ruangan'] = $this->RuanganModels->getDataById($idRuangan);
		$ruangan['kampus'] = $this->KampusModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/master/ruangan/UbahRuangan', $ruangan);
		$this->load->view('partials/footer');
	}

	public function prosesUbahRuangan()
	{
		$idRuangan = array('id' => $this->input->post('id'));
		if ($this->input->post('new_kampus_id') != null) {
			$data = array(
				'kampus_id' => $this->input->post('new_kampus_id'),
				'kode_ruangan' => $this->input->post('kode_ruangan'),
				'nama_ruangan' => $this->input->post('nama_ruangan'),
				'lantai' => $this->input->post('lantai'),
				'kapasitas' => $this->input->post('kapasitas')
			);
			$this->RuanganModels->update_data($idRuangan, $data);
			redirect(base_url('admin_ruangan'));
		} else if ($this->input->post('new_kampus_id') == null) {
			$data = array(
				'kampus_id' => $this->input->post('old_kampus_id'),
				'kode_ruangan' => $this->input->post('kode_ruangan'),
				'nama_ruangan' => $this->input->post('nama_ruangan'),
				'lantai' => $this->input->post('lantai'),
				'kapasitas' => $this->input->post('kapasitas')
			);
			$this->RuanganModels->update_data($idRuangan, $data);
			redirect(base_url('admin_ruangan'));
		}
	}

	public function hapusRuangan($id)
	{
		$idRuangan = array('id' => $id);
		$this->RuanganModels->delete($idRuangan);
		redirect(base_url('admin_ruangan'));
	}
}
