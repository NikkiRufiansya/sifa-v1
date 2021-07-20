<?php

class KrsModels extends CI_Model
{
	public function getAllData()
	{
		return $this->db->get('jadwal_matkul_mahasiswa')->result();
	}

	public function insertJadwal($data)
	{
		$query = $this->db->insert('jadwal_matkul_mahasiswa', $data);
		return $query;
	}

	public function getJadwalMatkulMahasisawa($semester, $prodi_id)
	{
		$query = $this->db->query("SELECT jm.id, jm.jadwal_id,
			m.kode_matkul, m.nama_matkul,m.sks,m.semester,j.ruangan, j.hari ,j.jadwal_masuk,j.jadwal_selesai , d.nama , jm.grade
			FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d
			WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND  m.semester = '$semester' AND j.prodi_id  = '$prodi_id' GROUP BY jadwal_id");
		return $query->result();
	}

	public function getMhsByJadwal($id)
	{
		$query = $this->db->query("SELECT jm.mahasiswa_id, jm.jadwal_id , m.nama FROM jadwal_matkul_mahasiswa jm, mahasiswa m WHERE m.id = jm.mahasiswa_id AND jadwal_id = '$id'");
		return $query->result();
	}

	public function getKRS($id)
	{
		$query = $this->db->query("SELECT 
				m.kode_matkul, m.nama_matkul,m.sks,m.semester,j.ruangan, j.hari ,j.jadwal_masuk,j.jadwal_selesai , d.nama 
				FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d 
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND mahasiswa_id = '$id' GROUP BY jadwal_id");
		return $query->result();
	}

	public function getKHS($id)
	{
		$query = $this->db->query("SELECT 
				m.kode_matkul, m.nama_matkul,m.sks,m.semester,j.ruangan, j.hari ,j.jadwal_masuk,j.jadwal_selesai , d.nama , jm.grade
				FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d 
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND mahasiswa_id = '$id' GROUP BY jadwal_id ASC");
		return $query->result();
	}

	public function getSKS($id)
	{
		$query = $this->db->query("SELECT m.sks
				FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d 
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND mahasiswa_id = '$id' GROUP BY jadwal_id ASC");
		return $query->result();
	}

	public function getKRSPerSemester($mahasiswa_id, $semester, $prodi_id)
	{
		$query = $this->db->query("SELECT jm.id,
				m.kode_matkul, m.nama_matkul,m.sks,m.semester,j.ruangan, j.hari ,j.jadwal_masuk,j.jadwal_selesai , d.nama , jm.grade
				FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND mahasiswa_id = '$mahasiswa_id' AND m.semester = '$semester' AND j.prodi_id  = '$prodi_id' GROUP BY jadwal_id");
		return $query->result();
	}

	public function getKHSPerSemester($mahasiswa_id, $semester, $prodi_id)
	{
		$query = $this->db->query("SELECT jm.id,
				m.kode_matkul, m.nama_matkul,m.sks,m.semester,j.ruangan, j.hari ,j.jadwal_masuk,j.jadwal_selesai , d.nama , jm.grade
				FROM jadwal_matkul_mahasiswa jm, jadwal_kuliah j, matkul m, dosen d
				WHERE j.id = jm.jadwal_id AND m.id = j.matkul_id AND d.id = j.dosen AND mahasiswa_id = '$mahasiswa_id' AND m.semester = '$semester' AND j.prodi_id  = '$prodi_id' GROUP BY jadwal_id");
		return $query->result();
	}

	public function validasiQuery($mahasiswa_id, $jadwal_id)
	{
		return $this->db->query("SELECT * FROM `jadwal_matkul_mahasiswa` WHERE mahasiswa_id = '$mahasiswa_id' AND jadwal_id = '$jadwal_id'")->result();
	}

	public function insert($data)
	{
		$query = $this->db->insert('jadwal_matkul_mahasiswa', $data);
		return $query;
	}

	public function getDataById($where)
	{
		$query = $this->db->get_where('jadwal_matkul_mahasiswa', $where);
		$query = $query->result_array();
		return $query;
	}

	function update_data($where, $data)
	{
		$this->db->where($where);
		$this->db->update('jadwal_matkul_mahasiswa', $data);
	}

	public function delete($where)
	{
		$this->db->where($where);
		$this->db->delete('jadwal_matkul_mahasiswa');
		return TRUE;
	}
}
