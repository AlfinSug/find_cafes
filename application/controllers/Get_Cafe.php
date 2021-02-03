<?php

class Get_Cafe extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Reserv_model');
        $this->load->library('session');
    }
    public function index()
    {
        if ($this->LoginUser_model->check_session()) {
            $data['title'] = 'All Cafe';
            $data['cafe_catalog'] = $this->CafeProfil_model->getAllCafe();
            $data['list_reserv'] = $this->Reserv_model->getReservUser();
            $this->load->view('utils/header-server', $data);
            $this->load->view('side_user/get_cafe', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('errorPage');
        }
    }

    public function reserv_now()
    {
        $this->Reserv_model->reservation();
        $this->session->set_flashdata('success', '<script>swal("Reservation", "Reservasi berhasil, tunggu owner sampai mengonfirmasi reservasi anda", "success")</script>');
        redirect('get_Cafe');
    }
}
