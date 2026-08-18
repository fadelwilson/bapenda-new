<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SeputarController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('SeputarModel');
	}

	//proses Index Informasi
	public function Index()
	{
		$data['title'] = 'Upload Seputar Informasi';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['DataTampil'] = $this->SeputarModel->DataTampilInformasi();

		$this->form_validation->set_rules('foto_seputar', 'Photo Seputar', 'trim');
		$this->form_validation->set_rules('judul_seputar', 'Judul Seputar', 'required');
		$this->form_validation->set_rules('narasi_seputar', 'Narasi Seputar', 'required');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Seputar/Informasi/SeputarInformasiView', $data);
			$this->load->view('templates/footer');
		else :
			$Uploadfotoseputar = $this->UploadSeputarInformasi('foto_seputar');
			if ($Uploadfotoseputar == FALSE) :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
				redirect('SeputarController/Index');
			else :
				$data = [
					'foto_seputar'          => $Uploadfotoseputar,
					'judul_seputar'     	=> htmlspecialchars($this->input->post('judul_seputar', true)),
					'narasi_seputar'     	=> htmlspecialchars($this->input->post('narasi_seputar', true)),
					'tgl_upload'          	=> date('Y-m-d'),
				];
				$resp = $this->SeputarModel->SeputarInformasi($data);
				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                            Data berhasil disimpan
                            </div>');
					redirect('SeputarController/Index');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                            Data gagal disimpan!
                            </div>');
					redirect('SeputarController/Index');
				endif;
			endif;
		endif;
	}

	private function UploadSeputarInformasi($data)
	{
		$config['upload_path']          = './uploads/seputar/informasi/';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

	public function Hapus($id)
	{
		$cek_data = $this->db->get_where('seputar_informasi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$resp = $this->db->delete('seputar_informasi', ['id' => $id]);

			// hapus filex
			$path1 = './uploads/seputar/informasi/' . $cek_data['foto_seputar'];
			unlink($path1);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

				redirect('SeputarController/Index');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

				redirect('SeputarController/Index');
			endif;

		else :
		endif;
	}

	public function EditFotoSeputar($id)
	{
		$cek_data = $this->db->get_where('seputar_informasi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Foto Seputar Informasi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('foto_seputar', 'Foto Seputar', 'trim');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Informasi/EditFotoInformasiView', $data);
				$this->load->view('templates/footer');
			else :

				$Uploadfotoseputar = $this->UploadSeputarInformasi('foto_seputar'); // parameter nama foto

				if ($Uploadfotoseputar == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

					redirect('SeputarController/Index');
				else :

					// hapus file
					$path = './uploads/seputar/informasi/' . $cek_data['foto_seputar'];
					unlink($path);

					$data = [
						'foto_seputar'				=> $Uploadfotoseputar,
					];

					$resp = $this->db->update('seputar_informasi', $data, ['id' => $id]);;

					if ($resp) :
						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

						redirect('SeputarController/Index');
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

						redirect('SeputarController/Index');
					endif;

				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/Index');
		endif;
	}



	public function Edit($id)
	{
		$cek_data = $this->db->get_where('seputar_informasi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Seputar Informasi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('judul_seputar', 'Judul Seputar', 'required');
			$this->form_validation->set_rules('narasi_seputar', 'Narasi Seputar', 'required');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Informasi/EditSeputarInformasiView', $data);
				$this->load->view('templates/footer');
			else :
				$data = [
					'judul_seputar'   		=> htmlspecialchars($this->input->post('judul_seputar', true)),
					'narasi_seputar'   		=> htmlspecialchars($this->input->post('narasi_seputar', true)),
				];

				$resp = $this->db->update('seputar_informasi', $data, ['id' => $id]);;

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

					redirect('SeputarController/Index');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

					redirect('SeputarController/Index');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/Index');
		endif;
	}


	// Controller Seputar ALur Pembayaran
	//proses Index alur
	public function IndexAlur()
	{
		$data['title'] = 'Upload Seputar Alur';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['DataTampil'] = $this->SeputarModel->DataTampilAlur();

		$this->form_validation->set_rules('foto_alur', 'Photo alur', 'trim');
		$this->form_validation->set_rules('judul_alur', 'Judul alur', 'required');
		$this->form_validation->set_rules('narasi_alur', 'Narasi alur', 'required');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Seputar/Alur/SeputarAlurView', $data);
			$this->load->view('templates/footer');
		else :
			$Uploadfotoalur = $this->UploadSeputarAlur('foto_alur');
			if ($Uploadfotoalur == FALSE) :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                 Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                 </div>');
				redirect('SeputarController/IndexAlur');
			else :
				$data = [
					'foto_alur'           => $Uploadfotoalur,
					'judul_alur'          => htmlspecialchars($this->input->post('judul_alur', true)),
					'narasi_alur'         => htmlspecialchars($this->input->post('narasi_alur', true)),
					'tgl_upload'          => date('Y-m-d'),
				];
				$resp = $this->SeputarModel->UploadSeputarAlur($data);
				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                             Data berhasil disimpan
                             </div>');
					redirect('SeputarController/IndexAlur');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                             Data gagal disimpan!
                             </div>');
					redirect('SeputarController/IndexAlur');
				endif;
			endif;
		endif;
	}

	private function UploadSeputarAlur($data)
	{
		$config['upload_path']          = './uploads/seputar/alur';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

	public function HapusSeputarAlur($id)
	{
		$cek_data = $this->db->get_where('seputar_alur', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$resp = $this->db->delete('seputar_alur', ['id' => $id]);

			// hapus filex
			$path1 = './uploads/seputar/alur/' . $cek_data['foto_alur'];
			unlink($path1);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

				redirect('SeputarController/IndexAlur');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

				redirect('SeputarController/IndexAlur');
			endif;

		else :
		endif;
	}

	public function EditFotoSeputarAlur($id)
	{
		$cek_data = $this->db->get_where('seputar_alur', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Foto Seputar Alur';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('foto_alur', 'Foto Alur', 'trim');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Alur/EditFotoAlurView', $data);
				$this->load->view('templates/footer');
			else :

				$Uploadfotoseputaralur = $this->UploadSeputarAlur('foto_alur'); // parameter nama foto

				if ($Uploadfotoseputaralur == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

					redirect('SeputarController/IndexAlur');
				else :

					// hapus file
					$path = './uploads/seputar/alur/' . $cek_data['foto_alur'];
					unlink($path);

					$data = [
						'foto_alur'				=> $Uploadfotoseputaralur,
					];

					$resp = $this->db->update('seputar_alur', $data, ['id' => $id]);;

					if ($resp) :
						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

						redirect('SeputarController/IndexAlur');
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

						redirect('SeputarController/IndexAlur');
					endif;

				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexAlur');
		endif;
	}

	public function EditAlur($id)
	{
		$cek_data = $this->db->get_where('seputar_alur', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Seputar Alur';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('judul_alur', 'Judul Seputar', 'required');
			$this->form_validation->set_rules('narasi_alur', 'Narasi Seputar', 'required');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Alur/EditSeputarAlurView', $data);
				$this->load->view('templates/footer');
			else :
				$data = [
					'judul_alur'   		=> htmlspecialchars($this->input->post('judul_alur', true)),
					'narasi_alur'   		=> htmlspecialchars($this->input->post('narasi_alur', true)),
				];

				$resp = $this->db->update('seputar_alur', $data, ['id' => $id]);;

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

					redirect('SeputarController/IndexAlur');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

					redirect('SeputarController/IndexAlur');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexAlur');
		endif;
	}
	// end controller seputar alur


	// Controller Seputar Visi
	//proses Index visi
	public function IndexVisi()
	{
		$data['title'] = 'Upload Seputar Visi';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['DataTampil'] = $this->SeputarModel->DataTampilVisi();

		$this->form_validation->set_rules('foto_visi', 'Photo visi', 'trim');
		$this->form_validation->set_rules('judul_visi', 'Judul visi', 'required');
		$this->form_validation->set_rules('narasi_visi', 'Narasi visi', 'required');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Seputar/Visi/SeputarVisiView', $data);
			$this->load->view('templates/footer');
		else :
			$Uploadfotovisi = $this->UploadSeputarVisi('foto_visi');
			if ($Uploadfotovisi == FALSE) :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                 Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                 </div>');
				redirect('SeputarController/IndexVisi');
			else :
				$data = [
					'foto_visi'           => $Uploadfotovisi,
					'judul_visi'          => htmlspecialchars($this->input->post('judul_visi', true)),
					'narasi_visi'         => htmlspecialchars($this->input->post('narasi_visi', true)),
					'tgl_upload'          => date('Y-m-d'),
				];
				$resp = $this->SeputarModel->UploadSeputarVisi($data);
				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                             Data berhasil disimpan
                             </div>');
					redirect('SeputarController/IndexVisi');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                             Data gagal disimpan!
                             </div>');
					redirect('SeputarController/IndexVisi');
				endif;
			endif;
		endif;
	}

	private function UploadSeputarVisi($data)
	{
		$config['upload_path']          = './uploads/seputar/visi';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

	public function HapusSeputarVisi($id)
	{
		$cek_data = $this->db->get_where('seputar_visi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$resp = $this->db->delete('seputar_visi', ['id' => $id]);

			// hapus filex
			$path1 = './uploads/seputar/visi/' . $cek_data['foto_visi'];
			unlink($path1);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

				redirect('SeputarController/IndexVisi');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

				redirect('SeputarController/IndexVisi');
			endif;

		else :
		endif;
	}

	public function EditFotoSeputarVisi($id)
	{
		$cek_data = $this->db->get_where('seputar_visi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Foto Seputar Visi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('foto_visi', 'Foto visi', 'trim');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Visi/EditFotoVisiView', $data);
				$this->load->view('templates/footer');
			else :

				$Uploadfotoseputarvisi = $this->UploadSeputarvisi('foto_visi'); // parameter nama foto

				if ($Uploadfotoseputarvisi == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

					redirect('SeputarController/Indexvisi');
				else :

					// hapus file
					$path = './uploads/seputar/visi/' . $cek_data['foto_visi'];
					unlink($path);

					$data = [
						'foto_visi'				=> $Uploadfotoseputarvisi,
					];

					$resp = $this->db->update('seputar_visi', $data, ['id' => $id]);;

					if ($resp) :
						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

						redirect('SeputarController/IndexVisi');
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

						redirect('SeputarController/IndexVisi');
					endif;

				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexVisi');
		endif;
	}

	public function EditVisi($id)
	{
		$cek_data = $this->db->get_where('seputar_visi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Seputar Visi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('judul_visi', 'Judul Visi', 'required');
			$this->form_validation->set_rules('narasi_visi', 'Narasi Visi', 'required');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Visi/EditSeputarVisiView', $data);
				$this->load->view('templates/footer');
			else :
				$data = [
					'judul_visi'   		=> htmlspecialchars($this->input->post('judul_visi', true)),
					'narasi_visi'   		=> htmlspecialchars($this->input->post('narasi_visi', true)),
				];

				$resp = $this->db->update('seputar_visi', $data, ['id' => $id]);;

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

					redirect('SeputarController/IndexVisi');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

					redirect('SeputarController/IndexVisi');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexVisi');
		endif;
	}
	// end controller seputar visi

	// Controller Seputar misi
	//proses Index misi
	public function IndexMisi()
	{
		$data['title'] = 'Upload Seputar Misi';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['DataTampil'] = $this->SeputarModel->DataTampilMisi();

		$this->form_validation->set_rules('foto_misi', 'Photo Misi', 'trim');
		$this->form_validation->set_rules('judul_misi', 'Judul Misi', 'required');
		$this->form_validation->set_rules('narasi_misi', 'Narasi Misi', 'required');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Seputar/Misi/SeputarMisiView', $data);
			$this->load->view('templates/footer');
		else :
			$Uploadfotomisi = $this->UploadSeputarmisi('foto_misi');
			if ($Uploadfotomisi == FALSE) :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                 Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                 </div>');
				redirect('SeputarController/IndexMisi');
			else :
				$data = [
					'foto_misi'           => $Uploadfotomisi,
					'judul_misi'          => htmlspecialchars($this->input->post('judul_misi', true)),
					'narasi_misi'         => htmlspecialchars($this->input->post('narasi_misi', true)),
					'tgl_upload'          => date('Y-m-d'),
				];
				$resp = $this->SeputarModel->UploadSeputarMisi($data);
				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                             Data berhasil disimpan
                             </div>');
					redirect('SeputarController/IndexMisi');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                             Data gagal disimpan!
                             </div>');
					redirect('SeputarController/IndexMisi');
				endif;
			endif;
		endif;
	}

	private function UploadSeputarMisi($data)
	{
		$config['upload_path']          = './uploads/seputar/misi';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

	public function HapusSeputarmisi($id)
	{
		$cek_data = $this->db->get_where('seputar_misi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$resp = $this->db->delete('seputar_misi', ['id' => $id]);

			// hapus filex
			$path1 = './uploads/seputar/misi/' . $cek_data['foto_misi'];
			unlink($path1);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

				redirect('SeputarController/IndexMisi');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

				redirect('SeputarController/IndexMisi');
			endif;

		else :
		endif;
	}

	public function EditFotoSeputarMisi($id)
	{
		$cek_data = $this->db->get_where('seputar_misi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Foto Seputar Misi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('foto_misi', 'Foto misi', 'trim');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Misi/EditFotoMisiView', $data);
				$this->load->view('templates/footer');
			else :

				$Uploadfotoseputarmisi = $this->UploadSeputarmisi('foto_misi'); // parameter nama foto

				if ($Uploadfotoseputarmisi == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

					redirect('SeputarController/IndexMisi');
				else :

					// hapus file
					$path = './uploads/seputar/misi/' . $cek_data['foto_misi'];
					unlink($path);

					$data = [
						'foto_misi'				=> $Uploadfotoseputarmisi,
					];

					$resp = $this->db->update('seputar_misi', $data, ['id' => $id]);;

					if ($resp) :
						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

						redirect('SeputarController/IndexMisi');
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

						redirect('SeputarController/IndexMisi');
					endif;

				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexMisi');
		endif;
	}

	public function EditMisi($id)
	{
		$cek_data = $this->db->get_where('seputar_misi', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Seputar Misi';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('judul_misi', 'Judul misi', 'required');
			$this->form_validation->set_rules('narasi_misi', 'Narasi misi', 'required');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/Misi/EditSeputarMisiView', $data);
				$this->load->view('templates/footer');
			else :
				$data = [
					'judul_misi'   		=> htmlspecialchars($this->input->post('judul_misi', true)),
					'narasi_misi'   		=> htmlspecialchars($this->input->post('narasi_misi', true)),
				];

				$resp = $this->db->update('seputar_misi', $data, ['id' => $id]);;

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

					redirect('SeputarController/IndexMisi');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

					redirect('SeputarController/IndexMisi');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexMisi');
		endif;
	}
	// end controller seputar misi

	// Controller Seputar PPID
	//proses Index PPID
	public function IndexPPID()
	{
		$data['title'] = 'Upload Seputar PPID';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();
		$data['DataTampil'] = $this->SeputarModel->DataTampilPPID();

		$this->form_validation->set_rules('foto_ppid', 'Photo PPID', 'trim');
		$this->form_validation->set_rules('judul_ppid', 'Judul PPID', 'required');
		$this->form_validation->set_rules('narasi_ppid', 'Narasi PPID', 'required');

		if ($this->form_validation->run() == FALSE) :
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Seputar/PPID/SeputarPPIDView', $data);
			$this->load->view('templates/footer');
		else :
			$Uploadfotoppid = $this->UploadSeputarPPID('foto_ppid');
			var_dump($Uploadfotoppid);
			if ($Uploadfotoppid == FALSE) :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                 Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                 </div>');
				redirect('SeputarController/IndexPPID');
			else :
				$data = [
					'foto_ppid'           => $Uploadfotoppid,
					'judul_ppid'          => htmlspecialchars($this->input->post('judul_ppid', true)),
					'narasi_ppid'         => htmlspecialchars($this->input->post('narasi_ppid', true)),
					'tgl_upload'          => date('Y-m-d'),
				];
				$resp = $this->SeputarModel->UploadSeputarPPID($data);
				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                             Data berhasil disimpan
                             </div>');
					redirect('SeputarController/IndexPPID');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                             Data gagal disimpan!
                             </div>');
					redirect('SeputarController/IndexPPID');
				endif;
			endif;
		endif;
	}

	private function UploadSeputarPPID($data)
	{
		$config['upload_path']          = './uploads/seputar/ppid';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

	public function HapusSeputarPPID($id)
	{
		$cek_data = $this->db->get_where('seputar_ppid', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$resp = $this->db->delete('seputar_ppid', ['id' => $id]);

			// hapus filex
			$path1 = './uploads/seputar/ppid/' . $cek_data['foto_ppid'];
			unlink($path1);

			if ($resp) :
				$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

				redirect('SeputarController/IndexPPID');
			else :
				$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

				redirect('SeputarController/IndexPPID');
			endif;

		else :
		endif;
	}

	public function EditFotoSeputarPPID($id)
	{
		$cek_data = $this->db->get_where('seputar_ppid', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Foto Seputar PPID';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('foto_ppid', 'Foto PPID', 'trim');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/PPID/EditFotoPPIDView', $data);
				$this->load->view('templates/footer');
			else :

				$Uploadfotoseputarppid = $this->UploadSeputarPPID('foto_ppid'); // parameter nama foto

				if ($Uploadfotoseputarppid == FALSE) :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

					redirect('SeputarController/IndexPPID');
				else :

					// hapus file
					$path = './uploads/seputar/ppid/' . $cek_data['foto_ppid'];
					unlink($path);

					$data = [
						'foto_ppid'				=> $Uploadfotoseputarppid,
					];

					$resp = $this->db->update('seputar_ppid', $data, ['id' => $id]);;

					if ($resp) :
						$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

						redirect('SeputarController/IndexPPID');
					else :
						$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

						redirect('SeputarController/IndexPPID');
					endif;

				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexPPID');
		endif;
	}

	public function EditPPID($id)
	{
		$cek_data = $this->db->get_where('seputar_ppid', ['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

			$data['EditData'] = $cek_data;
			$data['title'] = 'Edit Seputar PPID';
			$data['user'] = $this->db->get_where('user', ['username' =>
			$this->session->userdata('username')])->row_array();

			$this->form_validation->set_rules('judul_ppid', 'Judul PPID', 'required');
			$this->form_validation->set_rules('narasi_ppid', 'Narasi PPID', 'required');

			if ($this->form_validation->run() == FALSE) :
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('templates/topbar', $data);
				$this->load->view('Seputar/PPID/EditSeputarPPIDView', $data);
				$this->load->view('templates/footer');
			else :
				$data = [
					'judul_ppid'   		=> htmlspecialchars($this->input->post('judul_ppid', true)),
					'narasi_ppid'   		=> htmlspecialchars($this->input->post('narasi_ppid', true)),
				];

				$resp = $this->db->update('seputar_ppid', $data, ['id' => $id]);

				if ($resp) :
					$this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

					redirect('SeputarController/IndexPPID');
				else :
					$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

					redirect('SeputarController/IndexPPID');
				endif;

			endif;

		else :
			$this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('SeputarController/IndexPPID');
		endif;
	}
	// end controller seputar PPID
}
