<?php

class PengumumanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('PengumumanModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['pengumuman'] = $this->PengumumanModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/pengumuman/Pengumuman', $data);
		$this->load->view('partials/footer');
	}

	public function tambahPengumuman()
	{
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/pengumuman/TambahPengumuman');
		$this->load->view('partials/footer');
	}

	public function prosesTambahPengumuman()
	{
		$data = array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tanggal' => date("Y-m-d")
		);
		$this->PengumumanModels->insert($data);
		redirect(base_url('admin_pengumuman'));
	}

	public function ubahPengumuman($id)
	{
		$pengumuman_id = array('id' => $id);
		$data['pengumuman'] = $this->PengumumanModels->getDataById($pengumuman_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/pengumuman/UbahPengumuman', $data);
		$this->load->view('partials/footer');
	}

	public function prosesUbahPengumuman()
	{
		$pengumuman_id = array('id' => $this->input->post('id'));
		$data = array(
			'judul' => $this->input->post('judul'),
			'isi' => $this->input->post('isi'),
			'tanggal' => date("Y-m-d")
		);
		$this->PengumumanModels->update_data($pengumuman_id, $data);
		redirect(base_url('admin_pengumuman'));
	}

	public function hapusPengumuman($id)
	{
		$pengumuman_id = array('id' => $id);
		$this->PengumumanModels->delete($pengumuman_id);
		redirect(base_url('admin_pengumuman'));
	}
}
