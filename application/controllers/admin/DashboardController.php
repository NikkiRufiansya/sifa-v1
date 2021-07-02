<?php

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->cek_login();
	}

	public function index()
	{
		$this->load->view('Dashboard');
	}
}
