<?php

class AbsensiMhsModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('absensi_mahasiswa')->result();
	}

	public function insert($data)
	{
		return $query = $this->db->insert('absensi_mahasiswa', $data);
		return $query;
	}

	public function validasiQuery($pertemuan, $jadwal, $mahasiswa_id)
	{
		$query = $this->db->query("SELECT * FROM `absensi_mahasiswa` WHERE pertemuan = '$pertemuan' AND jadwal_id = '$jadwal' AND mahasiswa_id = '$mahasiswa_id'");
		return $query->result();
	}

	public function CekAbsensiMhs($jadwal_id, $mahasiswa_id)
	{
		$query = $this->db->query("SELECT * FROM absensi_mahasiswa WHERE jadwal_id = '$jadwal_id' AND mahasiswa_id = $mahasiswa_id");
		return $query->result();
	}

	public function getNamaMatkul($id)
	{
		$query = $this->db->query("SELECT m.nama_matkul 
				FROM  jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m 
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND jm.jadwal_id = '$id' GROUP BY jm.jadwal_id");
		return $query->result();
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('absensi_mahasiswa', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('absensi_mahasiswa', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('absensi_mahasiswa');
		return TRUE;
	}
}
