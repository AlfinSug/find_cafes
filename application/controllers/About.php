<?php

class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		if ($this->Login_model->check_session()) {
			$data['title'] = 'About Us';
			$this->load->view('sidebar/sidebar', $data);
			$this->load->view('data/about');
		} else {
			$this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
			redirect('login');
		}
	}
}
