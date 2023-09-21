<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '2') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Anda Belum Login ! </div>');
			redirect('auth/login');
		}
	}

	public function tambah_keranjang($id)
	{
		$barang = $this->model_barang->find($id);

		$data = array(
			'id'      => $barang->id_barang,
			'qty'     => 1,
			'price'   => $barang->harga,
			'name'    => $barang->nama_barang
		);
		
		$this->cart->insert($data);
		redirect('welcome');
	}

	public function detail_keranjang()
	{ 
		$data['title'] = 'Keranjang';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome');
	}

	public function pembayaran()
	{
		$data['title'] = 'Pembayaran';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		
		$data['title'] = 'Proses Pesanan';
		$is_processed = $this->model_invoice->index();
		if ($is_processed) {
			$this->cart->destroy();
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		}else {
			echo "Maaf, Pesanan Gagal Di Proses";
			redirect('dashboard');
		}
	}

	public function detail($id_barang)
	{
		$data['barang'] = $this->model_barang->detail_barang($id_barang);
		$data['title'] = 'Detail Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}



}
