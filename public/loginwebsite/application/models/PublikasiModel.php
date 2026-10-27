<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PublikasiModel extends CI_Model
{
    // ==========================================
    // KATEGORI PUBLIKASI
    // ==========================================
    public function getKategori()
    {
        return $this->db->order_by('urutan', 'ASC')
            ->order_by('id', 'ASC')
            ->get('publikasi_kategori')
            ->result_array();
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('publikasi_kategori', ['id' => $id])->row_array();
    }

    public function insertKategori($data)
    {
        return $this->db->insert('publikasi_kategori', $data);
    }

    public function updateKategori($id, $data)
    {
        return $this->db->update('publikasi_kategori', $data, ['id' => $id]);
    }

    public function deleteKategori($id)
    {
        return $this->db->delete('publikasi_kategori', ['id' => $id]);
    }

    // ==========================================
    // ITEM PUBLIKASI (DOKUMEN PDF)
    // ==========================================
    public function getItems($kategori_id = null)
    {
        $this->db->select('publikasi_item.*, publikasi_kategori.nama_kategori');
        $this->db->from('publikasi_item');
        $this->db->join('publikasi_kategori', 'publikasi_kategori.id = publikasi_item.kategori_id', 'left');

        if (!empty($kategori_id)) {
            $this->db->where('publikasi_item.kategori_id', $kategori_id);
        }

        $this->db->order_by('publikasi_kategori.urutan', 'ASC');
        $this->db->order_by('publikasi_item.urutan', 'ASC');
        $this->db->order_by('publikasi_item.id', 'ASC');

        return $this->db->get()->result_array();
    }

    public function getItemById($id)
    {
        $this->db->select('publikasi_item.*, publikasi_kategori.nama_kategori');
        $this->db->from('publikasi_item');
        $this->db->join('publikasi_kategori', 'publikasi_kategori.id = publikasi_item.kategori_id', 'left');
        $this->db->where('publikasi_item.id', $id);
        return $this->db->get()->row_array();
    }

    public function insertItem($data)
    {
        return $this->db->insert('publikasi_item', $data);
    }

    public function updateItem($id, $data)
    {
        return $this->db->update('publikasi_item', $data, ['id' => $id]);
    }

    public function deleteItem($id)
    {
        return $this->db->delete('publikasi_item', ['id' => $id]);
    }

    // Hitung total item per kategori
    public function countItemsByKategori($kategori_id)
    {
        return $this->db->where('kategori_id', $kategori_id)->count_all_results('publikasi_item');
    }
}
