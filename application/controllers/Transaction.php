<?php

class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Coffee_model');
        $this->load->model('Trans_model');
        $this->load->model('Login_model');
    }

    public function index()
    {
        if ($this->Login_model->check_session()) {
            $data['title'] = 'Transaction';
            $data['coffee'] = $this->Coffee_model->getAllCoffee();
            $data['trans'] = $this->Trans_model->getAllTrans();
            $this->load->view('sidebar/sidebar', $data);
            $this->load->view('data/transaction', $data);
        } else {
            $this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
            redirect('login');
        }
    }
    public function insert()
    {
        return $this->Trans_model->insertTrans();
    }

    public function updates()
	{
		$id_trx = $this->input->post('id_trx');
        $data = [
            "id_kopi" => $this->input->post('menu_kopi', true),
            "jumlah" => $this->input->post('jumlah', true),
            "harga_total" => $this->input->post('harga_total', true),
            "tgl_trx" => $this->input->post('tgl_trx', true)
        ];
		$this->Trans_model->upTrans($data, $id_trx);
		$this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Data telah berhasil diubah", "success")</script>');
		redirect('transaction');
	}
    public function delete($id_trx)
    {
        return $this->Trans_model->delTrans($id_trx);
    }
}
