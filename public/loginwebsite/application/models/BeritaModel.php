<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  BeritaModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function UploadBerita($data)
	{
		return $this->db->insert('berita', $data);;
	}

	public function DataTampil()
	{
	 	$query = "SELECT *from berita";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */