<?php

class AbsensiMhsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('MahasiswaModels');
		$this->load->model('DosenModels');
		$this->load->model('JadwalModels');
		$this->load->model('KrsModels');
		$this->load->model('ProgramStudiModels');
		$this->load->model('AbsensiMhsModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiMahasiswa/AbsensiMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function lihatJadwalMatkul()
	{
		$data['jadwal'] = $this->KrsModels->getJadwalMatkulMahasisawa($this->input->post('semester'), $this->input->post('prodi_id'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiMahasiswa/JadwalMatkulMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function lihatMhsByJadwal($id)
	{
		$data['jadwal'] = $this->KrsModels->getMhsByJadwal($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiMahasiswa/LihatMhsByJadwal', $data);
		$this->load->view('partials/footer');
	}

	public function simpanAbsensiMhs()
	{
		$status = array();
		foreach ($this->input->post('status') as $keyStatus => $value2) {
			$status[$keyStatus] = $value2;
		}
		foreach ($this->input->post('mahasiswa_id') as $keyMhsId => $value) {
			$check = $this->AbsensiMhsModels->validasiQuery($this->input->post('pertemuan'), $this->input->post('jadwal_id'), $value);
			if ($check) {
				redirect(base_url('admin_absensi_mahasiswa'));
			} else {
				$data = array(
					'mahasiswa_id' => $value,
					'jadwal_id' => $this->input->post('jadwal_id'),
					'status' => $status[$keyMhsId],
					'pertemuan' => $this->input->post('pertemuan'),
					'tanggal_kahadiran' => $this->input->post('tanggal_kehadiran')
				);
				$this->AbsensiMhsModels->insert($data);
			}

		}
		redirect(base_url('admin_absensi_mahasiswa'));
	}


	public function cekAbsensiMhs($id)
	{
		$data['jadwal'] = $this->KrsModels->getMhsByJadwal($id);
		$data['matkul'] = $this->AbsensiMhsModels->getNamaMatkul($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiMahasiswa/CekAbsensiMhs', $data);
		$this->load->view('partials/footer');
	}

	public function cekKehadiran($jadwal_id, $mahasiswa_id)
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa',array('id' => $mahasiswa_id));
		$data['kehadiran'] = $this->AbsensiMhsModels->CekAbsensiMhs($jadwal_id, $mahasiswa_id);
		$data['matkul'] = $this->AbsensiMhsModels->getNamaMatkul($jadwal_id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/absensiMahasiswa/CekKehadiranMhs', $data);
		$this->load->view('partials/footer');
	}
}
