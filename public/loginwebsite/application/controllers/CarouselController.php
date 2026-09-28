<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CarouselController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('CarouselModel');
	}

	public function Index()
	{
		$data['title'] = 'Upload Popup Carousel';
		$data['user']  = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();
		$data['DataTampil'] = $this->CarouselModel->DataTampil();

		$this->form_validation->set_rules('judul', 'Judul / Label Media', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Carousel/CarouselView', $data);
			$this->load->view('templates/footer');
		} else {
			if (empty($_FILES['file_media']['name'])) {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Silakan pilih file foto atau video yang ingin diunggah!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('CarouselController/Index');
				return;
			}

			// Validasi ukuran maksimal 100 MB
			$max_bytes = 100 * 1024 * 1024;
			if ($_FILES['file_media']['size'] > $max_bytes) {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Ukuran file melebihi batas maksimal 100 MB!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('CarouselController/Index');
				return;
			}

			$upload_res = $this->_do_upload('file_media');
			if (!$upload_res['status']) {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
					$upload_res['error'] .
					'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
				redirect('CarouselController/Index');
				return;
			}

			$file_name = $upload_res['file_name'];
			$file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
			$video_exts = ['mp4', 'webm', 'mov', 'avi', 'mkv'];
			$tipe = in_array($file_ext, $video_exts) ? 'video' : 'image';

			// Auto converter ke WebP jika gambar
			if ($tipe === 'image') {
				$file_name = $this->_convert_to_webp('./uploads/carousel/' . $file_name);
			}

			$insert_data = [
				'judul'      => htmlspecialchars($this->input->post('judul', TRUE)),
				'tipe'       => $tipe,
				'file_media' => $file_name,
				'created_at' => date('Y-m-d H:i:s'),
			];

			$resp = $this->CarouselModel->Insert($insert_data);
			if ($resp) {
				$this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
					Media carousel berhasil ditambahkan!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
			} else {
				$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					Gagal menyimpan data carousel!
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>');
			}

			redirect('CarouselController/Index');
		}
	}

	public function Edit($id)
	{
		$data['title'] = 'Edit Media Carousel';
		$data['user']  = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();
		$data['media'] = $this->CarouselModel->GetById($id);

		if (!$data['media']) {
			$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Data media tidak ditemukan!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			redirect('CarouselController/Index');
			return;
		}

		$this->form_validation->set_rules('judul', 'Judul / Label Media', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('Carousel/EditCarouselView', $data);
			$this->load->view('templates/footer');
		} else {
			$update_data = [
				'judul' => htmlspecialchars($this->input->post('judul', TRUE)),
			];

			// Ganti file media baru jika ada
			if (!empty($_FILES['file_media']['name'])) {
				$max_bytes = 100 * 1024 * 1024;
				if ($_FILES['file_media']['size'] > $max_bytes) {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						Ukuran file melebihi batas maksimal 100 MB!
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>');
					redirect('CarouselController/Edit/' . $id);
					return;
				}

				$upload_res = $this->_do_upload('file_media');
				if ($upload_res['status']) {
					$old_file = './uploads/carousel/' . $data['media']['file_media'];
					if (file_exists($old_file) && is_file($old_file)) {
						@unlink($old_file);
					}

					$new_file_name = $upload_res['file_name'];
					$file_ext = strtolower(pathinfo($new_file_name, PATHINFO_EXTENSION));
					$video_exts = ['mp4', 'webm', 'mov', 'avi', 'mkv'];
					$tipe = in_array($file_ext, $video_exts) ? 'video' : 'image';

					// Auto converter ke WebP jika gambar
					if ($tipe === 'image') {
						$new_file_name = $this->_convert_to_webp('./uploads/carousel/' . $new_file_name);
					}

					$update_data['file_media'] = $new_file_name;
					$update_data['tipe']       = $tipe;
				} else {
					$this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
						$upload_res['error'] .
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>');
					redirect('CarouselController/Edit/' . $id);
					return;
				}
			}

			$this->CarouselModel->Update($id, $update_data);
			$this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				Data media berhasil diperbarui!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');

			redirect('CarouselController/Index');
		}
	}

	public function Hapus($id)
	{
		$media = $this->CarouselModel->GetById($id);
		if ($media) {
			$file_path = './uploads/carousel/' . $media['file_media'];
			if (file_exists($file_path) && is_file($file_path)) {
				@unlink($file_path);
			}

			$this->CarouselModel->Delete($id);
			$this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
				Media berhasil dihapus!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
		}

		redirect('CarouselController/Index');
	}

	private function _do_upload($field_name)
	{
		$config['upload_path']   = './uploads/carousel/';
		$config['allowed_types'] = 'jpg|jpeg|png|webp|gif|mp4|webm|mov|avi|mkv';
		$config['max_size']      = '102400'; // 100 MB dalam KB
		$config['encrypt_name']  = TRUE;
		$config['remove_spaces'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($field_name)) {
			return [
				'status' => FALSE,
				'error'  => $this->upload->display_errors('', '')
			];
		} else {
			$upload_data = $this->upload->data();
			return [
				'status'    => TRUE,
				'file_name' => $upload_data['file_name'],
				'file_size' => $upload_data['file_size']
			];
		}
	}

	/**
	 * Otomatis konversi file gambar ke format WebP
	 * Mendukung JPG, JPEG, PNG, dan GIF
	 */
	private function _convert_to_webp($source_path)
	{
		if (!file_exists($source_path) || !is_file($source_path)) {
			return basename($source_path);
		}

		$dir = dirname($source_path);
		$filename_without_ext = pathinfo($source_path, PATHINFO_FILENAME);
		$webp_filename = $filename_without_ext . '.webp';
		$webp_path = $dir . '/' . $webp_filename;

		$ext = strtolower(pathinfo($source_path, PATHINFO_EXTENSION));
		if ($ext === 'webp') {
			return basename($source_path);
		}

		$image = null;
		switch ($ext) {
			case 'jpeg':
			case 'jpg':
				if (function_exists('imagecreatefromjpeg')) {
					$image = @imagecreatefromjpeg($source_path);
				}
				break;
			case 'png':
				if (function_exists('imagecreatefrompng')) {
					$image = @imagecreatefrompng($source_path);
					if ($image) {
						imagepalettetotruecolor($image);
						imagealphablending($image, true);
						imagesavealpha($image, true);
					}
				}
				break;
			case 'gif':
				if (function_exists('imagecreatefromgif')) {
					$image = @imagecreatefromgif($source_path);
				}
				break;
		}

		if ($image && function_exists('imagewebp')) {
			$success = @imagewebp($image, $webp_path, 85);
			imagedestroy($image);
			if ($success && file_exists($webp_path)) {
				// Hapus file asli yang non-webp
				if ($source_path !== $webp_path) {
					@unlink($source_path);
				}
				return $webp_filename;
			}
		}

		return basename($source_path);
	}
}
