<?php

class Catalog extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Cafe Catalog';
        $this->load->view('header/header', $data);
        $this->load->view('catalog/catalog');
    }
}
