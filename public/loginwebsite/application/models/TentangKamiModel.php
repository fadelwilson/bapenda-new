<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangKamiModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function TentangKami($data)
	{
		return $this->db->insert('tentang_kami', $data);
	}

	public function DataTampilTentangKami()
	{
	 	$query = "SELECT *from tentang_kami";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */