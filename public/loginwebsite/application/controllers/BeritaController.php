<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BeritaController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('BeritaModel');
    }

    //proses input data mutasi
    public function Index ()
    {
        $data ['title']='Upload Berita';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->BeritaModel->DataTampil();

        $this->form_validation->set_rules('foto_berita', 'Photo Berita', 'trim');
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('narasi_berita', 'Narasi Berita', 'required');
        $this->form_validation->set_rules('url_berita', 'URL Berita', 'required');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Berita/BeritaView', $data);
        $this->load->view('templates/footer');
    else :
        $Uploadfotoberita = $this->UploadBerita('foto_berita');
            if ($Uploadfotoberita == FALSE ) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
                redirect('BeritaController/Index');
                else :
                $data = [
                    'foto_berita'      	=> $Uploadfotoberita,
                    'judul_berita'     	=> htmlspecialchars($this->input->post('judul_berita',true)),
                    'narasi_berita'    	=> htmlspecialchars($this->input->post('narasi_berita',true)),
                    'url_berita'     	=> htmlspecialchars($this->input->post('url_berita',true)),
                    'tgl_upload'        => date('Y-m-d'),
                ];
                $resp = $this->BeritaModel->UploadBerita($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            Laporan berhasil dibuat
                            </div>');
                            redirect('BeritaController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            Laporan gagal dibuat!
                            </div>');
                            redirect('BeritaController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadBerita($data)
	{
		$config['upload_path']          = './uploads/berita';
		$config['allowed_types']        = 'gif|jpg|png|pdf|jpeg';
		$config['max_size']             = '0';
		$config['remove_spaces']        = TRUE;
		$config['detect_mime']        	= TRUE;
		$config['mod_mime_fix']        	= TRUE;
		$config['encrypt_name']        	= TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($data)) :
			return FALSE;
		else :
			return $this->upload->data('file_name');
		endif;
	}

    public function Hapus($id)
	{
		$cek_data = $this->db->get_where('berita',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('berita',['id' => $id]);

				// hapus filex
				$path1 = './uploads/berita/'.$cek_data['foto_berita'];
				unlink($path1);

				if ($resp) :
					$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

					redirect('BeritaController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('BeritaController/Index');
				endif;

			else :
			endif;
	}

    public function EditFotoBerita($id)
	{
		$cek_data = $this->db->get_where('berita',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Berita';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_berita','Foto Berita','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Berita/EditFotoBeritaView', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadfotoberita = $this->UploadBerita('foto_berita'); // parameter nama foto

					if ($Uploadfotoberita == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('BeritaController/Index');	
					else :

						// hapus file
						$path = './uploads/berita/'.$cek_data['foto_berita'];
						unlink($path);

						$data = [
							'foto_berita'				=> $Uploadfotoberita,
						];

						$resp = $this->db->update('berita',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil dibuat
								</div>');

							redirect('BeritaController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal dibuat!
								</div>');

							redirect('BeritaController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('BeritaController/Index');					
		endif;
	}

   
    public function Edit($id)
	{
		$cek_data = $this->db->get_where('Berita',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit Berita';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
                $this->form_validation->set_rules('narasi_berita', 'Narasi Berita', 'required');
                $this->form_validation->set_rules('url_berita', 'URL Berita', 'required');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Berita/EditBeritaView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'judul_berita'   	=> htmlspecialchars($this->input->post('judul_berita', true)),
                            'narasi_berita'   	=> htmlspecialchars($this->input->post('narasi_berita', true)),
                            'url_berita'   		=> htmlspecialchars($this->input->post('url_berita', true)),
                        ];

						$resp = $this->db->update('berita',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('BeritaController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Laporan gagal disimpan!
								</div>');

							redirect('BeritaController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('BeritaController/Index');				
		endif;
	}
}