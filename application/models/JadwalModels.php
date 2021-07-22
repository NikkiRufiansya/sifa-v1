<?php

class JadwalModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('jadwal_kuliah')->result();
	}

	public function getJadwal()
	{
		$query = $this->db->query("SELECT j.id ,j.nama_kelas, m.nama_matkul, m.semester, k.nama_kampus, j.ruangan ,p.nama_prodi , d.nama FROM jadwal_kuliah j, matkul m, program_studi p, kampus k, dosen d WHERE p.id = j.prodi_id AND m.id = j.matkul_id AND k.id = j.kampus_id AND d.id = j.dosen	");
		return $query->result();
	}

	public function jadwalNgajar($dosen_id, $tahun)
	{
		return $this->db->query("SELECT m.kode_matkul, m.nama_matkul, j.hari, j.jadwal_masuk, jadwal_selesai, k.nama_kampus, j.ruangan  
FROM jadwal_kuliah j, matkul m, kampus k 
WHERE m.id = j.matkul_id AND k.id = j.kampus_id AND dosen = '$dosen_id' AND tahun = '$tahun'")->result();
	}

	public function getJadwalByKRS($prodi_id, $semester)
	{
		$query = $this->db->query("SELECT 
									j.id, j.matkul_id, m.kode_matkul, m.semester, m.sks, m.nama_matkul, j.hari, j.jadwal_masuk, j.jadwal_selesai, d.nama 
									FROM jadwal_kuliah j, matkul m, dosen d 
									WHERE m.id = j.matkul_id AND d.id = j.dosen AND j.prodi_id = '$prodi_id' AND m.semester = '$semester'");
		return $query->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('jadwal_kuliah', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('jadwal_kuliah', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('jadwal_kuliah', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('jadwal_kuliah');
		return TRUE;
	}
}
