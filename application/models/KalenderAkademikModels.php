<?php

class KalenderAkademikModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('kalender_akademik')->result();
	}

	public function getKalender()
	{
		$query = $this->db->query(
				"SELECT k.id, 
					k.tahun, k.nama_kalender, 
					pd.nama_prodi, p.nama_program, 
					k.krs_mulai, k.krs_selesai, 
					k.uts_mulai, k.uts_selesai,
					k.uas_mulai, k.uas_selesai,
					k.input_nilai_mulai, k.input_nilai_selesai,
					k.cetak_khs
				FROM kalender_akademik k, program_studi pd, program p WHERE pd.id = k.prodi_id AND p.id = k.program_id"
			);
		return $query->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('kalender_akademik', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('kalender_akademik', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('kalender_akademik', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('kalender_akademik');
		return TRUE;
	}
}
