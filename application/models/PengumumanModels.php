<?php

class PengumumanModels extends CI_Model
{
	public function getAllData(){
		return $this->db->query("SELECT * FROM `pengumuman` ORDER BY tanggal DESC")->result();
	}

	public function detail($id)
	{
		return $this->db->query("SELECT * FROM `pengumuman` WHERE id = '$id'")->result();
	}
	public function insert($data)
	{
		$query = $this->db->insert('pengumuman', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('pengumuman', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('pengumuman', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('pengumuman');
		return TRUE;
	}
}
