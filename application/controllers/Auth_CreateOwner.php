<?php

class Auth_CreateOwner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CreateOwner_model');
    }

    public function index()
    {
        $data['title'] = 'Create Owner';
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_create_owner');
    }

    public function create_acc_owner()
    {
        $this->CreateOwner_model->createOwner();
        $this->session->set_flashdata('success', '<script>swal("Success", "Registrasi Owner Berhasil", "success")</script>');
        redirect('auth_loginowner');
    }
}
