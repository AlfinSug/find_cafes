<?php

class Reserv_model extends CI_Model
{
    public function getReservUser()
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select r.id_reserv, u.nama_user, c.nama_cafe, r.tgl_reserv, r.jumlah_kursi, r.status_reserv, r.bukti_pembayaran, c.notelp_cafe from reservation r inner join user_profil u on u.id_user = r.id_user inner join cafe_profil c on c.id_cafe= r.id_cafe where u.id_user =' . $id_user)->result_array();
    }
    public function getReservCafe()
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select r.id_reserv, u.nama_user, c.nama_cafe, r.tgl_reserv, r.jumlah_kursi, r.status_reserv, r.bukti_pembayaran, c.notelp_cafe from reservation r inner join user_profil u on u.id_user = r.id_user inner join cafe_profil c on c.id_cafe= r.id_cafe where c.id_cafe =' . $id_cafe)->result_array();
    }

    public function getTotalReservasi()
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as total_reserv from reservation where id_cafe =' . $id_cafe)->result_array();
    }

    public function getCountAccReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as acc_reserv from reservation where status_reserv = 1 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountRefuseReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as ref_reserv from reservation where status_reserv = 2 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountCancelReserv($id_cafe)
    {
        $id_cafe = $this->session->userdata('id_cafe');
        return $this->db->query('select count(id_reserv) as cancel_reserv from reservation where status_reserv = 3 and id_cafe=' . $id_cafe)->result_array();
    }

    public function getCountAccReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as acc_reserv from reservation where status_reserv = 1 and id_user=' . $id_user)->result_array();
    }

    public function getCountRefuseReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as ref_reserv from reservation where status_reserv = 2 and id_user=' . $id_user)->result_array();
    }

    public function getCountCancelReservUser($id_user)
    {
        $id_user = $this->session->userdata('id_user');
        return $this->db->query('select count(id_reserv) as cancel_reserv from reservation where status_reserv = 3 and id_user=' . $id_user)->result_array();
    }
    public function reservation()
    {
        $img_bukti = $_FILES['bukti_pembayaran']['name'];

        if ($img_bukti == "") {
        } else {
            $config['upload_path'] = './asset/img_bukti';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('bukti_pembayaran')) {
                $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
                redirect('get_Cafe');
            } else {
                $img_bukti = $this->upload->data('file_name');
            }
        }
        $data = array(

            'id_reserv' => $this->input->post('id_reserv', true),
            'id_user' => $this->input->post('id_user', true),
            'id_cafe' => $this->input->post('id_cafe', true),
            'tgl_reserv' => $this->input->post('tgl_reserv', true),
            'jumlah_kursi' => $this->input->post('jumlah_kursi', true),
            'note_reserv' => $this->input->post('note_reserv', true),
            'bukti_pembayaran' => $img_bukti,

        );
        $this->db->insert('reservation', $data);
    }

    public function cancel_reserv()
    {
        $id_reserv = $_REQUEST['id_reserv'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 3;
        } else {
            $status = 0;
        }
        $data = array(
            "status_reserv" => $status
        );
        $this->db->where('id_reserv', $id_reserv);
        return $this->db->update('reservation', $data);
    }

    public function acc_reserv()
    {
        $id_reserv = $_REQUEST['id_reserv'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 1;
        } else {
            $status = 0;
        }
        $data = array(
            "no_meja" => $this->input->post('no_meja', true),
            "status_reserv" => $status
        );
        $this->db->where('id_reserv', $id_reserv);
        return $this->db->update('reservation', $data);
    }

    public function refuse_reserv()
    {
        $id_reserv = $_REQUEST['id_reserv'];
        $saval = $_REQUEST['sval'];

        if ($saval == 0) {
            $status = 2;
        } else {
            $status = 0;
        }
        $data = array(
            "note_tolak" => $this->input->post('note_tolak', true),
            "status_reserv" => $status
        );
        $this->db->where('id_reserv', $id_reserv);
        return $this->db->update('reservation', $data);
    }
}
