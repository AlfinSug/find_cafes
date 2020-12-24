<?php

class Profil_User extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Profil User';
        $this->load->view('utils/header-server', $data);
        $this->load->view('side_user/profil_user');
    }
}
