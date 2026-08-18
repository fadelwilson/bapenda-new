<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StrukturController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('StrukturModel');
    }
    // Controller struktur
     public function Index ()
     {
         $data ['title']='Upload Struktur Organisasi';
         $data['user']= $this->db->get_where('user', ['username' => 
         $this->session->userdata('username')])->row_array();
         $data['DataTampil'] = $this->StrukturModel->DataTampilStruktur();
 
         $this->form_validation->set_rules('foto_struk', 'Foto Struktur Organisasi', 'trim');
         $this->form_validation->set_rules('foto_matrix', 'Foto Struktur Organisasi', 'trim');
         $this->form_validation->set_rules('judul1', 'Judul 1', 'required');
         $this->form_validation->set_rules('narasi1', 'Narasi 1', 'required');
         $this->form_validation->set_rules('judul2', 'Judul 2', 'required');
         $this->form_validation->set_rules('narasi2', 'Narasi 2', 'required');
 
         if  ($this->form_validation->run() == FALSE) :
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('TentangKami/Struktur/StrukturView', $data);
         $this->load->view('templates/footer');
     else :
         $FotoStruktur = $this->UploadStruktur('foto_struk');
         $FotoMatrix = $this->UploadStruktur('foto_matrix');
             if ($FotoStruktur == FALSE || $FotoMatrix == FALSE ) :
                 $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                 Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                 </div>');
                 redirect('StrukturController/Index');
                 else :
                 $data = [
                     'foto_struk'           => $FotoStruktur,
                     'foto_matrix'           => $FotoMatrix,
                     'judul1'          => htmlspecialchars($this->input->post('judul1',true)),
                     'narasi1'         => htmlspecialchars($this->input->post('narasi1',true)),
                     'judul2'          => htmlspecialchars($this->input->post('judul2',true)),
                     'narasi2'         => htmlspecialchars($this->input->post('narasi2',true)),
                     'tgl_upload'          => date('Y-m-d'),
                 ];
                 $resp = $this->StrukturModel->Struktur($data);
                 if ($resp) :
                             $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                             data berhasil disimpan!
                             </div>');
                             redirect('StrukturController/Index');
                  else :
                             $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                             data gagal disimpan!
                             </div>');
                             redirect('StrukturController/Index');
                  endif;
             endif;
         endif;
     }

     private function UploadStruktur($data)
	{
		$config['upload_path']          = './uploads/tentangkami/struktur';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
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
		$cek_data = $this->db->get_where('struktur',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('struktur',['id' => $id]);

				// hapus filex
				$path1 = './uploads/tentangkami/struktur/'.$cek_data['foto_struk'];
				$path2 = './uploads/tentangkami/struktur/'.$cek_data['foto_matrix'];
				unlink($path1);
				unlink($path2);

				if ($resp) :
					$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
						Hapus berhasil!
						</div>');

					redirect('StrukturController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('StrukturController/Index');
				endif;

			else :
			endif;
	}

    public function EditFotoStruk($id)
	{
		$cek_data = $this->db->get_where('struktur',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Struktur';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_struk','Foto Struktur','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Struktur/EditFotoStrukView', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoStruktur = $this->UploadStruktur('foto_struk'); // parameter nama foto

					if ($FotoStruktur == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('StrukturController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/struktur/'.$cek_data['foto_struk'];
						unlink($path);

						$data = [
							'foto_struk'				=> $FotoStruktur,
						];

						$resp = $this->db->update('struktur',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil Dirubah
								</div>');

							redirect('StrukturController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal Dirubah!
								</div>');

							redirect('StrukturController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('StrukturController/Index');					
		endif;
	}

	public function EditFotoMatrix($id)
	{
		$cek_data = $this->db->get_where('struktur',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Matrix';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_matrix','Foto Matrix','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Struktur/EditFotoMatrixView', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoMatrix = $this->UploadStruktur('foto_matrix'); // parameter nama foto

					if ($FotoMatrix == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('StrukturController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/struktur/'.$cek_data['foto_matrix'];
						unlink($path);

						$data = [
							'foto_matrix'				=> $FotoMatrix,
						];

						$resp = $this->db->update('struktur',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil Dirubah
								</div>');

							redirect('StrukturController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal Dirubah!
								</div>');

							redirect('StrukturController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('StrukturController/Index');					
		endif;
	}

    public function Edit($id)
	{
		$cek_data = $this->db->get_where('struktur',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit Struktur';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('judul1', 'Judul Visi', 'required');
                $this->form_validation->set_rules('narasi1', 'Narasi Visi', 'required');
				$this->form_validation->set_rules('judul2', 'Judul Visi', 'required');
                $this->form_validation->set_rules('narasi2', 'Narasi Visi', 'required');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Struktur/EditStrukView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'judul1'   		=> htmlspecialchars($this->input->post('judul1', true)),
                            'narasi1'   		=> htmlspecialchars($this->input->post('narasi1', true)),
							'judul2'   		=> htmlspecialchars($this->input->post('judul2', true)),
                            'narasi2'   		=> htmlspecialchars($this->input->post('narasi2', true)),
                        ];

						$resp = $this->db->update('struktur',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil dirubah
								</div>');

							redirect('StrukturController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal dirubah!
								</div>');

							redirect('StrukturController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('StrukturController/Index');				
		endif;
	}
    // end controller
}