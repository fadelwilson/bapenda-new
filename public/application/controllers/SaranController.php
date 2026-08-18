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
        $data['ShowData'] = $this->UploadModel->ShowData()->result_array();
        $this->load->view('fe/view_saran',$data);
    }

    function store()
    {
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'no_hp' => $this->input->post('no_hp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'kritik' => $this->input->post('kritik'),
            'saran' => $this->input->post('saran'),
            'created_at' => date('Y-m-d H:i:s')
        );

        $ins = $this->db->insert('saran',$data);
        
        if ($ins) {
            $code = 200;
            $status = "success";
            $message = "Kritik dan saran berhasil dikirim, terimakasih";
            $record_data = $data;
        }else{
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