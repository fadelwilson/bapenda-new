<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SejarahController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('UploadModel');
        
    }

    public function index()
    {
        $data['ShowData'] = $this->UploadModel->ShowData()->result_array();
        $data['vid'] = $this->db->order_by('id_sejarah','desc')
                                ->get('sejarah')->result_array();
        $this->load->view('fe/view_sejarah',$data);
    }

}