<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelModel extends CI_Model {

    public function UploadArtikel($data)
    {
        return $this->db->insert('artikel', $data);
    }

    public function DataTampil()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('artikel')->result_array();
    }

}
