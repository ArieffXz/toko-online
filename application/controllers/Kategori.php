<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    
    public function electronic()
    {
        $data['electronic'] = $this->model_kategori->
            data_electronic()->result();
        $data['title'] = 'Kategori - Electronic';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('electronic', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_pria()
    {
        $data['pakaian_pria'] = $this->model_kategori->
            data_pakaian_pria()->result();
        $data['title'] = 'Kategori - Pakaian Pria';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_pria', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_wanita()
    {
        $data['pakaian_wanita'] = $this->model_kategori->
            data_pakaian_wanita()->result();
        $data['title'] = 'Kategori - Pakaian Wanita';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_wanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaian_anak()
    {
        $data['pakaian_anak'] = $this->model_kategori->
            data_pakaian_anak()->result();
        $data['title'] = 'Kategori - Pakaian Anak';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('pakaian_anak', $data);
        $this->load->view('templates/footer');
    }

    public function olahraga()
    {
        $data['pakaian_olahraga'] = $this->model_kategori->
            data_olahraga()->result();
        $data['title'] = 'Kategori - Pakaian Olahraga';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('olahraga', $data);
        $this->load->view('templates/footer');
    }
}