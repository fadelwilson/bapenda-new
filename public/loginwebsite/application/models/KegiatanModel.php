<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function UploadKegiatan($data)
	{
		return $this->db->insert('kegiatan', $data);;
	}

	public function DataTampil()
	{
	 	$query = "SELECT *from kegiatan";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */