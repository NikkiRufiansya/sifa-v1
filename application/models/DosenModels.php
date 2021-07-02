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
}
