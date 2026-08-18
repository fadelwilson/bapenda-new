<?php
defined('BASEPATH') or exit('No direct script access allowed');

class  SeputarModel extends CI_Model
{

	// private $table = 'masyarakat';
	// private $primary_key = 'nik';

	public function SeputarInformasi($data)
	{
		return $this->db->insert('seputar_informasi', $data);;
	}

	public function DataTampilInformasi()
	{
		$query = "SELECT *from seputar_informasi";
		return $this->db->query($query)->result_array();
	}

	public function UploadSeputarAlur($data)
	{
		return $this->db->insert('seputar_alur', $data);;
	}

	public function DataTampilAlur()
	{
		$query = "SELECT *from seputar_alur";
		return $this->db->query($query)->result_array();
	}

	public function UploadSeputarVisi($data)
	{
		return $this->db->insert('seputar_visi', $data);;
	}

	public function DataTampilVisi()
	{
		$query = "SELECT *from seputar_visi";
		return $this->db->query($query)->result_array();
	}

	public function UploadSeputarMisi($data)
	{
		return $this->db->insert('seputar_misi', $data);;
	}

	public function DataTampilMisi()
	{
		$query = "SELECT *from seputar_misi";
		return $this->db->query($query)->result_array();
	}

	public function UploadSeputarPPID($data)
	{
		return $this->db->insert('seputar_ppid', $data);
	}

	public function DataTampilPPID()
	{
		$query = "SELECT * from seputar_ppid";
		return $this->db->query($query)->result_array();
	}
}

/* End of file Masyarakat_m.php */
/* Location: ./application/models/Masyarakat_m.php */
