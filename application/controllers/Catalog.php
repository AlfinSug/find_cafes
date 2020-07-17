<?php

class Catalog extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Coffee_model');
    }


    public function index()
    {
        $data['title'] = 'Coffee Catalog';
        $data['coffee'] = $this->Coffee_model->getAllCoffee();
        $this->load->view('header/header', $data);
        $this->load->view('catalog/catalog', $data);
    }
}
