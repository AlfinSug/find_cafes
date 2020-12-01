<?php

class Owner_Page extends CI_Controller
{
    public function index()
    {

        $data['title'] = 'Owner Page';
        $this->load->view('side_owner/owner-page');
        $this->load->view('utils/footer');
    }
}
