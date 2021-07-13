<?php

class ProgramStudiModels extends CI_Model{

	public function getAllData()
	{
		return $this->db->get('program_studi')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('program_studi', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('program_studi', $where);
		$query = $query->result_array();
		return $query;
	}



	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('program_studi', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('program_studi');
		return TRUE;
	}

}
