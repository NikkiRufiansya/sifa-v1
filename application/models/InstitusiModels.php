<?php

class InstitusiModels extends CI_Model
{
	public function getAllData(){
		return $this->db->get('identitas_institusi')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('identitas_institusi', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('identitas_institusi', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('identitas_institusi', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('identitas_institusi');
		return TRUE;
	}
}
