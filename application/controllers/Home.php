<?php 

class Home extends CI_Controller {
    public function index() {

        $data['title'] = 'Home';
        $this->load->view('header/header', $data);
        $this->load->view('home/index');
    }
}

?>