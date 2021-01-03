<?php

class User_Reserv extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserProfil_model');
        $this->load->model('LoginUser_model');
        $this->load->model('Reserv_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'User Reservation';
        $data['list_reserv'] = $this->Reserv_model->getReservUser();
        $this->load->view('utils/header-server', $data);
        $this->load->view('side_user/user_reserv', $data);
    }

    public function canceled()
    {
        if (isset($_REQUEST['sval'])) {
            $res = $this->Reserv_model->cancel_reserv();
            if ($res > 0) {
                $this->session->set_flashdata('edit_success', '<script>swal("Cancel", "Reservasi telah dibatalkan", "success")</script>');
            }
            return redirect('user_reserv');
        }
    }
}
