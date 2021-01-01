<?php

class Reserv_model extends CI_Model
{
    public function getReservUser()
    {
        $this->db->select('*');
        $this->db->from('reservation');
        $this->db->join('user_profil', 'reservation.id_user = user_profil.id_user');
        $this->db->join('cafe_profil', 'reservation.id_cafe = cafe_profil.id_cafe');
        return $this->db->get()->result_array();
    }

    public function getTotalReservasi()
    {
        return $this->db->query('select count(id_reserv) as total_reserv from reservation')->result_array();
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
                redirect('get_cafe');
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
