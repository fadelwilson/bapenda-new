<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHukumModel extends CI_Model {

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';
	
	public function ProdukHukum($data)
	{
		return $this->db->insert('produk_hukum', $data);
	}

	public function DataTampilProdukHukum()
	{
	 	$query = "SELECT *from produk_hukum";
        return $this->db->query($query)->result_array();
	}

}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */