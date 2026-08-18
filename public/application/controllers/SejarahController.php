<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SejarahController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UploadModel');
    }

    // public function index()
    // {
    //     $data['ShowData'] = $this->UploadModel->ShowData()->result_array();
    //     $data['ShowDataKegiatan'] = $this->UploadModel->ShowDataKegiatan()->result_array();
    //     $data['vid'] = $this->db->order_by('id_sejarah', 'desc')
    //         ->get('sejarah')->result_array();

    //     $this->load->view('new_fe/media', $data);
    // }
    public function index()
    {
        $data['ShowData'] = $this->UploadModel->ShowData()->result_array();
        $data['ShowDataKegiatan'] = $this->UploadModel->getKegiatan()->result_array();
        $data['vid'] = $this->db->order_by('id_sejarah', 'desc')
            ->get('sejarah')->result_array();

        // echo '<pre>';
        // print_r($this->UploadModel->getKegiatan()->result_array());
        // echo '</pre>';
        // exit;

        $this->load->view('new_fe/media', $data);
    }
}
