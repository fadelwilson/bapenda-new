<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerandaController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('UploadModel');
		$this->load->model('TentangKamiModel');
	}

	public function Index()
	{
		$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataGaleri'] = $this->UploadModel->ShowDataGaleri()->result_array();
		$data['ShowDataKegiatan'] = $this->UploadModel->getKegiatan()->result_array();
		$data['ShowDataInformasi'] = $this->UploadModel->ShowDataInformasi()->result_array();
		$data['ShowDataAlur'] = $this->UploadModel->ShowDataAlur()->result_array();
		$data['ShowDataVisi'] = $this->UploadModel->ShowDataVisi()->result_array();
		$data['ShowDataMisi'] = $this->UploadModel->ShowDataMisi()->result_array();
		$data['formulir'] = $this->UploadModel->getFormulir()->result_array();

		$this->load->view('new_fe/index', $data);
	}

	/**
	 * Halaman Beranda – tampilan hero full-screen sesuai desain Figma
	 * URL: /beranda
	 */
	public function Beranda()
	{
		$data['active_menu']    = 'beranda';
		$data['hero_headline']  = 'Pengelolaan Pendapatan yang Transparan';
		$data['hero_desc']      = 'Dinas Pendapatan Daerah Kabupaten Purwakarta hadir untuk mewujudkan '
			. 'tata kelola pendapatan asli daerah yang akuntabel, terbuka, dan berbasis teknologi '
			. 'demi pembangunan daerah yang berkeadilan.';

		$this->load->view('new_fe/beranda', $data);
	}

	public function layanan()
	{
		$data['active_menu'] = 'layanan';
		$this->load->view('new_fe/service', $data);
	}

	public function getProdukHukum()
	{
		$page = (int) $this->input->get('page');
		$limit = 5;
		$offset = ($page - 1) * $limit;

		$data['produk'] = $this->TentangKamiModel->ShowDataProdukHukum($limit, $offset);
		$data['count'] = $this->TentangKamiModel->CountProdukHukum();
		$data['limit'] = $limit;

		$this->load->view('new_fe/produk_hukum_list', $data);
	}

	public function TentangKami()
	{
		$this->load->helper('download');
		$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataTim'] = $this->TentangKamiModel->ShowDataTim()->result_array();
		$data['ShowDataStruktur'] = $this->TentangKamiModel->ShowDataStruktur()->result_array();
		$data['ShowDataProdukHukum'] = $this->TentangKamiModel->ShowDataProdukHukum();
		$data['ShowDataInformasi'] = $this->UploadModel->ShowDataInformasi()->result_array();
		$data['ShowDataAlur'] = $this->UploadModel->ShowDataAlur()->result_array();
		$data['ShowDataVisi'] = $this->UploadModel->ShowDataVisi()->result_array();
		$data['ShowDataMisi'] = $this->UploadModel->ShowDataMisi()->result_array();

		$this->load->view('new_fe/about', $data);
	}

	// public function blog()
	// {
	// 	$this->load->helper('download');
	// 	$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
	// 	$data['ShowDataBerita'] = $this->UploadModel->ShowDataBerita()->result_array();
	// 	$data['ShowDataBerita2'] = $this->UploadModel->ShowDataBerita2()->result_array();
	// 	$data['ShowDataBerita3'] = $this->UploadModel->ShowDataBerita3()->result_array();
	// 	$data['ShowDataBerita4'] = $this->UploadModel->ShowDataBerita4()->result_array();
	// 	$data['ShowDataBerita5'] = $this->UploadModel->ShowDataBerita5()->result_array();
	// 	$data['ShowDataBerita6'] = $this->UploadModel->ShowDataBerita6()->result_array();
	// 	$data['ShowDataBerita7'] = $this->UploadModel->ShowDataBerita7()->result_array();
	// 	$data['ShowDataBerita8'] = $this->UploadModel->ShowDataBerita8()->result_array();
	// 	$data['ShowDataBerita9'] = $this->UploadModel->ShowDataBerita9()->result_array();
	// 	$data['ShowDataBerita10'] = $this->UploadModel->ShowDataBerita10()->result_array();

	// 	$this->load->view('new_fe/Blog', $data);
	// }

	public function informasi()
	{
		$data['ShowData']      = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataBerita'] = $this->UploadModel->getBerita()->result_array();
		$data['ShowDataPPID']   = $this->UploadModel->getDataPPID()->result_array();
		$this->load->view('new_fe/informasi', $data);
	}

	public function blog()
	{
		$this->load->helper('download');
		$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataBerita'] = $this->UploadModel->getBerita()->result_array();

		$this->load->view('new_fe/blog', $data);
	}

	public function ppid()
	{
		$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataPPID'] = $this->UploadModel->getDataPPID()->result_array();

		$this->load->view('new_fe/ppid', $data);
	}

	// public function ShowData()
	// {
	// 	$data['dt_tampil_tanda_terima_penetapan'] = $this->m_penetapan->dt_tampil_tanda_terima_penetapan();
	// 	$this->load->view('Beranda/index');
	// }
}
