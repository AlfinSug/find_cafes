<?php

class Dash_Owner extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard Owner';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/dash_owner');
    }
}
