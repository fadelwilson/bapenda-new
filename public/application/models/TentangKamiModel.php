<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TentangKamiModel extends CI_Model
{
        public function ShowData()
        {
                $this->db->select('*');
                $this->db->from('header');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataTim()
        {
                $this->db->select('*');
                $this->db->from('tentang_kami');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataStruktur()
        {
                $this->db->select('*');
                $this->db->from('struktur');
                $this->db->limit('1');
                return $this->db->get();
        }

        // public function ShowDataProdukHukum()
        // {
        //         $this->db->select('*');
        //         $this->db->from('produk_hukum');
        //         // $this->db->limit('1');
        //         return $this->db->get();
        // }

        public function ShowDataProdukHukum($limit = null, $offset = null)
        {
                if ($limit !== null && $offset !== null) {
                        $query = $this->db->get('produk_hukum', $limit, $offset);
                        $result = $query->result_array();

                        $produk_hukum = [];
                        foreach ($result as $idx => $ph) {
                                $produk_hukum[] = [
                                        'nomor' => $offset + $idx + 1,
                                        'ket' => $ph['ket'],
                                        'file_uu' => $ph['file_uu']
                                ];
                        }
                        return $produk_hukum;
                } else {
                        return $this->db->get('produk_hukum')->result_array();
                }
        }

        public function CountProdukHukum()
        {
                return $this->db->count_all('produk_hukum');
        }
}
