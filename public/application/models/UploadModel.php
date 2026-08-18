<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UploadModel extends CI_Model
{
        public function ShowData()
        {
                $this->db->select('*');
                $this->db->from('header');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataGaleri()
        {
                $this->db->select('*');
                $this->db->from('galeri');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDatakegiatan()
        {
                $this->db->select('*');
                $this->db->from('kegiatan');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function getBerita()
        {
                $this->db->order_by('id', 'desc');
                $this->db->limit(10);
                $query = $this->db->get('berita');
                return $query;
        }
        public function getKegiatan()
        {
                // $this->db->order_by('id', 'desc');
                // $this->db->limit(10);
                $query = $this->db->get('kegiatan');
                return $query;
        }

        public function ShowDataBerita()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'desc');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataBerita2()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'desc');
                $this->db->limit('1', '1');
                return $this->db->get();
        }

        public function ShowDataBerita3()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'desc');
                $this->db->limit('1', '2');
                return $this->db->get();
        }

        public function ShowDataBerita4()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'desc');
                $this->db->limit('1', '3');
                return $this->db->get();
        }

        public function ShowDataBerita5()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '4');
                return $this->db->get();
        }

        public function ShowDataBerita6()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '5');
                return $this->db->get();
        }

        public function ShowDataBerita7()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '6');
                return $this->db->get();
        }

        public function ShowDataBerita8()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '7');
                return $this->db->get();
        }

        public function ShowDataBerita9()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '8');
                return $this->db->get();
        }

        public function ShowDataBerita10()
        {
                $this->db->select('*');
                $this->db->from('berita');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1', '9');
                return $this->db->get();
        }

        public function ShowDataInformasi()
        {
                $this->db->select('*');
                $this->db->from('seputar_informasi');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataAlur()
        {
                $this->db->select('*');
                $this->db->from('seputar_alur');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataVisi()
        {
                $this->db->select('*');
                $this->db->from('seputar_visi');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function ShowDataMisi()
        {
                $this->db->select('*');
                $this->db->from('seputar_misi');
                $this->db->order_by('id', 'DESC');
                $this->db->limit('1');
                return $this->db->get();
        }

        public function getDataPPID()
        {
                $this->db->select('*');
                $this->db->from('seputar_ppid');
                $this->db->order_by('id', 'ASC');
                return $this->db->get();
        }

        public function getFormulir()
        {
                $this->db->select('*');
                $this->db->from('formulir');
                $this->db->order_by('id', 'DESC');
                return $this->db->get();
        }
}
