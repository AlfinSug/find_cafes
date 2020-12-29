<?php

class LoginUser_model extends CI_Model
{

    public function check_session()
    {
        return $this->session->userdata('id_user');
    }
    public function can_login($notelp_user, $pass_user)
    {

        $this->db->where('notelp_user', $notelp_user);
        $this->db->where('pass_user', $pass_user);
        $query = $this->db->get('user_profil');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id_user' => $row->id_user,
                    'notelp_user' => $row->notelp_user,
                    'pass_user' => $row->pass_user,
                    'nama_user' => $row->nama_user
                );
            }

            $this->session->set_userdata($data);
            redirect('get_cafe');
        } else {
            $this->session->set_flashdata('info', '<script>swal("Oops", "Nomor Telepon atau Password Anda Salah!", "error")</script>');
            redirect('auth_loginuser');
        }
    }
}
