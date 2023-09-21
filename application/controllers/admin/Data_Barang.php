<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Anda Belum Login ! </div>');
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['title'] = 'Data Barang';
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah()
	{
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stock = $this->input->post('stock');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = "") {}else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp|webp';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal di upload !";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan'  => $keterangan,
			'kategori' 	  => $kategori,
			'harga' 	  => $harga,
			'stock' 	  => $stock,
			'gambar' 	  => $gambar
		);
		$this->model_barang->tambah_barang($data, 'tb_barang');
		redirect('admin/data_barang');
	}

	public function edit($id)
	{
		$where = array('id_barang' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();

		$data['title'] = 'Edut Data Barang';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stock = $this->input->post('stock');

		$data = array(

			'nama_barang' => $nama_barang,
			'keterangan'  => $keterangan,
			'kategori' 	  => $kategori,
			'harga' 	  => $harga,
			'stock' 	  => $stock
		);

		$where = array (
			'id_barang' => $id
		);


		$this->model_barang->update_barang($where,$data,'tb_barang');
		redirect('admin/data_barang/index');

	}

	public function hapus($id)
    {
        $where = array('id_barang' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
		redirect('admin/data_barang/index');
    }

}
