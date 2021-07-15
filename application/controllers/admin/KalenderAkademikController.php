<?php

class KalenderAkademikController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ProgramStudiModels');
		$this->load->model('ProgramModels');
		$this->load->model('KalenderAkademikModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['kalender'] = $this->KalenderAkademikModels->getKalender();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/kalender/Kalender', $data);
		$this->load->view('partials/footer');
	}

	public function tambahKalender()
	{
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/kalender/TambahKalender', $data);
		$this->load->view('partials/footer');
	}

	public function prosesTambahKalender()
	{
		$data = array(
			'tahun' => $this->input->post('tahun'),
			'nama_kalender' => $this->input->post('nama_kalender'),
			'prodi_id' => $this->input->post('prodi_id'),
			'program_id' => $this->input->post('program_id'),
			'krs_mulai' => $this->input->post('krs_mulai'),
			'krs_selesai' => $this->input->post('krs_selesai'),
			'uts_mulai' => $this->input->post('uts_selesai'),
			'uts_selesai' => $this->input->post('uts_selesai'),
			'uas_mulai' => $this->input->post('uas_mulai'),
			'uas_selesai' => $this->input->post('uas_selesai'),
			'input_nilai_mulai' => $this->input->post('input_nilai_mulai'),
			'input_nilai_selesai' => $this->input->post('input_nilai_selesai'),
			'cetak_khs' => $this->input->post('cetak_khs')
		);
		$this->KalenderAkademikModels->insert($data);
		redirect(base_url('admin_kalender_akademik'));
	}

	public function ubahKalender($id)
	{
		$idKalender = array('id' => $id);
		$data['kalender'] = $this->KalenderAkademikModels->getDataById($idKalender);
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/kalender/UbahKalender', $data);
		$this->load->view('partials/footer');
	}

	public function prosesUbahKalender()
	{
		$idKalender = array('id' => $this->input->post('id'));
		$data = array(
			'tahun' => $this->input->post('tahun'),
			'nama_kalender' => $this->input->post('nama_kalender'),
			'prodi_id' => $this->input->post('prodi_id'),
			'program_id' => $this->input->post('program_id'),
			'krs_mulai' => $this->input->post('krs_mulai'),
			'krs_selesai' => $this->input->post('krs_selesai'),
			'uts_mulai' => $this->input->post('uts_selesai'),
			'uts_selesai' => $this->input->post('uts_selesai'),
			'uas_mulai' => $this->input->post('uas_mulai'),
			'uas_selesai' => $this->input->post('uas_selesai'),
			'input_nilai_mulai' => $this->input->post('input_nilai_mulai'),
			'input_nilai_selesai' => $this->input->post('input_nilai_selesai'),
			'cetak_khs' => $this->input->post('cetak_khs')
		);
		$this->KalenderAkademikModels->update_data($idKalender, $data);
		redirect(base_url('admin_kalender_akademik'));
	}

	public function hapusKalender($id)
	{
		$idKalender = array('id' => $id);
		$this->KalenderAkademikModels->delete($idKalender);
		redirect(base_url('admin_kalender_akademik'));
	}

}
