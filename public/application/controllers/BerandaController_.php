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
		$data['ShowDataKegiatan'] = $this->UploadModel->ShowDataKegiatan()->result_array();
		$data['ShowDataBerita'] = $this->UploadModel->ShowDataBerita()->result_array();
		$data['ShowDataBerita2'] = $this->UploadModel->ShowDataBerita2()->result_array();
		$data['ShowDataBerita3'] = $this->UploadModel->ShowDataBerita3()->result_array();
		$data['ShowDataBerita4'] = $this->UploadModel->ShowDataBerita4()->result_array();
		$data['ShowDataBerita5'] = $this->UploadModel->ShowDataBerita5()->result_array();
		$data['ShowDataBerita6'] = $this->UploadModel->ShowDataBerita6()->result_array();
		$data['ShowDataBerita7'] = $this->UploadModel->ShowDataBerita7()->result_array();
		$data['ShowDataBerita8'] = $this->UploadModel->ShowDataBerita8()->result_array();
		$data['ShowDataBerita9'] = $this->UploadModel->ShowDataBerita9()->result_array();
		$data['ShowDataBerita10'] = $this->UploadModel->ShowDataBerita10()->result_array();
		$data['ShowDataInformasi'] = $this->UploadModel->ShowDataInformasi()->result_array();
		$data['ShowDataAlur'] = $this->UploadModel->ShowDataAlur()->result_array();
		$data['ShowDataVisi'] = $this->UploadModel->ShowDataVisi()->result_array();
		$data['ShowDataMisi'] = $this->UploadModel->ShowDataMisi()->result_array();
		$this->load->view('Beranda/Index', $data);
	}

	public function TentangKami()
	{
		$this->load->helper('download');
		$data['ShowData'] = $this->UploadModel->ShowData()->result_array();
		$data['ShowDataTim'] = $this->TentangKamiModel->ShowDataTim()->result_array();
		$data['ShowDataStruktur'] = $this->TentangKamiModel->ShowDataStruktur()->result_array();
		$data['ShowDataProdukHukum'] = $this->TentangKamiModel->ShowDataProdukHukum()->result_array();

		$this->load->view('Beranda/TentangKamiView', $data);
	}

	// public function ShowData()
	// {
	// 	$data['dt_tampil_tanda_terima_penetapan'] = $this->m_penetapan->dt_tampil_tanda_terima_penetapan();
	// 	$this->load->view('Beranda/index');
	// }
}
