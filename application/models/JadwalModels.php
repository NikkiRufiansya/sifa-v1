<?php

class JadwalModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('jadwal_kuliah')->result();
	}

	public function getJadwal()
	{
		$query = $this->db->query("SELECT  j.id ,j.nama_kelas, m.nama_matkul, m.semester, k.nama_kampus, j.ruangan ,p.nama_prodi , j.dosen FROM jadwal_kuliah j, matkul m, program_studi p, kampus k WHERE p.id = j.prodi_id AND m.id = j.matkul_id AND k.id = j.kampus_id");
		return $query->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('jadwal_kuliah', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('jadwal_kuliah', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('jadwal_kuliah', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('jadwal_kuliah');
		return TRUE;
	}
}
