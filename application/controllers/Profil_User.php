<?php

class Profil_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserProfil_model');
        $this->load->model('LoginUser_model');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->LoginUser_model->check_session()) {
            $data['title'] = 'Profil User';
            $this->load->view('utils/header-server', $data);
            $this->load->view('side_user/profil_user');
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('auth_loginuser');
        }
    }

    public function edit_profil()
    {
        $this->UserProfil_model->edit_profil_user();
        $this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
        redirect('profil_user');
    }
}
