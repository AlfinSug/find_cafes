<?php

class Coffee_model extends CI_Model
{

    public function getAllCoffee()
    {
        return $this->db->get('kopi')->result_array();
    }

    public function insertCoffee()
    {
        $gambar = $_FILES['gambar']['name'];

        if ($gambar == "") {
        } else {
            $config['upload_path'] = './asset/gambar_kopi';
            $config['allowed_types'] = 'jpg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $this->session->set_flashdata('file_failed', '<script>swal("Format File", "Format gambar yang diperbolehkan adalah .jpg/.png", "error")</script>');
                redirect('coffee');
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(

            'gambar' => $gambar,
            'nama_kopi' => $this->input->post('nama_kopi', true),
            'harga' => $this->input->post('harga', true),
            'stock' => $this->input->post('stock', true),
            'desc_kopi' => $this->input->post('desc_kopi', true)

        );

        $this->db->insert('kopi', $data);
        $this->session->set_flashdata('success', '<script>swal("Data Saved", "Data telah berhasil ditambahkan", "success")</script>');
        redirect('coffee');
    }

    public function updateCoffee($data, $id_kopi)
    {
        $this->db->where('id_kopi', $id_kopi);
        $this->db->update('kopi', $data);
        return TRUE;
    }

    public function delCoffee($id_kopi)
    {
        $this->db->where('id_kopi', $id_kopi);
        $this->db->delete('kopi');

        $this->session->set_flashdata('del_success', '<script>swal("Deleted Data", "Data telah berhasil dihapus", "success")</script>');
        redirect('coffee');
    }
}
