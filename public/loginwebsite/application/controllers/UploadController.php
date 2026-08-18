<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('HeaderModel');
    }

    //proses input data mutasi
    public function Index ()
    {
        $data ['title']='Upload Header';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->HeaderModel->DataTampil();

        $this->form_validation->set_rules('logo_bapenda', 'Logo Bapenda', 'trim');
        $this->form_validation->set_rules('url_bapenda', 'URL Bapenda', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('alamat_kantor', 'Alamat Kantor', 'required');
        $this->form_validation->set_rules('logo_fb', 'Logo Facebook', 'trim');
        $this->form_validation->set_rules('url_fb', 'URL FB', 'required');
        $this->form_validation->set_rules('logo_twitter', 'Logo Twitter', 'trim');
        $this->form_validation->set_rules('url_twitter', 'UERL Twitter', 'required');
        $this->form_validation->set_rules('logo_ig', 'Logo IG', 'trim');
        $this->form_validation->set_rules('url_ig', 'kode kelurahan lama', 'required');
        $this->form_validation->set_rules('logo_yt', 'Logo Youtube', 'trim');
        $this->form_validation->set_rules('url_yt', 'URL Youtube', 'required');
        $this->form_validation->set_rules('logo_tiktok', 'Logo Tiktok', 'trim');
        $this->form_validation->set_rules('url_tiktok', 'URL Tiktok', 'required');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Upload/HeaderView', $data);
        $this->load->view('templates/footer');
    else :
        $UploadLogoBapenda = $this->UploadHeader('logo_bapenda');
        $UploadBackground1 = $this->UploadHeader('background1');
        $UploadBackground2 = $this->UploadHeader('background2');
        $UploadBackground3 = $this->UploadHeader('background3');
        $UploadBackground4 = $this->UploadHeader('background4');
        $UploadBackground5 = $this->UploadHeader('background5');
            if ($UploadLogoBapenda == FALSE || $UploadBackground1 == FALSE || $UploadBackground2 == FALSE || $UploadBackground3 == FALSE || $UploadBackground4 == FALSE || $UploadBackground5 == FALSE) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
                redirect('UploadController/Index');
                else :
                $data = [
                    'logo_bapenda'          => $UploadLogoBapenda,
                    'url_bapenda'   		=> htmlspecialchars($this->input->post('url_bapenda', true)),
                    'no_telp'   		    => htmlspecialchars($this->input->post('no_telp',true)),
                    'alamat_kantor'   	    => htmlspecialchars($this->input->post('alamat_kantor',true)),
                    'background1'           => $UploadBackground1,
                    'url_fb'   		        => htmlspecialchars($this->input->post('url_fb',true)),
                    'background2'           => $UploadBackground2,
                    'url_twitter'   		=> htmlspecialchars($this->input->post('url_twitter',true)),
                    'background3'           => $UploadBackground3,
                    'url_ig'   		        => htmlspecialchars($this->input->post('url_ig',true)),
                    'background4'           => $UploadBackground4,
                    'url_yt'   		        => htmlspecialchars($this->input->post('url_yt',true)),
                    'background5'           => $UploadBackground5,
                    'url_tiktok'   		    => htmlspecialchars($this->input->post('url_tiktok',true)),
                    'tgl_upload'            => date('Y-m-d'),
                ];
                $resp = $this->HeaderModel->UploadHeader($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            Data berhasil disimpan
                            </div>');
                            redirect('UploadController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            Data gagal disimpan!
                            </div>');
                            redirect('UploadController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadHeader($data)
	{
		$config['upload_path']          = './uploads/header';
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
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('header',['id' => $id]);

				// hapus filex
				$path1 = './uploads/header/'.$cek_data['logo_bapenda'];
                $path2 = './uploads/header/'.$cek_data['background1'];
                $path3 = './uploads/header/'.$cek_data['background2'];
                $path4 = './uploads/header/'.$cek_data['background3'];
                $path5 = './uploads/header/'.$cek_data['background4'];
                $path6 = './uploads/header/'.$cek_data['background5'];
				unlink($path1);
                unlink($path2);
                unlink($path3);
                unlink($path4);
                unlink($path5);
                unlink($path6);

				if ($resp) :
					$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

					redirect('UploadController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('UploadController/Index');
				endif;

			else :
			endif;
	}

    public function Edit($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit URL Header';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('url_bapenda', 'URL Bapenda', 'required');
                $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
                $this->form_validation->set_rules('alamat_kantor', 'Alamat Kantor', 'required');
                $this->form_validation->set_rules('url_fb', 'URL FB', 'required');
                $this->form_validation->set_rules('url_twitter', 'UERL Twitter', 'required');
                $this->form_validation->set_rules('url_ig', 'kode kelurahan lama', 'required');
                $this->form_validation->set_rules('url_yt', 'URL Youtube', 'required');
                $this->form_validation->set_rules('url_tiktok', 'URL Tiktok', 'required');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditHeaderView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'url_bapenda'   		=> htmlspecialchars($this->input->post('url_bapenda', true)),
                            'no_telp'   		    => htmlspecialchars($this->input->post('no_telp',true)),
                            'alamat_kantor'   	    => htmlspecialchars($this->input->post('alamat_kantor',true)),
                            'url_fb'   		        => htmlspecialchars($this->input->post('url_fb',true)),
                            'url_twitter'   		=> htmlspecialchars($this->input->post('url_twitter',true)),
                            'url_ig'   		        => htmlspecialchars($this->input->post('url_ig',true)),
                            'url_yt'   		        => htmlspecialchars($this->input->post('url_yt',true)),
                            'url_tiktok'   		    => htmlspecialchars($this->input->post('url_tiktok',true)),
                            'tgl_upload'            => date('Y-m-d'),
                        ];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');				
		endif;
	}

    public function EditLogo($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Bapenda';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('logo_bapenda','Logo Bapenda','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditLogoBapendaView', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadLogoBapenda = $this->UploadHeader('logo_bapenda'); // parameter nama foto

					if ($UploadLogoBapenda == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['logo_bapenda'];
						unlink($path);

						$data = [
							'logo_bapenda'				=> $UploadLogoBapenda,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}

    public function EditLogoBackground1($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Background 1';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('background1','Background 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditBackground1View', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadBackground1 = $this->UploadHeader('background1'); // parameter nama foto

					if ($UploadBackground1 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['background1'];
						unlink($path);

						$data = [
							'background1'				=> $UploadBackground1,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}

    public function EditLogoBackground2($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Background 2';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('background2','Background 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditBackground2View', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadBackground2 = $this->UploadHeader('background2'); // parameter nama foto

					if ($UploadBackground2 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['background2'];
						unlink($path);

						$data = [
							'background2'				=> $UploadBackground2,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}

    public function EditLogoBackground3($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Background 3';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('background3','Background 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditBackground3View', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadBackground3 = $this->UploadHeader('background3'); // parameter nama foto

					if ($UploadBackground3 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['background3'];
						unlink($path);

						$data = [
							'background3'				=> $UploadBackground3,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}

    public function EditLogoBackground4($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Background 4';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('background4','Background 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditBackground4View', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadBackground4 = $this->UploadHeader('background4'); // parameter nama foto

					if ($UploadBackground4 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['background4'];
						unlink($path);

						$data = [
							'background4'				=> $UploadBackground4,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}

    public function EditLogoBackground5($id)
	{
		$cek_data = $this->db->get_where('header',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Logo Background 5';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('background5','Background 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Upload/EditBackground5View', $data);
                    $this->load->view('templates/footer');
				else :

				$UploadBackground5 = $this->UploadHeader('background5'); // parameter nama foto

					if ($UploadBackground5 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('UploadController/Index');	
					else :

						// hapus file
						$path = './uploads/Header/'.$cek_data['background5'];
						unlink($path);

						$data = [
							'background5'				=> $UploadBackground5,
						];

						$resp = $this->db->update('header',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('UploadController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('UploadController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('UploadController/Index');					
		endif;
	}
    
}