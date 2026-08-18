<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function Index()
	{

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Dash Login';
			$this->load->view('Auth/Login', $data);
		} else {
			// validasinya sukses
			$this->_login();
		}
	}

	private function _login()
	{

		$username  = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		// jika usernya ada
		if ($user) {

			//cek password

			if (password_verify($password, $user['password'])) {

				$data = [
					'username' => $user['username'],
					'role_id' => $user['role_id']
				];

				$this->session->set_userdata($data);
				if ($user['role_id'] == 1) {
					redirect('User/Index');
				} else {
					redirect('User/Index');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert"> Password Salah!</div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert"> Username Salah!</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert"> Berhasil Logout!</div>');
		redirect('Auth');
	}

	public function blocked()
	{
		$this->load->view('Auth/blocked');
	}
}
