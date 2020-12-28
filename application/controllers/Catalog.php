<?php

class Catalog extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Cafe Catalog';
        $this->load->view('utils/catalog');
        // $this->load->view('utils/footer');
    }
}
