<?php

class UserProfil_model extends CI_Model
{
    public function getUser()
    {
        return $this->db->get('user_profil')->result_array();
    }

    public function edit_profil_user()
    {
        $img_user = $_FILES['img_user']['name'];

        if ($img_user == "") {
        } else {
            $config['upload_path'] = './asset/img_user';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('img_user')) {
                $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
                redirect('profil_user');
            } else {
                $img_user = $this->upload->data('file_name');
            }
        }
        $data = array(
            // "id_user" => $this->session->userdata('id_user'),
            "nama_user" => $this->input->post('nama_user', true),
            "email_user" => $this->input->post('email_user', true),
            "notelp_user" => $this->input->post('notelp_user', true),
            "alamat_user" => $this->input->post('alamat_user', true),
            "bio" => $this->input->post('bio', true),
            "img_user" => $img_user
        );

        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->update('user_profil', $data);
    }
}
