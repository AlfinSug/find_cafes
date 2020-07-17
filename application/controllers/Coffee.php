<?php
class Coffee extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Coffee_model');
		$this->load->model('Login_model');
	}

	public function index()
	{
		if ($this->Login_model->check_session()) {
			$data['title'] = 'Coffee Catalog';
			$data['coffee'] = $this->Coffee_model->getAllCoffee();
			$this->load->view('sidebar/sidebar', $data);
			$this->load->view('data/coffee', $data);
		} else {
			$this->session->set_flashdata('session_failed', '<script>swal("Login Access", "Anda harus login terlebih dahulu", "info")</script>');
			redirect('login');
		}
	}
	public function ubah()
	{

		$id_kopi = $this->input->post('id_kopi');
		$gambar = $_FILES['gambar']['name'];

		if ($gambar == "") { } else {
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
		$this->Coffee_model->updateCoffee($data, $id_kopi);
		$this->session->set_flashdata('edit_success', '<script>swal("Data Change", "Data telah berhasil diubah", "success")</script>');
		redirect('coffee');
	}

	public function insert()
	{
		return $this->Coffee_model->insertCoffee();
	}
	public function delete($id_kopi)
	{
		return $this->Coffee_model->delCoffee($id_kopi);
	}
}
