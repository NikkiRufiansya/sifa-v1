<?php

class MatkulModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('matkul')->result();
	}

	public function getMakulByProdiAndKurikulum()
	{
		return $this->db->query('SELECT m.id, p.nama_prodi, k.nama_kurikulum,m.kode_matkul, m.nama_matkul, m.semester, m.sks, m.penanggung_jawab FROM matkul m, program_studi p, kurikulum k WHERE p.id = m.prodi_id AND k.id = m.kurikulum_id')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('matkul', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('matkul', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('matkul', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('matkul');
		return TRUE;
	}
}
