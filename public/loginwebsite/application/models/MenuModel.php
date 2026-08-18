<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MenuModel extends CI_Model
{
	public function getSubMenu()
	{
		$query = "select `user_sub_menu`.*, `user_menu`.`menu`
                from `user_sub_menu` join `user_menu`
                on `user_sub_menu`. `menu_id`=`user_menu`.`id`
                ";
		return $this->db->query($query)->result_array();
	}

	public function DataTampilUser()
	{
		$query = "SELECT *from user";
		return $this->db->query($query)->result_array();
	}

	public function HapusUser($id)
	{
		$query = "SELECT *from user";
		return $this->db->query($query)->result_array();
	}

	public function EditUser($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		return TRUE;
	}

	// public function inject()
	// {
	// 	$query = "INSERT INTO `user_menu` (`menu`)
	// 	VALUES ('FormulirController')";

	// 	return $this->db->query($query);
	// }

	// public function getMenu()
	// {
	// 	$query = "SELECT * from user_access_menu";
	// 	return $this->db->query($query)->result_array();
	// }
}
