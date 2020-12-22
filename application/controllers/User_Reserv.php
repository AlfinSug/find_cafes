<?php

class User_Reserv extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'User Reservation';
        $this->load->view('utils/header-server', $data);
        $this->load->view('side_user/user-reserv');
    }
}
