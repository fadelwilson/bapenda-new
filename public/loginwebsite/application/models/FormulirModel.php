<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FormulirModel extends CI_Model
{

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';

	public function Formulir($data)
	{
		return $this->db->insert('formulir', $data);
	}

	public function TampilFormulir()
	{
		$query = "SELECT * from formulir";
		return $this->db->query($query)->result_array();
	}
}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */
