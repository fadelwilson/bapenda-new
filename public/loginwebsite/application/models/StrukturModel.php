<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function Struktur($data)
	{
		return $this->db->insert('struktur', $data);
	}

	public function DataTampilStruktur()
	{
	 	$query = "SELECT *from struktur";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */