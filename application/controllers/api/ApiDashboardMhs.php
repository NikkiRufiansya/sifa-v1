<?php

/**
 *
 */
class ApiDashboardMhs extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('AdminModels');
		$this->load->model('MahasiswaModels');
		$this->load->model('PengumumanModels');
		$this->load->model('KrsModels');

	}

	
	public function profile($id)
	{
		$data = $this->MahasiswaModels->getMhsByUserId($id);
		print_r(json_encode(array(
			'data' => $data
		)));
	}


	public function pengumuman()
	{
		$data = $this->PengumumanModels->getAllData();
		print_r(json_encode(array(
			'data' => $data
		)));
	}

	public function detailPengumuman($id)
	{
		$data = $this->PengumumanModels->detail($id);
		print_r(json_encode(array(
			'data' => $data
		)));
	}

	public function transkripMhs($mahasiswa_id)
	{
		$data = $this->KrsModels->getKHS($mahasiswa_id);
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
		print_r(json_encode(array(
			'data' => $data,
			'ipk' => number_format($ipk, 2),
			'sksTotal' => $sksTotal
		)));
	}

	public function krsMhs()
	{
		$data = $this->KrsModels->getKRSPerSemester(
			$this->input->post('mahasiswa_id'),
			$this->input->post('semester'),
			$this->input->post('prodi_id')
		);
		print_r(json_encode(array(
			'data' => $data
		)));
	}

	public function khsMhs()
	{
		$data = $this->KrsModels->getKHSPerSemester(
			$this->input->post('mahasiswa_id'),
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
		print_r(json_encode(array(
			'data' => $data,
			'ipk' => number_format($ipk, 2),
			'sksTotal' => $sksTotal
		)));
		
	}
}


