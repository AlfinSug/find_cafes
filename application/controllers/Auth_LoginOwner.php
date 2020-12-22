<?php

class Auth_LoginOwner extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }

    public function index()
    {
        $data['title'] = 'Login Owner';
        $this->load->view('utils/header-auth', $data);
        $this->load->view('utils/auth_login_owner');
    }
}
