<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SaranController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('UploadModel');
        
    }

    public function index()
    {
        $data['active_menu'] = 'saran';
        $this->load->view('new_fe/saran', $data);
    }

    function store()
    {
        $honeypot = $this->input->post('website_url');
        if (!empty($honeypot)) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 200,
                    'status' => 'success',
                    'message' => 'Kritik dan saran berhasil dikirim, terimakasih'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (session_status() === PHP_SESSION_NONE) {
            @session_start();
        }
        if (isset($_SESSION['last_saran_time']) && (time() - $_SESSION['last_saran_time']) < 10) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 429,
                    'status' => 'error',
                    'message' => 'Mohon tunggu beberapa detik sebelum mengirim pesan kembali.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        $nama_lengkap = trim(strip_tags($this->input->post('nama_lengkap', TRUE)));
        $email        = trim(strip_tags($this->input->post('email', TRUE)));
        $no_hp        = trim(strip_tags($this->input->post('no_hp', TRUE)));
        $alamat       = trim(strip_tags($this->input->post('alamat', TRUE)));
        $kritik       = trim(strip_tags($this->input->post('kritik', TRUE)));
        $saran        = trim(strip_tags($this->input->post('saran', TRUE)));
        
        if (empty($saran)) {
            $saran = $kritik;
        }

        $combined_input = $nama_lengkap . ' ' . $email . ' ' . $no_hp . ' ' . $alamat . ' ' . $kritik . ' ' . $saran;
        $suspicious_pattern = '/(union\s+select|pg_sleep|dbms_pipe|sleep\s*\(|benchmark\s*\(|load_file|information_schema|<script|<iframe)/i';
        if (preg_match($suspicious_pattern, $combined_input)) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Input mengandung karakter atau pola yang tidak diizinkan.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (empty($nama_lengkap) || empty($email) || empty($kritik) || empty($saran)) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Harap lengkapi semua bidang yang bertanda bintang (*).'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Format email tidak valid.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (mb_strlen($nama_lengkap) < 3 || mb_strlen($nama_lengkap) > 100) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Nama lengkap harus antara 3 hingga 100 karakter.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (mb_strlen($kritik) < 3 || mb_strlen($kritik) > 3000) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Kritik harus antara 3 hingga 3000 karakter.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (mb_strlen($saran) < 3 || mb_strlen($saran) > 3000) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Saran harus antara 3 hingga 3000 karakter.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        if (!empty($no_hp) && !preg_match('/^[0-9+\-\s()]{7,20}$/', $no_hp)) {
            echo json_encode(array(
                'meta' => array(
                    'code' => 422,
                    'status' => 'error',
                    'message' => 'Format nomor telepon tidak valid.'
                ),
                'data' => array()
            ), JSON_PRETTY_PRINT);
            return;
        }

        $data = array(
            'nama_lengkap' => $nama_lengkap,
            'no_hp'        => $no_hp,
            'email'        => $email,
            'alamat'       => $alamat,
            'kritik'       => $kritik,
            'saran'        => $saran,
            'created_at'   => date('Y-m-d H:i:s')
        );

        $ins = $this->db->insert('saran', $data);
        
        if ($ins) {
            $_SESSION['last_saran_time'] = time();
            $code = 200;
            $status = "success";
            $message = "Kritik dan saran berhasil dikirim, terimakasih";
            $record_data = $data;
        } else {
            $code = 422;
			$status = "error";
			$message = "Kritik dan saran gagal dikirim, silahkan coba lagi";
			$record_data = $data;
        }

        $meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

		echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);
    }
}