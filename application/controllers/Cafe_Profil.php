<?php

class Cafe_Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CafeProfil_model');
        // $this->load->model('LoginUser_model');
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Cafe Profil';
        $this->load->view('utils/header-owner', $data);
        $this->load->view('side_owner/cafe_profil');
    }

    public function edit_profils()
    {
        // $img_user = $_FILES['img_user']['name'];

        // if ($img_user == "") {
        // } else {
        //     $config['upload_path'] = './asset/img_user';
        //     $config['allowed_types'] = 'jpg|png';

        //     $this->load->library('upload', $config);
        //     if (!$this->upload->do_upload('img_user')) {
        //         $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
        //         redirect('profil_user');
        //     } else {
        //         $img_user = $this->upload->data('file_name');
        //     }
        // }
        $data = array(
            "id_cafe" => $this->input->post('id_cafe', true),
            "nama_cafe" => $this->input->post('nama_cafe', true),
            "email_cafe" => $this->input->post('email_cafe', true),
            "notelp_cafe" => $this->input->post('notelp_cafe', true),
            "alamat_cafe" => $this->input->post('alamat_cafe', true),
            "url_maps" => $this->input->post('url_maps', true),
            "sosmed" => $this->input->post('sosmed', true),
            "jam_buka" => $this->input->post('jam_buka', true),
            // "img_user" => $img_user,
        );

        $result = $this->CafeProfil_model->edit_profil_owner($this->session->userdata('id_cafe'), $data);

        if ($result > 0) {
            $session_data = array(
                'id_cafe' => $data['id_cafe'],
                'nama_cafe' => $data['nama_cafe'],
                'notelp_cafe' => $data['notelp_cafe'],
                'pass_cafe' => $data['pass_cafe'],
                'email_cafe' => $data['email_cafe'],
                'sosmed' => $data['sosmed'],
                'jam_buka' => $data['jam_buka'],
                'url_maps' => $data['url_maps'],
                'alamat_cafe' => $data['alamat_cafe'],
                // 'img_user' => $data['img_user'],
            );
            $this->session->set_userdata($session_data);
            $this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('cafe_profil');
        } else {
            $this->session->set_flashdata('edit_failed', '<script>swal("Data Change", "Profil anda telah berhasil diubah", "success")</script>');
            redirect('cafe_profil');
        }
    }
}
