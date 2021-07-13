<?php

class KampusModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('kampus')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('kampus', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('kampus', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('kampus', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('kampus');
		return TRUE;
	}
}
