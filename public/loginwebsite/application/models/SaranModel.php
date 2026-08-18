<?php
class SaranModel extends CI_Model
{

	var $table = 'saran'; //nama tabel dari database
	var $column_order = array(null, 'id_saran', 'nama_lengkap', 'no_hp', 'email', 'alamat', 'kritik', 'saran', 'created_at');
	var $column_search = array('id_saran', 'nama_lengkap', 'no_hp', 'email', 'alamat', 'kritik', 'saran', 'created_at');
	var $order = array('id_saran' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$this->db->select($this->column_search);
		$this->db->from($this->table);

		$i = 0;

		foreach ($this->column_search as $item) // looping awal
		{
			if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
			{

				if ($i === 0) // looping awal
				{
					$this->db->group_start();
					$this->db->like($item, $_POST['search']['value']);
				} else {
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if (isset($_POST['order'])) {
			$this->db->order_by($this->column_search[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if ($_POST['length'] != -1)
			$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		// echo "<pre>";
		// echo $this->db->last_query();die();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->select($this->column_search);
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function get_by_id($code)
	{
		$this->db->select($this->column_search);
		$this->db->from($this->table);
		$this->db->where('id_saran', $code);
		$query = $this->db->get();

		return $query->row();
	}

	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id_saran', $id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}

	function download_excel($from_date, $to_date)
	{
		$this->db->select('id_saran,nama_lengkap,no_hp,email,alamat,kritik,saran,created_at');
		$this->db->from($this->table);
		$this->db->where('date(created_at) >=', $from_date);
		$this->db->where('date(created_at) <=', $to_date);
		$query = $this->db->get()->result_array();

		return $query;
	}
}
