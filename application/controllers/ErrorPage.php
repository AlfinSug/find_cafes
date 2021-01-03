<?php

class ErrorPage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Reserv_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Error Page';
        $this->load->view('utils/error_page', $data);
    }
}
