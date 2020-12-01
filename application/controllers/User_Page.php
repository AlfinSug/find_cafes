<?php

class User_Page extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'User Page';
        $this->load->view('side_user/user_page');
        $this->load->view('utils/footer');
    }
}
