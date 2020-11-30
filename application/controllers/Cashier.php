<?php

class Cashier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cashier_model');
		$this->load->model('Login_model');
	}

	public function index()
	{
		if ($this->Login_model->check_session()) {
			$data['title'] = 'Cashier';
			$data['cashier'] = $this->Cashier_model->getAllCashier();
			$this->load->view('utils/sidebar', $data);
			$this->load->view('side_owner/cashier', $data);
		} else {
			$this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
			redirect('login');
		}
	}

	public function insert()
	{
		return $this->Cashier_model->insertCashier();
	}

	public function ubah()
	{
		$id_kasir = $this->input->post('id_kasir');
		$data = [
			"nama_kasir" => $this->input->post('nama_kasir', true),
			"alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('no_telp', true),
			"password" => $this->input->post('password', true)

		];
		$this->Cashier_model->updateCashier($data, $id_kasir);
		$this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Data telah berhasil diubah", "success")</script>');
		redirect('cashier');
	}

	public function delete($id_kasir)
	{
		return $this->Cashier_model->delCashier($id_kasir);
	}
}
