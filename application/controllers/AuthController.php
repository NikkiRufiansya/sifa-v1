<?php

class AuthController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('AdminModels');
	}

	public function index()
	{
		$this->load->view('Auth');
	}

	public function login()
	{
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$errors = $this->form_validation->error_array();
			$this->session->set_flashdata('errors', $errors);
			$this->session->set_flashdata('input', $this->input->post());
			redirect('/'); // LOGIN

		} else {

			$email = $this->input->post('username');
			$pass = md5($this->input->post('password'));

			// CEK KE DATABASE BERDASARKAN EMAIL
			$cek_login = $this->AdminModels->cek_login($email);

			if ($cek_login == FALSE) {
				echo '<script>alert("email yang Anda masukan salah.");window.location.href="' . base_url('/') . '";</script>';

			} else {

				if ($pass == $cek_login->password) {
					// if the email and password is a match
					$this->session->set_userdata('id', $cek_login->id);
					$this->session->set_userdata('username', $cek_login->username);
					$this->session->set_userdata('email', $cek_login->email);
					$this->session->set_userdata('nama', $cek_login->nama);
					$this->session->set_userdata('level', $cek_login->level);
					if ($cek_login->level == 'admin') {
						redirect('/dashboard');
					} else if ($cek_login->level == 'dosen') {
						echo "Halaman Dosen";
					} else if ($cek_login->level == 'akademik') {
						echo "Halaman Akademik";
					} else if ($cek_login->level == 'marketing') {
						echo "Halaman Marketing";
					} else if ($cek_login->level == 'keuangan') {
						echo "Halaman Keuangan";
					}
				} else {
					echo '<script>alert("email atau Password yang Anda masukan salah.");window.location.href="' . base_url('/') . '";</script>';
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
