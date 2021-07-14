<?php

class MahasiswaController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('MahasiswaModels');
		$this->load->model('ProgramStudiModels');
		$this->load->model('KurikulumModels');
		$this->load->model('DosenModels');
		$this->load->model('ProgramModels');
		$this->cek_login();
	}

	public function index()
	{
		$data['mahasiswa'] = $this->MahasiswaModels->getMahasiswa();
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/mahasiswa/Mahasiswa', $data);
		$this->load->view('admin/master/mahasiswa/footer');
	}

	public function tambahMahasiswa()
	{
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/mahasiswa/TambahMahasiswa', $data);
		$this->load->view('admin/master/mahasiswa/footer');
	}

	public function prosesTambahMahasiswa()
	{
		$dataUsers = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepone' => $this->input->post('telepone'),
			'level' => 'mahasiswa'
		);
		$users_id = $this->MahasiswaModels->insert('users', $dataUsers);
		$dataMhs = array(
			'users_id' => $users_id,
			'prodi_id' => $this->input->post('prodi_id'),
			'kurikulum_id' => $this->input->post('kurikulum_id'),
			'program' => $this->input->post('program'),
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'angkatan' => $this->input->post('angkatan'),
			'email' => $this->input->post('email'),
			'telepone' => $this->input->post('telepone'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'alamat' => $this->input->post('alamat'),
			'status_awal' => $this->input->post('status_awal'),
			'ka_prodi' => $this->input->post('ka_prodi'),
			'foto' => 'default_profile.png'
		);
		$this->DosenModels->insert('mahasiswa', $dataMhs);
		redirect(base_url('admin_mahasiswa'));
	}

	public function ubahMahasiswa($id)
	{
		$idMahasiswa = array('id' => $id);
		$lastId = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		foreach ($lastId as $key) ;
		$usersId = array('id' => $key['users_id']);
		$data['mahasiswa'] = $this->MahasiswaModels->getDataById('mahasiswa', $idMahasiswa);
		$data['users'] = $this->MahasiswaModels->getDataById('users', $usersId);
		$data['prodi'] = $this->ProgramStudiModels->getAllData();
		$data['dosen'] = $this->DosenModels->getAllData();
		$data['program'] = $this->ProgramModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/Sidebar');
		$this->load->view('admin/master/mahasiswa/UbahMahasiswa', $data);
		$this->load->view('admin/master/mahasiswa/footer');
	}

	public function prosesUbahMahasiswa()
	{
		$users_id = array('id' => $this->input->post('users_id'));
		$mahasiswa_id = array('id' => $this->input->post('id'));
		if ($this->input->post('new_password') == null) {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('old_password'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'mahasiswa'
			);
			$this->MahasiswaModels->update_data('users', $users_id, $dataUsers);
			$dataMhs = array(
				'users_id' => $this->input->post('users_id'),
				'prodi_id' => $this->input->post('prodi_id'),
				'kurikulum_id' => $this->input->post('kurikulum_id'),
				'program' => $this->input->post('program'),
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'angkatan' => $this->input->post('angkatan'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'status_awal' => $this->input->post('status_awal'),
				'ka_prodi' => $this->input->post('ka_prodi'),
				'foto' => 'default_profile.png'
			);
			$this->DosenModels->update_data('mahasiswa', $mahasiswa_id, $dataMhs);
			redirect('admin_mahasiswa');
		} else {
			$dataUsers = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('new_password')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => 'mahasiswa'
			);
			$this->DosenModels->update_data('users', $users_id, $dataUsers);
			$dataMhs = array(
				'users_id' => $this->input->post('users_id'),
				'prodi_id' => $this->input->post('prodi_id'),
				'kurikulum_id' => $this->input->post('kurikulum_id'),
				'program' => $this->input->post('program'),
				'nama' => $this->input->post('nama'),
				'nim' => $this->input->post('nim'),
				'angkatan' => $this->input->post('angkatan'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'agama' => $this->input->post('agama'),
				'alamat' => $this->input->post('alamat'),
				'status_awal' => $this->input->post('status_awal'),
				'ka_prodi' => $this->input->post('ka_prodi'),
				'foto' => 'default_profile.png'
			);
			$this->DosenModels->update_data('mahasiswa', $mahasiswa_id, $dataMhs);
			redirect('admin_mahasiswa');
		}
	}

	public function hapusMahasiswa($mahasiswa_id, $users_id)
	{
		$mahasiswa_id = array('id' => $mahasiswa_id);
		$users_id = array('id' => $users_id);
		$this->DosenModels->delete('users' , $users_id);
		$this->DosenModels->delete('mahasiswa' , $mahasiswa_id);
		redirect('admin_mahasiswa');
	}


}
