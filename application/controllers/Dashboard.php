<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('Trans_model');
    }

    public function index()
    {
        if ($this->login_model->check_session()) {
            $data['title'] = 'Dashboard';
            $data['laporan'] = $this->Trans_model->getAllTrans();
            $this->load->view('sidebar/sidebar', $data);
            $this->load->view('data/dashboard', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('login');
        }
    }
}
