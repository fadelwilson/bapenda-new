<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PublikasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('PublikasiModel');
    }

    // ==========================================
    // INDEX: DAFTAR PUBLIKASI & FORM TAMBAH
    // ==========================================
    public function Index()
    {
        $selected_kategori = $this->input->get('kategori', TRUE);

        $data['title']             = 'Manajemen Publikasi & Peraturan';
        $data['user']              = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $data['kategori_list']     = $this->PublikasiModel->getKategori();
        $data['selected_kategori'] = $selected_kategori;
        $data['DataTampil']        = $this->PublikasiModel->getItems($selected_kategori);

        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required|numeric');
        $this->form_validation->set_rules('judul', 'Judul Dokumen', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Publikasi/PublikasiView', $data);
            $this->load->view('templates/footer');
        } else {
            if (empty($_FILES['file_pdf']['name'])) {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Silakan pilih file PDF yang ingin diunggah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('PublikasiController/Index' . ($selected_kategori ? '?kategori=' . $selected_kategori : ''));
                return;
            }

            $upload_res = $this->_do_upload('file_pdf');
            if (!$upload_res['status']) {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                    $upload_res['error'] .
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('PublikasiController/Index' . ($selected_kategori ? '?kategori=' . $selected_kategori : ''));
                return;
            }

            $insert_data = [
                'kategori_id' => $this->input->post('kategori_id', TRUE),
                'judul'       => htmlspecialchars($this->input->post('judul', TRUE)),
                'file_pdf'    => $upload_res['file_name'],
                'urutan'      => (int) $this->input->post('urutan', TRUE) ?: 0,
                'created_at'  => date('Y-m-d H:i:s'),
            ];

            $resp = $this->PublikasiModel->insertItem($insert_data);
            if ($resp) {
                $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Dokumen berhasil ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal menyimpan data dokumen!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            }

            redirect('PublikasiController/Index' . ($selected_kategori ? '?kategori=' . $selected_kategori : ''));
        }
    }

    // ==========================================
    // EDIT DOKUMEN
    // ==========================================
    public function Edit($id)
    {
        $data['title']         = 'Edit Dokumen Publikasi & Peraturan';
        $data['user']          = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $data['item']          = $this->PublikasiModel->getItemById($id);
        $data['kategori_list'] = $this->PublikasiModel->getKategori();

        if (!$data['item']) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data dokumen tidak ditemukan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required|numeric');
        $this->form_validation->set_rules('judul', 'Judul Dokumen', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('Publikasi/EditPublikasiView', $data);
            $this->load->view('templates/footer');
        } else {
            $update_data = [
                'kategori_id' => $this->input->post('kategori_id', TRUE),
                'judul'       => htmlspecialchars($this->input->post('judul', TRUE)),
                'urutan'      => (int) $this->input->post('urutan', TRUE) ?: 0,
            ];

            // Cek jika ada file PDF baru yang diunggah
            if (!empty($_FILES['file_pdf']['name'])) {
                $upload_res = $this->_do_upload('file_pdf');
                if (!$upload_res['status']) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">' .
                        $upload_res['error'] .
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>');
                    redirect('PublikasiController/Edit/' . $id);
                    return;
                }

                // Hapus file lama jika tersimpan di folder uploads/publikasi/
                $old_file = $data['item']['file_pdf'];
                if (strpos($old_file, '/') === false) {
                    $old_path = './uploads/publikasi/' . $old_file;
                    if (file_exists($old_path) && is_file($old_path)) {
                        @unlink($old_path);
                    }
                }

                $update_data['file_pdf'] = $upload_res['file_name'];
            }

            $resp = $this->PublikasiModel->updateItem($id, $update_data);
            if ($resp) {
                $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Perubahan data dokumen berhasil disimpan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal memperbarui data dokumen!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>');
            }

            redirect('PublikasiController/Index?kategori=' . $update_data['kategori_id']);
        }
    }

    // ==========================================
    // HAPUS DOKUMEN
    // ==========================================
    public function Hapus($id)
    {
        $item = $this->PublikasiModel->getItemById($id);
        if (!$item) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Data dokumen tidak ditemukan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        // Hapus file fisik jika file ada di folder uploads/publikasi/ (bukan assets/images bawaan)
        if (strpos($item['file_pdf'], '/') === false) {
            $path = './uploads/publikasi/' . $item['file_pdf'];
            if (file_exists($path) && is_file($path)) {
                @unlink($path);
            }
        }

        $resp = $this->PublikasiModel->deleteItem($id);
        if ($resp) {
            $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Dokumen <strong>' . htmlspecialchars($item['judul']) . '</strong> berhasil dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal menghapus dokumen!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        }

        redirect('PublikasiController/Index' . ($item['kategori_id'] ? '?kategori=' . $item['kategori_id'] : ''));
    }

    // ==========================================
    // KELOLA KATEGORI: TAMBAH, EDIT, HAPUS
    // ==========================================
    public function TambahKategori()
    {
        $nama_kategori = trim($this->input->post('nama_kategori', TRUE));
        $urutan        = (int) $this->input->post('urutan', TRUE) ?: 0;

        if (empty($nama_kategori)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nama kategori tidak boleh kosong!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        $data = [
            'nama_kategori' => htmlspecialchars($nama_kategori),
            'urutan'        => $urutan,
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        $resp = $this->PublikasiModel->insertKategori($data);
        if ($resp) {
            $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Kategori baru berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal menambahkan kategori!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        }

        redirect('PublikasiController/Index');
    }

    public function EditKategori($id)
    {
        $nama_kategori = trim($this->input->post('nama_kategori', TRUE));
        $urutan        = (int) $this->input->post('urutan', TRUE) ?: 0;

        if (empty($nama_kategori)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Nama kategori tidak boleh kosong!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        $data = [
            'nama_kategori' => htmlspecialchars($nama_kategori),
            'urutan'        => $urutan,
        ];

        $resp = $this->PublikasiModel->updateKategori($id, $data);
        if ($resp) {
            $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Kategori berhasil diperbarui!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal memperbarui kategori!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        }

        redirect('PublikasiController/Index');
    }

    public function HapusKategori($id)
    {
        $kat = $this->PublikasiModel->getKategoriById($id);
        if (!$kat) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Kategori tidak ditemukan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        $count = $this->PublikasiModel->countItemsByKategori($id);
        if ($count > 0) {
            $this->session->set_flashdata('msg', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Kategori <strong>' . htmlspecialchars($kat['nama_kategori']) . '</strong> tidak dapat dihapus karena masih memiliki ' . $count . ' dokumen di dalamnya! Harap pindahkan atau hapus dokumen terlebih dahulu.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
            redirect('PublikasiController/Index');
            return;
        }

        $resp = $this->PublikasiModel->deleteKategori($id);
        if ($resp) {
            $this->session->set_flashdata('msg', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                Kategori <strong>' . htmlspecialchars($kat['nama_kategori']) . '</strong> berhasil dihapus!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        } else {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal menghapus kategori!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>');
        }

        redirect('PublikasiController/Index');
    }

    // ==========================================
    // HELPER: UPLOAD FILE PDF
    // ==========================================
    private function _do_upload($field_name)
    {
        $upload_path = './uploads/publikasi/';
        if (!is_dir($upload_path)) {
            @mkdir($upload_path, 0777, TRUE);
        }

        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 51200; // 50 MB
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload($field_name)) {
            return [
                'status' => FALSE,
                'error'  => $this->upload->display_errors('', ''),
            ];
        }

        $upload_data = $this->upload->data();
        return [
            'status'    => TRUE,
            'file_name' => $upload_data['file_name'],
        ];
    }
}
