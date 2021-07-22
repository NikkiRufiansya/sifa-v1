<?php

class KrsController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('Pdf');
		$this->load->model('MahasiswaModels');
		$this->load->model('DosenModels');
		$this->load->model('JadwalModels');
		$this->load->model('KrsModels');
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
		$data['mahasiswa'] = $this->MahasiswaModels->getMahasiswa();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KrsMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function pilihMatkulSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/PilihMatkul', $data);
		$this->load->view('partials/footer');
	}

	public function AturJadwalMahasiswa()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$mhs = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		foreach ($mhs as $prodi_id) ;
		$data['jadwal'] = $this->JadwalModels->getJadwalByKRS($prodi_id['prodi_id'], $this->input->post('semester'));
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/AturJadwalMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function simpanKrs()
	{
		$id = $this->input->post('jadwal_id');
		foreach ($id as $jadwal_id) {
			$check = $this->KrsModels->validasiQuery($this->input->post('mahasiswa_id'), $jadwal_id);
			if ($check) {
				redirect(base_url('admin_krs_mahasiswa'));
			} else {
				$data = array(
					'mahasiswa_id' => $this->input->post('mahasiswa_id'),
					'jadwal_id' => $jadwal_id,
				);
				$this->KrsModels->insertJadwal($data);
			}

		}
		redirect(base_url('admin_krs_mahasiswa'));
	}

	public function lihatKrs($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/PilihSemesterKRS', $data);
		$this->load->view('partials/footer');
	}

	public function KrsAllSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$mahasiswa_id = array('mahasiswa_id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['krs'] = $this->KrsModels->getKRS($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KrsAllSemester', $data);
		$this->load->view('partials/footer');
	}

	public function KrsSemester()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['semester'] = array('semester' => $this->input->post('semester'));
		$data['prodi_id'] = array('prodi_id' => $this->input->post('prodi_id'));
		$data['krs'] = $this->KrsModels->getKRSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KrsPerSemester', $data);
		$this->load->view('partials/footer');
	}

	public function KhsAllSemester($id)
	{
		$idMahasiswa = array('id' => $id);
		$mahasiswa_id = array('mahasiswa_id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['khs'] = $this->KrsModels->getKHS($id);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/krs/KhsAllSemester', $data);
		$this->load->view('partials/footer');
	}

	public function cetakAllKRS()
	{
		$data = $this->KrsModels->getKHS($this->input->post('id'));
		$pdf = new FPDF('L', 'mm', 'A4', 'C');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		$pdf->SetFont('Arial', 'B', 16);
		// mencetak string
		$pdf->Cell(0, 0, 'Akademi Komunitas Darussalam', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(0, 0, 'Jl. Blokagung-Karangdoro, Kaligesing, Karangmulyo, Tegalsari, Kabupaten Banyuwangi, Jawa Timur 68485', 0, '1', 'C');
		$pdf->Ln(5);
		$pdf->Cell(0, 0, '----------------------------------------------------------------------------------------------------------------------------------------------------------------------', 0, '1', 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 14);
		$pdf->Cell(0, 0, 'Kartu Rencana Studi (KRS)', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "NIM : " . $this->input->post('nim'));
		$pdf->Ln(5);
		$pdf->Cell(0, 0, "Nama : " . $this->input->post('nama'));
		$pdf->LN(5);
		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(36, 7, 'Kode Matkul', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Nama Matkul', 1, 0, 'C');
		$pdf->Cell(10, 7, 'Sks', 1, 0, 'C');
		$pdf->Cell(20, 7, 'Semester', 1, 0., 'C');
		$pdf->Cell(60, 7, 'Jam Kuliah', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Dosen', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		foreach ($data as $row) {
			$pdf->Cell(36, 6, $row->kode_matkul, 1, 0, 'C');
			$pdf->Cell(80, 6, $row->nama_matkul, 1, 0, '');
			$pdf->Cell(10, 6, $row->sks, 1, 0, 'C');
			$pdf->Cell(20, 6, $row->semester, 1, 0., 'C');
			$pdf->Cell(60, 6, $row->jadwal_masuk . " - " . $row->jadwal_selesai, 1, 0, 'C');
			$pdf->Cell(80, 6, $row->nama, 1, 1, '');

		}
		$pdf->Output();
	}

	public function cetakSemesterKRS()
	{

		$mhs = $this->MahasiswaModels->getDataById('mahasiswa', array('id' => $this->input->post('id')));
		foreach ($mhs as $key);
		$data = $this->KrsModels->getKHSPerSemester(
			$this->input->post('id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$sks =  array();
		foreach ($data as $sks1 => $value){
			$sks[$sks1] = $value->sks;
		}
		$sksTotal = array_sum($sks);

		$pdf = new FPDF('L', 'mm', 'A4', 'C');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		$pdf->SetFont('Arial', 'B', 16);
		// mencetak string
		$pdf->Cell(0, 0, 'Akademi Komunitas Darussalam', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(0, 0, 'Jl. Blokagung-Karangdoro, Kaligesing, Karangmulyo, Tegalsari, Kabupaten Banyuwangi, Jawa Timur 68485', 0, '1', 'C');
		$pdf->Ln(5);
		$pdf->Cell(0, 0, '----------------------------------------------------------------------------------------------------------------------------------------------------------------------', 0, '1', 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 14);
		$pdf->Cell(0, 0, 'Kartu Rencana Studi (KRS)', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "NIM : " . $key['nim']);
		$pdf->Ln(5);
		$pdf->Cell(0, 0, "Nama : " . $key['nama']);
		$pdf->LN(5);
		$pdf->Cell(0, 0, "Email : " . $key['email']);
		$pdf->LN(5);
		$pdf->Cell(0, 0, "Angkatan : " . $key['angkatan']);
		$pdf->LN(5);
		$pdf->Cell(0, 0, "Telepon : " . $key['telepone']);
		$pdf->LN(5);

		// Table KRS
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(36, 7, 'Kode Matkul', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Nama Matkul', 1, 0, 'C');
		$pdf->Cell(10, 7, 'Sks', 1, 0, 'C');
		$pdf->Cell(20, 7, 'Semester', 1, 0., 'C');
		$pdf->Cell(60, 7, 'Jam Kuliah', 1, 0, 'C');
		$pdf->Cell(80, 7, 'Dosen', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		foreach ($data as $row) {
			$pdf->Cell(36, 6, $row->kode_matkul, 1, 0, 'C');
			$pdf->Cell(80, 6, $row->nama_matkul, 1, 0, '');
			$pdf->Cell(10, 6, $row->sks, 1, 0, 'C');
			$pdf->Cell(20, 6, $row->semester, 1, 0., 'C');
			$pdf->Cell(60, 6, $row->jadwal_masuk . " - " . $row->jadwal_selesai, 1, 0, 'C');
			$pdf->Cell(80, 6, $row->nama, 1, 1, '');

		}
		$pdf->LN(5);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "Jumlah Pengambilan SKS : " . $sksTotal);
		$pdf->Output();
	}
}
