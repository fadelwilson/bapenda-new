<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MenuController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	//menambahkan menu input menu
	public function Index()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('MenuModel');
		$data['DataTampil'] = $this->MenuModel->DataTampilUser();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('Menu/DaftarUser', $data);
		$this->load->view('templates/footer');
	}

	// tambah user
	public function TambahUser()
	{
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('MenuModel');
		$data['DataTampil'] = $this->MenuModel->DataTampilUser();

		$id = $this->input->post('id');
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => $this->input->post('role_id'),
			'email' => $this->input->post('email'),
			'date_created' => $this->input->post('date_created'),
			'jabatan' => $this->input->post('jabatan'),
			'nip_perekam' => $this->input->post('nip_perekam'),
			'is_active' => $this->input->post('is_active'),
		);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('Menu/DaftarUser', $data);
		$this->load->view('templates/footer');

		$this->db->insert('user', $data);
		redirect('MenuController/Index');
	}

	public function Edit()
	{
		$this->load->model('MenuModel');

		$id = $this->input->post('id');
		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => $this->input->post('role_id'),
			'email' => $this->input->post('email'),
			'date_created' => $this->input->post('date_created'),
			'jabatan' => $this->input->post('jabatan'),
			'nip_perekam' => $this->input->post('nip_perekam'),
			'is_active' => $this->input->post('is_active')
		);

		$this->MenuModel->EditUser($data, $id);
		redirect('MenuController/Index');
	}

	// proses hapus user
	public function HapusUser($id)
	{
		$this->load->model('MenuModel');
		$data = $this->MenuModel->HapusUser($id);

		if ($data == "") {
			$this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
			redirect('MenuController/Index');
		} else {
			$this->db->where('id', $id);
			$this->db->delete('user');
			$this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
			redirect('MenuController/Index');
		}
	}

	// public function injectMenu()
	// {
	// 	$this->load->model('MenuModel');
	// 	echo '<pre>';
	// 	print_r($this->MenuModel->getMenu());
	// 	echo '</pre>';
	// 	exit;
	// 	$this->MenuModel->inject();



	// 	redirect('MenuController/Index');
	// }
}
