<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HeaderModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function UploadHeader($data)
	{
		return $this->db->insert('header', $data);;
	}

	public function DataTampil()
	{
	 	$query = "SELECT *from header";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */