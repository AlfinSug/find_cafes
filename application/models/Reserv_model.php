<?php

class Reserv_model extends CI_Model
{
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
}
