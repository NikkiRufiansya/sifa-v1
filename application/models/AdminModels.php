<?php

class AdminModels extends CI_Model{
	public function cek_login($username)
	{
		$hasil = $this->db->where('username', $username)->limit(1)->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}

	public function getAllData(){
		return $this->db->get('users')->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('users', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('users', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('users', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('users');
		return TRUE;
	}
}
