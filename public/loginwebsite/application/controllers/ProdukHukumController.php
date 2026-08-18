<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukHukumController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('ProdukHukumModel');
    }

    //proses Index tentang kami
    public function Index ()
    {
        $data ['title']='Upload Produk Hukum';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->ProdukHukumModel->DataTampilProdukHukum();

		$this->form_validation->set_rules('file_uu', 'Perundang - Undangan', 'trim');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('TentangKami/ProdukHukum/ProdukHukumView', $data);
        $this->load->view('templates/footer');
    else :
        $FileUU = $this->UploadProdukHukum('file_uu');

            if ($FileUU == False ) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya pdf yang dapat di upload!
                </div>');
                redirect('ProdukHukumController/Index');
                else :
                $data = [
                    'file_uu'          => $FileUU,
					'ket'     	       => htmlspecialchars($this->input->post('ket',true)),
                    'tgl_upload'       => date('Y-m-d'),
                ];
                $resp = $this->ProdukHukumModel->ProdukHukum($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            berhasil disimpan
                            </div>');
                            redirect('ProdukHukumController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            gagal disimpan!
                            </div>');
                            redirect('ProdukHukumController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadProdukHukum($data)
	{
		$config['upload_path']          = './uploads/tentangkami/produkhukum/';
		$config['allowed_types']        = 'pdf';
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
		$cek_data = $this->db->get_where('produk_hukum',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('produk_hukum',['id' => $id]);

				// hapus filex
				$path1 = './uploads/tentangkami/produkhukum/'.$cek_data['file_uu'];
				unlink($path1);


				if ($resp) :
					$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

					redirect('ProdukHukumController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('ProdukHukumController/Index');
				endif;

			else :
			endif;
	}

	public function Edit($id)
	{
		$cek_data = $this->db->get_where('produk_hukum',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit Produk Hukum';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('file_uu', 'Perundang - Undangan', 'trim');
                $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/ProdukHukum/EditProdukHukumView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'ket'     	       => htmlspecialchars($this->input->post('ket',true)),
                            'tgl_upload'       => date('Y-m-d'),
                        ];

						$resp = $this->db->update('produk_hukum',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data Berhasil Dirubah!
								</div>');

							redirect('ProdukHukumController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data Gagal Dirubah!
								</div>');

							redirect('ProdukHukumController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('ProdukHukumController/Index');				
		endif;
	}

    public function EditFileUU($id)
	{
		$cek_data = $this->db->get_where('produk_hukum',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit File Produk Hukum';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('file_uu','File UU','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/ProdukHukum/EditFileUUView', $data);
                    $this->load->view('templates/footer');
				else :

				$FileUU = $this->UploadProdukHukum('file_uu'); // parameter nama foto

					if ($FileUU == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload gagal, hanya pdf yang dapat di upload!
							</div>');

                            redirect('ProdukHukumController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/produkhukum/'.$cek_data['file_uu'];
						unlink($path);

						$data = [
							'file_uu'				=> $FileUU,
						];

						$resp = $this->db->update('produk_hukum',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								File berhasil Dirubah
								</div>');

							redirect('ProdukHukumController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								File gagal dirubah!
								</div>');

							redirect('ProdukHukumController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('ProdukHukumController/Index');					
		endif;
	}



}