<?php

class CreateUser_model extends CI_Model
{

    public function createUser()
    {
        // $birthdate = $this->input->post('birthdate', true);
        // $strDate = date('Y-m-d', strtotime($birthdate));
        $data = array(
            "id_user" => $this->input->post('id_user', true),
            "nama_user" => $this->input->post('nama_user', true),
            "email_user" => $this->input->post('email_user', true),
            "pass_user" => $this->input->post('pass_user', true),
            "jenis_kel" => $this->input->post('jenis_kel', true),
            "notelp_user" => $this->input->post('notelp_user', true),
            "alamat_user" => $this->input->post('alamat_user', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),

        );
        $this->db->insert('user_profil', $data);
    }
}
