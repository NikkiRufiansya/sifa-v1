<?php

class RuanganModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('ruangan')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('ruangan', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('ruangan', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('ruangan', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('ruangan');
		return TRUE;
	}
}
