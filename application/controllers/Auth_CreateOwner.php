<?php

class Auth_CreateOwner extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }

    public function index()
    {
        $data['title'] = 'Create Owner';
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_create_owner');
    }
}
