<?php

class Cafe_Profil extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Cafe Profil';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/cafe_profil');
    }
}
