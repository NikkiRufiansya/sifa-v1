<?php

class DosenModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('dosen')->result();
	}

	public function insert($table,$data){
		$query = $this->db->insert($table, $data);
		return $this->db->insert_id();// return last insert id
	}

	public function getDataById($table,$where)
	{
		$query = $this->db->get_where($table, $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($table,$where, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return TRUE;
	}
}
