<?php

class Home extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'Home';
        $this->load->view('utils/header', $data);
        $this->load->view('utils/index');
        $this->load->view('utils/footer');
    }
}
