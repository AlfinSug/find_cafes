<?php

class Trans_model extends CI_Model
{
    public function getAllTrans()
    {
        return $this->db->query('select t.id_trx, k.id_kopi, k.gambar, k.nama_kopi, k.harga, t.jumlah, t.harga_total, t.tgl_trx from transaksi t inner join kopi k on k.id_kopi=t.id_kopi;')->result_array();
    }
    public function insertTrans()
    {

        $data = [
            "id_kopi" => $this->input->post('menu_kopi', true),
            "jumlah" => $this->input->post('jumlah', true),
            "harga_total" => $this->input->post('harga_total', true),
            "tgl_trx" => $this->input->post('tgl_trx', true)
        ];

        $this->db->insert('transaksi', $data);
        $this->session->set_flashdata('success', '<script>swal("Data Saved", "Data telah berhasil ditambahkan", "success")</script>');
        redirect('transaction');
    }

    public function upTrans($data, $id_trx) {
        $this->db->where('id_trx', $id_trx);
        $this->db->update('transaksi', $data);
        return true;
    }

    public function delTrans($id_trx)
    {
        $this->db->where('id_trx', $id_trx);
        $this->db->delete('transaksi');

        $this->session->set_flashdata('del_success', '<script>swal("Deleted Data", "Data telah berhasil dihapus", "success")</script>');
        redirect('transaction');
    }
}
