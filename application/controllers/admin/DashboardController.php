<?php

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('AdminModels');
		$this->cek_login();
	}

	public function index()
	{
		$this->load->view('partials/head');
		$this->load->view('admin/Dashboard');
		$this->load->view('partials/footer');
	}

	public function staffAdmin()
	{
		$users['users'] = $this->AdminModels->getAllData();
		$this->load->view('partials/head');
		$this->load->view('admin/menejemenUsers/Administrator', $users);
		$this->load->view('partials/footer');
	}

	public function tambahAdmin()
	{
		$this->load->view('partials/head');
		$this->load->view('admin/menejemenUsers/TambahAdmin');
		$this->load->view('partials/footer');
	}

	public function prosesTambahAdmin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepone' => $this->input->post('telepone'),
			'level' => $this->input->post('level')
		);
		$this->AdminModels->insert($data);
		redirect(base_url('staff_admin'));
	}

	public function ubahUser($id)
	{
		$idUsers = array('id' => $id);
		$users['users'] = $this->AdminModels->getDataById($idUsers);
		$this->load->view('partials/head');
		$this->load->view('admin/menejemenUsers/UbahAdmin', $users);
		$this->load->view('partials/footer');
	}

	public function prosesUbahAdmin()
	{
		$idUsers = array('id' => $this->input->post('id'));
		if ($this->input->post('new_password') == null) {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('old_password'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => $this->input->post('level')
			);
			$this->AdminModels->update_data($idUsers, $data);
			redirect('staff_admin');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('new_password')),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'telepone' => $this->input->post('telepone'),
				'level' => $this->input->post('level')
			);
			$this->AdminModels->update_data($idUsers, $data);
			redirect('staff_admin');
		}
	}

	public function hapusAdmin($id)
	{
		$idUsers = array('id' => $id);
		$this->AdminModels->delete($idUsers);
		redirect(base_url('staff_admin'));

		$this->load->view('Dashboard');
	}
}
