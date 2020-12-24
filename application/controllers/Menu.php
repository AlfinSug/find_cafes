<?php

class Menu extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Menu';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/daftar_menu');
    }
}
