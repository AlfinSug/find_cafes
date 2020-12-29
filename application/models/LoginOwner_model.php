<?php

class LoginOwner_model extends CI_Model
{
    public function check_session()
    {
        return $this->session->userdata('id_cafe');
    }
    public function can_login($email_cafe, $pass_cafe)
    {

        $this->db->where('email_cafe', $email_cafe);
        $this->db->where('pass_cafe', $pass_cafe);
        $query = $this->db->get('cafe_profil');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id_cafe' => $row->id_cafe,
                    'nama_cafe' => $row->nama_cafe,
                    'email_cafe' => $row->email_cafe,
                    'pass_cafe' => $row->pass_cafe
                );
            }

            $this->session->set_userdata($data);
            redirect('dash_owner');
        } else {
            $this->session->set_flashdata('info', '<script>swal("Oops", "Email atau Password Cafe Anda Salah!", "error")</script>');
            redirect('auth_loginowner');
        }
    }
}
