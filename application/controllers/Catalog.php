<?php

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
    }
    public function index()
    {
        $data['title'] = 'Cafe Catalog';
        $data['cafe_catalog'] = $this->CafeProfil_model->getAllCafe();
        $this->load->view('utils/catalog', $data);
        // $this->load->view('utils/footer');
    }
}
