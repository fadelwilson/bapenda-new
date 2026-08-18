<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

require_once('vendor/autoload.php');

class SaranController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('SaranModel');
	}

	public function index()
	{

		$data['title'] = 'Kritik & Saran';
		$data['user'] = $this->db->get_where('user', ['username' =>
		$this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('Saran/view_saran', $data);
		$this->load->view('templates/footer');
	}

	function datatables()
	{
		$show = $this->SaranModel->get_datatables();

		$data = array();
		$no = $_POST['start'] + 1;

		foreach ($show as $field) {

			$row = array();
			$row[] = $no++;
			$row[] = $field->nama_lengkap;
			if ($field->no_hp != '') {
				$no_hp = $field->no_hp;
			} else {
				$no_hp = "-";
			}
			if ($field->email != '') {
				$email = $field->email;
			} else {
				$email = "-";
			}
			if ($field->alamat != '') {
				$alamat = $field->alamat;
			} else {
				$alamat = "-";
			}
			$row[] = "<span class='badge badge-success'>" . $no_hp . "</span>";
			$row[] = "<span class='badge badge-success'>" . $email . "</span>";
			$row[] = $alamat;
			$row[] = $field->kritik;
			$row[] = $field->saran;
			$row[] = date("d-m-Y H:i:s", strtotime($field->created_at));

			$row[] = '<a href="javascript:void(0)" class="btn btn-danger btn-sm" id="btn_delete" title="Hapus" onclick="ajax_delete(' . "'" . $field->id_saran . "'" . ')">
                        Hapus
                    </a>';

			$data[] = $row;
		}


		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->SaranModel->count_all(),
			"recordsFiltered" => $this->SaranModel->count_filtered(),
			"data" => $data,
		);

		//output to json format
		echo json_encode($output);
	}

	function destroy($id)
	{
		$data = $this->SaranModel->get_by_id($id);

		if (!empty($data)) {

			$del = $this->SaranModel->delete_by_id($id);

			if ($del) {
				$code = 200;
				$status = "Success";
				$message = "Data berhasil dihapus";
				$record_data =  $data;
			} else {

				$code = 422;
				$status = "Error";
				$message = "Data gagal dihapus";
				$record_data =  $data;
			}
		} else {

			$code = 422;
			$status = "Error";
			$message = "Data tidak ditemukan";
			$record_data =  NULL;
		}

		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

		echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);
	}

	function edit($id)
	{
		$data = $this->SaranModel->get_by_id($id);

		if (!empty($data)) {

			$code = 200;
			$status = "Success";
			$message = "Kritik & Saran ditemukan";
			$record_data =  $data;
		} else {

			$code = 422;
			$status = "Error";
			$message = "Kritik & Saran tidak ditemukan";
			$record_data =  NULL;
		}

		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

		echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);
	}

	public function export_data()
	{
		// Fetch the data from your model
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');
		$data = $this->SaranModel->download_excel($from_date, $to_date); // Define a function in your model to fetch data

		// Create a new PhpSpreadsheet object
		$spreadsheet = new Spreadsheet();

		// Set document properties
		$spreadsheet->getProperties()->setCreator('Bapenda Admin Website')
			->setLastModifiedBy('Bapenda Admin Website')
			->setTitle('Exported Data')
			->setSubject('Exported Data')
			->setDescription('Data exported from bapenda.purwakartakab.go.id');

		// Create a new worksheet
		$worksheet = $spreadsheet->getActiveSheet();
		$worksheet->setTitle('Rekapitulasi Data');

		// Define column headers
		$worksheet->setCellValue('A3', 'No');
		$worksheet->setCellValue('B3', 'Nama Lengkap');
		$worksheet->setCellValue('C3', 'No HP');
		$worksheet->setCellValue('D3', 'Email');
		$worksheet->setCellValue('E3', 'Alamat');
		$worksheet->setCellValue('F3', 'Kritik');
		$worksheet->setCellValue('G3', 'Saran');
		$worksheet->setCellValue('H3', 'Tanggal Dibuat');

		// Set header row bold
		$boldStyle = ['font' => ['bold' => true]];
		$worksheet->getStyle('A3:H3')->applyFromArray($boldStyle);

		$worksheet->setCellValue('A1', 'Rekapitulasi Kritik dan Saran ' . $from_date . ' - ' . $to_date);
		$worksheet->mergeCells('A1:H1');
		$titleStyle = ['font' => ['size' => 20, 'bold' => true], 'alignment' => ['horizontal' => 'center']];
		$worksheet->getStyle('A1')->applyFromArray($titleStyle);

		// Add data to the spreadsheet
		$row = 4;
		$no = 1;
		foreach ($data as $item) {
			$worksheet->setCellValue('A' . $row, $no);
			$worksheet->setCellValue('B' . $row, $item['nama_lengkap']);
			$worksheet->setCellValue('C' . $row, $item['no_hp']);
			$worksheet->setCellValue('D' . $row, $item['email']);
			$worksheet->setCellValue('E' . $row, $item['alamat']);
			$worksheet->setCellValue('F' . $row, $item['kritik']);
			$worksheet->setCellValue('G' . $row, $item['saran']);
			$worksheet->setCellValue('H' . $row, $item['created_at']);
			$row++;
			$no++;
		}

		// Set column width
		$worksheet->getColumnDimension('A')->setWidth(10);
		$worksheet->getColumnDimension('B')->setWidth(20);
		$worksheet->getColumnDimension('C')->setWidth(15);
		$worksheet->getColumnDimension('D')->setWidth(20);
		$worksheet->getColumnDimension('E')->setWidth(30);
		$worksheet->getColumnDimension('F')->setWidth(30);
		$worksheet->getColumnDimension('G')->setWidth(30);
		$worksheet->getColumnDimension('H')->setWidth(20);

		// Create a writer and save the Excel file
		$filename = 'rekapitulasi_kritik_saran_' . date('YmdHis') . '.xlsx';
		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
}
