<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['cafe_list'] = $this->CafeProfil_model->getCafeRecommended();
        $this->load->view('utils/header', $data);
        $this->load->view('utils/index', $data);
        $this->load->view('utils/footer');
    }
}
