<?php

class Auth_Login extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }
    public function index()
    {
        $data['title'] = 'Authentication';
        $this->load->view('utils/auth_login');
        $this->load->view('utils/footer');
    }
}
