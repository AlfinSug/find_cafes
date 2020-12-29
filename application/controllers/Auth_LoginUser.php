<?php

class Auth_LoginUser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserProfil_model');
        $this->load->model('LoginUser_model');
        // $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login User';
        // $data['user'] = $this->UserProfil_model->getUser();
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_login_user');
    }

    public function login_user()
    {
        $this->form_validation->set_rules('notelp_user', 'No. Telpon', 'required');
        $this->form_validation->set_rules('pass_user', 'Password', 'required');

        if ($this->form_validation->run()) {
            $notelp_user = $this->input->post('notelp_user');
            $pass_user = $this->input->post('pass_user');
            $this->LoginUser_model->can_login($notelp_user, $pass_user);
        } else {
            $data['title'] = 'Login User';
            // $data['user'] = $this->UserProfil_model->getUser();
            $this->load->view('utils/header-auth', $data);
            $this->load->view('utils/auth_login_user');
        }
    }

    public function logout_user()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_success', '<script>swal("Logout Success", "Anda berhasil logout", "success")</script>');
        redirect('auth_loginuser');
    }
}
