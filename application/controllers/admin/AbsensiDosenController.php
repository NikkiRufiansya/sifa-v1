<?php

class AbsensiDosenController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('DosenModels');
		$this->load->model('AbsensiDosenModels');
		$this->cek_login();
		$this->output->set_header('HTTP/1.0 200 OK');
		$this->output->set_header('HTTP/1.1 200 OK');
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
		$this->output->set_header('Cache-Control: post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		$data['dosen'] = $this->DosenModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiDosen/AbsensiDosen', $data);
		$this->load->view('partials/footer');
	}

	public function simpanAbsensiDosen()
	{
		$status = array();
		foreach ($this->input->post('status') as $keyStatus => $value2) {
			$status[$keyStatus] = $value2;
		}
		foreach ($this->input->post('dosen_id') as $keyDosenId => $value) {
			$check = $this->AbsensiDosenModels->validasiQuery($value, $this->input->post('tanggal'));
			if ($check) {
				redirect(base_url('admin_absensi_dosen'));
			} else {
				$data = array(
					'dosen_id' => $value,
					'status' => $status[$keyDosenId],
					'tanggal' => $this->input->post('tanggal')
				);
				$this->AbsensiDosenModels->insert($data);
			}

		}
		redirect(base_url('admin_absensi_dosen'));
	}

	public function cekAbsensiDosen()
	{
		$data['absensi'] = $this->AbsensiDosenModels->getDataByDate($this->input->post('cek_tanggal'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiDosen/CekAbsensiDosen', $data);
		$this->load->view('partials/footer');
	}
}
