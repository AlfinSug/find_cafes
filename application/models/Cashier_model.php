<?php

class Cashier_model extends CI_Model
{

    public function getAllCashier()
    {
        return $this->db->get('kasir')->result_array();
    }
    public function insertCashier()
    {

        $data = [
            "nama_kasir" => $this->input->post('nama_kasir', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no_telp', true),
            "password" => $this->input->post('password', true)

        ];

        $this->db->insert('kasir', $data);
        $this->session->set_flashdata('success', '<script>swal("Data Saved", "Data telah berhasil ditambahkan", "success")</script>');
        redirect('cashier');
    }

    public function updateCashier($data, $id_kasir)
    {

        $this->db->where('id_kasir', $id_kasir);
        $this->db->update('kasir', $data);
        return TRUE;
    }

    public function delCashier($id_kasir)
    {
        $this->db->where('id_kasir', $id_kasir);
        $this->db->delete('kasir');

        $this->session->set_flashdata('del_success', '<script>swal("Deleted Data", "Data telah berhasil dihapus", "success")</script>');
        redirect('cashier');
    }
}
