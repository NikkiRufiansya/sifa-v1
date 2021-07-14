<?php

class IdentitasInstitusiController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('InstitusiModels');
		$this->cek_login();
	}

	public function index()
	{
		$institusi['institusi'] = $this->InstitusiModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/identitas/IdentitasInstitusi', $institusi);
		$this->load->view('partials/footer');
	}

	public function tambahInstitusi()
	{
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/identitas/TambahInstitusi');
		$this->load->view('partials/footer');
	}

	public function prosesTambahInstitusi()
	{
		$data = array(
			'kode_hukum' => $this->input->post('kode_hukum'),
			'nama_identitas' => $this->input->post('nama_identitas'),
			'tanggal_mulai' => $this->input->post('tanggal_mulai'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'telepone' => $this->input->post('telepone'),
			'fax' => $this->input->post('fax'),
			'email' => $this->input->post('email'),
			'website' => $this->input->post('website'),
			'no_akta' => $this->input->post('no_akta'),
			'no_sah' => $this->input->post('no_sah'),
			'tanggal_sah' => $this->input->post('tanggal_sah')
		);
		$this->InstitusiModels->insert($data);
		redirect(base_url('admin_identitas_institusi'));
	}

	public function ubahInstitusi($id)
	{
		$idInstitusi = array('id' => $id);
		$institusi['institusi'] = $this->InstitusiModels->getDataById($idInstitusi);
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/identitas/UbahInstitusi', $institusi);
		$this->load->view('partials/footer');
	}

	public function prosesUbahInstitusi()
	{
		$id = array('id' => $this->input->post('id'));
		$data = array(
			'kode_hukum' => $this->input->post('kode_hukum'),
			'nama_identitas' => $this->input->post('nama_identitas'),
			'tanggal_mulai' => $this->input->post('tanggal_mulai'),
			'alamat' => $this->input->post('alamat'),
			'kota' => $this->input->post('kota'),
			'kode_pos' => $this->input->post('kode_pos'),
			'telepone' => $this->input->post('telepone'),
			'fax' => $this->input->post('fax'),
			'email' => $this->input->post('email'),
			'website' => $this->input->post('website'),
			'no_akta' => $this->input->post('no_akta'),
			'no_sah' => $this->input->post('no_sah'),
			'tanggal_sah' => $this->input->post('tanggal_sah')
		);
		$this->InstitusiModels->update_data($id, $data);
		redirect(base_url('admin_identitas_institusi'));
	}

	public function hapusInstitusi($id)
	{
		$id = array('id' => $id);
		$this->InstitusiModels->delete($id);
		redirect(base_url('admin_identitas_institusi'));
	}

}
