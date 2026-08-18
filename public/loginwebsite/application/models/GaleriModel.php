<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function UploadGaleri($data)
	{
		return $this->db->insert('galeri', $data);;
	}

	public function DataTampil()
	{
	 	$query = "SELECT *from galeri";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */