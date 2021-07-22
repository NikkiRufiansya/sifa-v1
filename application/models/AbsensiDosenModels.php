<?php

class AbsensiDosenModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('absensi_dosen')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('absensi_dosen', $data);
		return $query;
	}

	public function validasiQuery($dosen_id, $tanggal)
	{
		return $this->db->query("SELECT * FROM `absensi_dosen` WHERE dosen_id = '$dosen_id' and tanggal = '$tanggal'")->result();
	}


	public function getDataById($where)
	{
		$query = $this->db->get_where('absensi_dosen', $where);
		$query = $query->result_array();
		return $query;
	}

	public function getDataByDosenId($id)
	{
		return $this->db->query("SELECT * FROM `absensi_dosen` WHERE dosen_id = '$id' ORDER BY `absensi_dosen`.`tanggal` DESC")->result();
	}

	public function getDataByDate($date)
	{
		$query = $this->db->query("SELECT d.nama, a.status, a.tanggal FROM absensi_dosen a, dosen d WHERE d.id = a.dosen_id AND tanggal = '$date'");
		return $query->result();
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('absensi_dosen', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('absensi_dosen');
		return TRUE;
	}
}
