<?php

class Daftar_Reservasi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Reservasi';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/daftar_reservasi');
    }
}
