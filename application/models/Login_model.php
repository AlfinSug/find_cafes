<?php

class Login_model extends CI_Model
{
    public function check_session()
    {
        return $this->session->userdata('id_kasir');
    }
    public function can_login($nama_kasir, $password)
    {

        $this->db->where('nama_kasir', $nama_kasir);
        $this->db->where('password', $password);
        $query = $this->db->get('kasir');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data = array(
                    'id_kasir' => $row->id_kasir,
                    'nama_kasir' => $row->nama_kasir,
                    'password' => $row->password
                );
            }

            $this->session->set_userdata($data);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('info', '<script>swal("Oops", "Username atau Password salah!", "error")</script>');
            redirect('login');
        }
    }
}
