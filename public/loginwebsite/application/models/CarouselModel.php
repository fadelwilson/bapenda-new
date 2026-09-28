<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CarouselModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->check_table();
	}

	private function check_table()
	{
		$sql = "CREATE TABLE IF NOT EXISTS `carousel` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`judul` varchar(255) NOT NULL,
			`tipe` enum('image','video') NOT NULL DEFAULT 'image',
			`file_media` varchar(255) NOT NULL,
			`created_at` datetime DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		@$this->db->query($sql);
	}

	public function DataTampil()
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('carousel')->result_array();
	}

	public function GetById($id)
	{
		return $this->db->get_where('carousel', ['id' => $id])->row_array();
	}

	public function Insert($data)
	{
		return $this->db->insert('carousel', $data);
	}

	public function Update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('carousel', $data);
	}

	public function Delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('carousel');
	}
}
