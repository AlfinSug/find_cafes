<?php

class Get_Cafe extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'All Cafe';
        $this->load->view('utils/header-server', $data);
        $this->load->view('side_user/get_cafe');
    }
}
