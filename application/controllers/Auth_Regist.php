<?php

class Auth_Regist extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Login_model');
    // }
    public function index()
    {
        $data['title'] = 'Authentication';
        $this->load->view('utils/auth_regist');
        $this->load->view('utils/footer');
    }
}
