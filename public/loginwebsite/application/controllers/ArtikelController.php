<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtikelController extends CI_Controller 
{
    private $upload_error = '';

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('ArtikelModel');
    }

    public function Index()
    {
        $data['title'] = 'Upload Artikel';
        $data['user'] = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $data['DataTampil'] = $this->ArtikelModel->DataTampil();

        $this->form_validation->set_rules('title', 'Judul Artikel', 'required');
        $this->form_validation->set_rules('content', 'Konten Artikel', 'required');
        $this->form_validation->set_rules('url', 'URL Artikel', 'trim');
        $this->form_validation->set_rules('gambar', 'Thumbnail Gambar', 'trim');

        if ($this->form_validation->run() == FALSE) :
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Artikel/ArtikelView', $data);
            $this->load->view('templates/footer');
        else :
            $uploadThumbnail = NULL;
            if (!empty($_FILES['gambar']['name'])) {
                $uploadThumbnail = $this->UploadThumbnail('gambar');
                if ($uploadThumbnail === FALSE) {
                    $errorMsg = !empty($this->upload_error) ? $this->upload_error : 'Format file tidak didukung atau ukuran melebihi batas.';
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                        Upload thumbnail gagal: ' . $errorMsg . '
                    </div>');
                    redirect('ArtikelController/Index');
                    return;
                }
            }

            $dataInsert = [
                'title'      => htmlspecialchars($this->input->post('title', true)),
                'gambar'     => $uploadThumbnail ? $uploadThumbnail : NULL,
                'content'    => htmlspecialchars($this->input->post('content', true)),
                'url'        => htmlspecialchars($this->input->post('url', true)),
                'created_at' => date('Y-m-d H:i:s'),
            ];

            $resp = $this->ArtikelModel->UploadArtikel($dataInsert);
            if ($resp) :
                $this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                    Artikel berhasil disimpan!
                </div>');
            else :
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    Artikel gagal disimpan!
                </div>');
            endif;
            redirect('ArtikelController/Index');
        endif;
    }

    private function UploadThumbnail($fieldName)
    {
        $target_dir = FCPATH . 'uploads/artikel/';
        if (!is_dir($target_dir)) {
            @mkdir($target_dir, 0777, true);
        }

        $config['upload_path']   = './uploads/artikel';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['max_size']      = '5120'; // 5MB
        $config['remove_spaces'] = TRUE;
        $config['detect_mime']   = TRUE;
        $config['mod_mime_fix']  = TRUE;
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($fieldName)) {
            $this->upload_error = $this->upload->display_errors('', '');
            return FALSE;
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function Hapus($id)
    {
        $cek_data = $this->db->get_where('artikel', ['id' => htmlspecialchars($id)])->row_array();

        if (!empty($cek_data) && $cek_data['id'] == $id) {
            $resp = $this->db->delete('artikel', ['id' => $id]);

            if (!empty($cek_data['gambar'])) {
                $path = './uploads/artikel/' . $cek_data['gambar'];
                if (file_exists($path)) {
                    @unlink($path);
                }
            }

            if ($resp) {
                $this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                    Artikel berhasil dihapus!
                </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    Artikel gagal dihapus!
                </div>');
            }
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Data artikel tidak ditemukan!
            </div>');
        }

        redirect('ArtikelController/Index');
    }

    public function EditFotoArtikel($id)
    {
        $cek_data = $this->db->get_where('artikel', ['id' => htmlspecialchars($id)])->row_array();

        if (empty($cek_data) || $cek_data['id'] != $id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Data artikel tidak ditemukan!
            </div>');
            redirect('ArtikelController/Index');
            return;
        }

        $data['EditData'] = $cek_data;
        $data['title']    = 'Edit Thumbnail Artikel';
        $data['user']     = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $this->form_validation->set_rules('gambar', 'Thumbnail Gambar', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Artikel/EditFotoArtikelView', $data);
            $this->load->view('templates/footer');
        } else {
            $uploadThumbnail = $this->UploadThumbnail('gambar');

            if ($uploadThumbnail == FALSE) {
                $errorMsg = !empty($this->upload_error) ? $this->upload_error : 'Pastikan memilih file gambar (jpg, png, webp) yang valid.';
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    Upload gambar thumbnail gagal! ' . $errorMsg . '
                </div>');
                redirect('ArtikelController/Index');
            } else {
                if (!empty($cek_data['gambar'])) {
                    $path = './uploads/artikel/' . $cek_data['gambar'];
                    if (file_exists($path)) {
                        @unlink($path);
                    }
                }

                $dataUpdate = [
                    'gambar' => $uploadThumbnail,
                ];

                $resp = $this->db->update('artikel', $dataUpdate, ['id' => $id]);

                if ($resp) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                        Thumbnail artikel berhasil diperbarui!
                    </div>');
                } else {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                        Thumbnail artikel gagal diperbarui!
                    </div>');
                }

                redirect('ArtikelController/Index');
            }
        }
    }

    public function Edit($id)
    {
        $cek_data = $this->db->get_where('artikel', ['id' => htmlspecialchars($id)])->row_array();

        if (empty($cek_data) || $cek_data['id'] != $id) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Data artikel tidak ditemukan!
            </div>');
            redirect('ArtikelController/Index');
            return;
        }

        $data['EditData'] = $cek_data;
        $data['title']    = 'Edit Artikel';
        $data['user']     = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();

        $this->form_validation->set_rules('title', 'Judul Artikel', 'required');
        $this->form_validation->set_rules('content', 'Konten Artikel', 'required');
        $this->form_validation->set_rules('url', 'URL Artikel', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Artikel/EditArtikelView', $data);
            $this->load->view('templates/footer');
        } else {
            $dataUpdate = [
                'title'   => htmlspecialchars($this->input->post('title', true)),
                'content' => htmlspecialchars($this->input->post('content', true)),
                'url'     => htmlspecialchars($this->input->post('url', true)),
            ];

            $resp = $this->db->update('artikel', $dataUpdate, ['id' => $id]);

            if ($resp) {
                $this->session->set_flashdata('msg', '<div class="alert alert-primary" role="alert">
                    Data artikel berhasil diperbarui!
                </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    Data artikel gagal diperbarui!
                </div>');
            }

            redirect('ArtikelController/Index');
        }
    }
}
