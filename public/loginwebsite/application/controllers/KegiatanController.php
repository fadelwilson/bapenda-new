<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KegiatanController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('KegiatanModel');
    }

    //proses input data mutasi
    public function Index ()
    {
        $data ['title']='Upload Kegiatan';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->KegiatanModel->DataTampil();

        $this->form_validation->set_rules('kegiatan1', 'kegiatan 1', 'trim');
        $this->form_validation->set_rules('kegiatan2', 'kegiatan 2', 'trim');
        $this->form_validation->set_rules('kegiatan3', 'kegiatan 3', 'trim');
        $this->form_validation->set_rules('kegiatan4', 'kegiatan 4', 'trim');
        $this->form_validation->set_rules('kegiatan5', 'kegiatan 5', 'trim');
        $this->form_validation->set_rules('kegiatan6', 'kegiatan 6', 'trim');
        $this->form_validation->set_rules('kegiatan7', 'kegiatan 7', 'trim');
        $this->form_validation->set_rules('url_yt_kegiatan', 'Youtube Kegiatan', 'Required');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Kegiatan/KegiatanView', $data);
        $this->load->view('templates/footer');
    else :
        $Uploadkegiatan1 = $this->UploadKegiatan('kegiatan1');
        $Uploadkegiatan2 = $this->UploadKegiatan('kegiatan2');
        $Uploadkegiatan3 = $this->UploadKegiatan('kegiatan3');
        $Uploadkegiatan4 = $this->UploadKegiatan('kegiatan4');
        $Uploadkegiatan5 = $this->UploadKegiatan('kegiatan5');
        $Uploadkegiatan6 = $this->UploadKegiatan('kegiatan6');
        $Uploadkegiatan7 = $this->UploadKegiatan('kegiatan7');
            if ($Uploadkegiatan1 == FALSE || $Uploadkegiatan2 == FALSE || $Uploadkegiatan3 == FALSE || $Uploadkegiatan4 == FALSE || $Uploadkegiatan5 == FALSE || $Uploadkegiatan6 == FALSE || $Uploadkegiatan7 == FALSE) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
                redirect('KegiatanController/Index');
                else :
                $data = [
                    'kegiatan1'           => $Uploadkegiatan1,
                    'kegiatan2'           => $Uploadkegiatan2,
                    'kegiatan3'           => $Uploadkegiatan3,
                    'kegiatan4'           => $Uploadkegiatan4,
                    'kegiatan5'           => $Uploadkegiatan5,
                    'kegiatan6'           => $Uploadkegiatan6,
                    'kegiatan7'           => $Uploadkegiatan7,
                    'url_yt_kegiatan'     => htmlspecialchars($this->input->post('url_yt_kegiatan',true)),
                    'tgl_upload'          => date('Y-m-d'),
                ];
                $resp = $this->KegiatanModel->UploadKegiatan($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            Data berhasil disimpan
                            </div>');
                            redirect('KegiatanController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            Data gagal disimpan!
                            </div>');
                            redirect('KegiatanController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadKegiatan($data)
	{
		$config['upload_path']          = './uploads/kegiatan';
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
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('kegiatan',['id' => $id]);

				// hapus filex
				$path1 = './uploads/kegiatan/'.$cek_data['kegiatan1'];
                $path2 = './uploads/kegiatan/'.$cek_data['kegiatan2'];
                $path3 = './uploads/kegiatan/'.$cek_data['kegiatan3'];
                $path4 = './uploads/kegiatan/'.$cek_data['kegiatan4'];
                $path5 = './uploads/kegiatan/'.$cek_data['kegiatan5'];
                $path6 = './uploads/kegiatan/'.$cek_data['kegiatan6'];
                $path7 = './uploads/kegiatan/'.$cek_data['kegiatan7'];
				unlink($path1);
                unlink($path2);
                unlink($path3);
                unlink($path4);
                unlink($path5);
                unlink($path6);
                unlink($path7);

				if ($resp) :
					$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
						Hapus berhasil
						</div>');

					redirect('KegiatanController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('KegiatanController/Index');
				endif;

			else :
			endif;
	}

    public function EditKegiatan1($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit kegiatan 1';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan1','kegiatan 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan1View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan1 = $this->UploadKegiatan('kegiatan1'); // parameter nama foto

					if ($Uploadkegiatan1 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan1'];
						unlink($path);

						$data = [
							'kegiatan1'				=> $Uploadkegiatan1,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('KegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

    public function EditKegiatan2($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Kegiatan 2';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan2','kegiatan 2','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan2View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan2 = $this->UploadKegiatan('kegiatan2'); // parameter nama foto

					if ($Uploadkegiatan2 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanControllerr/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan2'];
						unlink($path);

						$data = [
							'kegiatan2'				=> $Uploadkegiatan2,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('kegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

    public function EditKegiatan3($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit kegiatan 3';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan3','kegiatan 3','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan3View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan3 = $this->UploadKegiatan('kegiatan3'); // parameter nama foto

					if ($Uploadkegiatan3 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan3'];
						unlink($path);

						$data = [
							'kegiatan3'				=> $Uploadkegiatan3,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('KegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

    public function EditKegiatan4($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Kegiatan 4';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan4','Kegiatan 4','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan4View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan4 = $this->UploadKegiatan('kegiatan4'); // parameter nama foto

					if ($Uploadkegiatan4 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan4'];
						unlink($path);

						$data = [
							'kegiatan4'				=> $Uploadkegiatan4,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('KegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

    public function EditKegiatan5($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Kegiatan 5';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan5','Kegiatan 5','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan5View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan5 = $this->UploadKegiatan('kegiatan5'); // parameter nama foto

					if ($Uploadkegiatan5 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan5'];
						unlink($path);

						$data = [
							'kegiatan5'				=> $Uploadkegiatan5,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('kegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('kegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('kegiatanController/Index');					
		endif;
	}

    public function EditKegiatan6($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Kegiatan 6';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan6','Kegiatan 6','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan6View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan6 = $this->UploadKegiatan('kegiatan6'); // parameter nama foto

					if ($Uploadkegiatan6 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan6'];
						unlink($path);

						$data = [
							'kegiatan6'				=> $Uploadkegiatan6,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('kegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

    public function EditKegiatan7($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Kegiatan 7';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('kegiatan7','Kegiatan 7','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatan7View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadkegiatan7 = $this->UploadKegiatan('kegiatan7'); // parameter nama foto

					if ($Uploadkegiatan7 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('KegiatanController/Index');	
					else :

						// hapus file
						$path = './uploads/kegiatan/'.$cek_data['kegiatan7'];
						unlink($path);

						$data = [
							'kegiatan7'				=> $Uploadkegiatan7,
						];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('kegiatanController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');					
		endif;
	}

   
    public function Edit($id)
	{
		$cek_data = $this->db->get_where('kegiatan',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit URL Kegiatan';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('url_yt_kegiatan', 'URL Bapenda', 'required');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Kegiatan/EditKegiatanView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'url_yt_kegiatan'   		=> htmlspecialchars($this->input->post('url_yt_kegiatan', true)),
                        ];

						$resp = $this->db->update('kegiatan',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('KegiatanController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('KegiatanController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('KegiatanController/Index');				
		endif;
	}
}