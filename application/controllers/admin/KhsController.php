<?php

class KhsController extends CI_Controller
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
	}

	public function index()
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getMahasiswa();
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/KhsMahasiswa', $data);
		$this->load->view('partials/footer');
	}

	public function lihatKHS($id)
	{
		$idMahasiswa = array('id' => $id);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/PilihSemesterKHS', $data);
		$this->load->view('partials/footer');
	}

	public function KhsSemester()
	{
		$idMahasiswa = array('id' => $this->input->post('mahasiswa_id'));
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['semester'] = array('semester' => $this->input->post('semester'));
		$data['prodi_id'] = array('prodi_id' => $this->input->post('prodi_id'));
		$data['khs'] = $this->KrsModels->getKHSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$this->load->view('partials/head');
		$this->load->view('partials/topbar');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/akademik/khs/KhsPerSemester', $data);
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
		$this->load->view('admin/akademik/khs/KhsAllSemester', $data);
		$this->load->view('partials/footer');
	}

	public function cetakAllKHS()
	{
		$data = $this->KrsModels->getKHS($this->input->post('id'));
		$ip = array();
		$pi = array();
		$sks = array();
		$sks1 = array();
		$bobot = array();
		foreach ($data as $key => $value) {
			if ($value->grade == "A"){
				$bobot[] = 4;
			}else if ($value->grade == "B+"){
				$bobot[] = 3.5;
			}else if ($value->grade == "B"){
				$bobot[] = 3;
			}else if ($value->grade == "C+"){
				$bobot[] = 2.5;
			}else if ($value->grade == "C"){
				$bobot[] = 2;
			}else if ($value->grade == "D"){
				$bobot[] = 1;
			}else{
				$bobot[] = 0;
			}
			$ip[$key] = $value->sks * $bobot[$key]; //SKS * Nilai
			$pi[] = $ip[$key];
			$sks[$key] = $value->sks;
			$sks1[] = $sks[$key];
		}
		$ipk = array_sum($ip) / array_sum($sks); //sum(sks * nilai) / SKS
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
		$pdf->Cell(0, 0, 'Kartu Hasil Studi (KHS)', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "NIM : " . $this->input->post('nim'));
		$pdf->Ln(5);
		$pdf->Cell(0, 0, "Nama : " . $this->input->post('nama'));
		$pdf->Cell(-12, 0, "IPK : " . Round($ipk, 2), '', '', 'R');
		$pdf->LN(5);
		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(36, 7, 'Kode Matkul', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Nama Matkul', 1, 0, 'C');
		$pdf->Cell(10, 7, 'Sks', 1, 0, 'C');
		$pdf->Cell(19, 7, 'Semester', 1, 0., 'C');
		$pdf->Cell(50, 7, 'Jam Kuliah', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Dosen', 1, 0, 'C');
		$pdf->Cell(20, 7, 'Grade', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		foreach ($data as $row) {
			$pdf->Cell(36, 6, $row->kode_matkul, 1, 0, 'C');
			$pdf->Cell(70, 6, $row->nama_matkul, 1, 0, '');
			$pdf->Cell(10, 6, $row->sks, 1, 0, 'C');
			$pdf->Cell(19, 6, $row->semester, 1, 0., 'C');
			$pdf->Cell(50, 6, $row->jadwal_masuk . " - " . $row->jadwal_selesai, 1, 0, 'C');
			$pdf->Cell(70, 6, $row->nama, 1, 0, '');
			$pdf->Cell(20, 6, $row->grade, 1, 1, 'C');
		}
		$pdf->LN(5);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "Total SKS : " . $sksTotal);
		$pdf->Output();
	}

	public function cetakSemesterKHS()
	{
		$data = $this->KrsModels->getKHSPerSemester(
			$this->input->post('id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		$ip = array();
		$pi = array();
		$sks = array();
		$sks1 = array();
		$bobot = array();
		foreach ($data as $key => $value) {
			if ($value->grade == "A"){
				$bobot[] = 4;
			}else if ($value->grade == "B+"){
				$bobot[] = 3.5;
			}else if ($value->grade == "B"){
				$bobot[] = 3;
			}else if ($value->grade == "C+"){
				$bobot[] = 2.5;
			}else if ($value->grade == "C"){
				$bobot[] = 2;
			}else if ($value->grade == "D"){
				$bobot[] = 1;
			}else{
				$bobot[] = 0;
			}
			$ip[$key] = $value->sks * $bobot[$key]; //SKS * Nilai
			$pi[] = $ip[$key];
			$sks[$key] = $value->sks;
			$sks1[] = $sks[$key];
		}
		$ipk = array_sum($ip) / array_sum($sks); //sum(sks * nilai) / SKS
		$sksTotal = array_sum($sks);
		$pdf = new FPDF('L', 'mm', 'A4', 'C');
		// membuat halaman baru
		$pdf->AddPage();
		// setting jenis font yang akan digunakan
		$pdf->SetFont('Arial', 'B', 16);
		// mencetak string
		$pdf->Cell(0, 0, 'Akademi Komunitas Darussalam', 0, 1, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', '', 10);
		$pdf->Cell(0, 0, 'Jl. Blokagung-Karangdoro, Kaligesing, Karangmulyo, Tegalsari, Kabupaten Banyuwangi, Jawa Timur 68485', 0, '1', 'C');
		$pdf->Ln(5);
		$pdf->Cell(0, 0, '----------------------------------------------------------------------------------------------------------------------------------------------------------------------', 0, '1', 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 14);
		$pdf->Cell(0, 0, 'Kartu Hasil Studi (KHS)', 0, 1, 'C');
		$pdf->Ln(10);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "NIM : " . $this->input->post('nim'));
		$pdf->Ln(5);
		$pdf->Cell(0, 0, "Nama : " . $this->input->post('nama'));
		$pdf->Cell(-12, 0, "IPK : " . Round($ipk, 2), '', '', 'R');
		$pdf->LN(5);
		// Memberikan space kebawah agar tidak terlalu rapat
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(36, 7, 'Kode Matkul', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Nama Matkul', 1, 0, 'C');
		$pdf->Cell(10, 7, 'Sks', 1, 0, 'C');
		$pdf->Cell(19, 7, 'Semester', 1, 0., 'C');
		$pdf->Cell(50, 7, 'Jam Kuliah', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Dosen', 1, 0, 'C');
		$pdf->Cell(20, 7, 'Grade', 1, 1, 'C');
		$pdf->SetFont('Arial', '', 10);
		foreach ($data as $row) {
			$pdf->Cell(36, 6, $row->kode_matkul, 1, 0, 'C');
			$pdf->Cell(70, 6, $row->nama_matkul, 1, 0, '');
			$pdf->Cell(10, 6, $row->sks, 1, 0, 'C');
			$pdf->Cell(19, 6, $row->semester, 1, 0., 'C');
			$pdf->Cell(50, 6, $row->jadwal_masuk . " - " . $row->jadwal_selesai, 1, 0, 'C');
			$pdf->Cell(70, 6, $row->nama, 1, 0, '');
			$pdf->Cell(20, 6, $row->grade, 1, 1, 'C');
		}
		$pdf->LN(5);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->Cell(0, 0, "Total SKS : " . $sksTotal);
		$pdf->Output();
	}
}
