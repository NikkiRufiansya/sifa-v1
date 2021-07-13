<?php

class KurikulumModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('kurikulum')->result();
	}

	public function getDataKurikulumAndProdi()
	{
		return $this->db->query("SELECT k.id, p.nama_prodi, k.kode_kurikulum, k.nama_kurikulum FROM program_studi p, kurikulum k WHERE p.id = k.prodi_id")->result();
	}


	public function insert($data)
	{
		$query = $this->db->insert('kurikulum', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('kurikulum', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('kurikulum', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('kurikulum');
		return TRUE;
	}
}
