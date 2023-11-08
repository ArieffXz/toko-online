<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', [
			'required' => 'Username Wajib Diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password Harus Sesuai'
		]);
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login';
			$this->load->view('login_templates/header', $data);
			$this->load->view('auth/login');
			$this->load->view('login_templates/footer');
		} else {
			$auth = $this->model_auth->cek_login();

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Username atau Password Anda Salah !
			  	</div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						redirect('admin/dashboard');
						break;
					case 2:
						redirect('welcome');
						break;
					default:
						break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
