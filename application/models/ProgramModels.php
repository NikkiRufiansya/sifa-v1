<?php

class ProgramModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('program')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('program', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('program', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('program', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('program');
		return TRUE;
	}
}
