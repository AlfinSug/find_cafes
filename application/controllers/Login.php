<?php

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index()
    {
        $this->load->view('login/login-barista');
    }

    public function login_kasir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kasir', 'Nama Kasir', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $nama_kasir = $this->input->post('nama_kasir');
            $password = $this->input->post('password');
            $this->login_model->can_login($nama_kasir, $password);
        } else {
            $this->load->view('login/login-barista');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_success', '<script>swal("Logout Success", "Anda berhasil logout", "success")</script>');
        redirect('login');
    }
}
