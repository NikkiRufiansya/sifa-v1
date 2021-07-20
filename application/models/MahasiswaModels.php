<?php

class MahasiswaModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('mahasiswa')->result();
	}

	public function getMahasiswa()
	{
		return $this->db->query("SELECT m.id, m.users_id, m.nim, m.nama, m.angkatan, p.nama_prodi FROM program_studi p, kurikulum k, mahasiswa m WHERE p.id = m.prodi_id AND k.id = m.kurikulum_id")->result();
	}

	public function getMhsByUserId($users_id)
	{
		return $this->db->query("SELECT * FROM `mahasiswa` WHERE users_id = '$users_id'")->result();
	}

	public function gantiFoto($foto, $id)
	{
		return $this->db->query("UPDATE `mahasiswa` SET `foto` = '$foto' WHERE `mahasiswa`.`id` = '$id'");
	}

	public function insert($table, $data)
	{
		$query = $this->db->insert($table, $data);
		return $this->db->insert_id();// return last insert id
	}

	public function getDataById($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($table, $where, $data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($table, $where)
	{
		$this->db->where($where);
		$this->db->delete($table);
		return TRUE;
	}
}
