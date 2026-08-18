<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('GaleriModel');
    }

    //proses input data mutasi
    public function Index ()
    {
        $data ['title']='Upload Galeri';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->GaleriModel->DataTampil();

        $this->form_validation->set_rules('galeri1', 'Galeri 1', 'trim');
        $this->form_validation->set_rules('galeri2', 'Galeri 2', 'trim');
        $this->form_validation->set_rules('galeri3', 'Galeri 3', 'trim');
        $this->form_validation->set_rules('galeri4', 'Galeri 4', 'trim');
        $this->form_validation->set_rules('galeri5', 'Galeri 5', 'trim');
        $this->form_validation->set_rules('galeri6', 'Galeri 6', 'trim');
        $this->form_validation->set_rules('poster_kaban', 'Poster Kaban', 'trim');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Galeri/GaleriView', $data);
        $this->load->view('templates/footer');
    else :
        $Uploadgaleri1 = $this->UploadGaleri('galeri1');
        $Uploadgaleri2 = $this->UploadGaleri('galeri2');
        $Uploadgaleri3 = $this->UploadGaleri('galeri3');
        $Uploadgaleri4 = $this->UploadGaleri('galeri4');
        $Uploadgaleri5 = $this->UploadGaleri('galeri5');
        $Uploadgaleri6 = $this->UploadGaleri('galeri6');
        $Uploadposterkaban = $this->UploadGaleri('poster_kaban');
            if ($Uploadgaleri1 == FALSE || $Uploadgaleri2 == FALSE || $Uploadgaleri3 == FALSE || $Uploadgaleri4 == FALSE || $Uploadgaleri5 == FALSE || $Uploadgaleri6 == FALSE || $Uploadposterkaban == FALSE) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
                redirect('GaleriController/Index');
                else :
                $data = [
                    'galeri1'           => $Uploadgaleri1,
                    'galeri2'           => $Uploadgaleri2,
                    'galeri3'           => $Uploadgaleri3,
                    'galeri4'           => $Uploadgaleri4,
                    'galeri5'           => $Uploadgaleri5,
                    'galeri6'           => $Uploadgaleri6,
                    'poster_kaban'      => $Uploadposterkaban,
                    'tgl_upload'        => date('Y-m-d'),
                ];
                $resp = $this->GaleriModel->UploadGaleri($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            Data berhasil disimpan
                            </div>');
                            redirect('GaleriController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            Data gagal disimpan!
                            </div>');
                            redirect('GaleriController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadGaleri($data)
	{
		$config['upload_path']          = './uploads/galeri';
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
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('galeri',['id' => $id]);

				// hapus filex
				$path1 = './uploads/galeri/'.$cek_data['galeri1'];
                $path2 = './uploads/galeri/'.$cek_data['galeri2'];
                $path3 = './uploads/galeri/'.$cek_data['galeri3'];
                $path4 = './uploads/galeri/'.$cek_data['galeri4'];
                $path5 = './uploads/galeri/'.$cek_data['galeri5'];
                $path6 = './uploads/galeri/'.$cek_data['galeri6'];
                $path7 = './uploads/galeri/'.$cek_data['poster_kaban'];
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

					redirect('GaleriController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('GaleriController/Index');
				endif;

			else :
			endif;
	}

    public function EditGaleri1($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 1';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri1','Galeri 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri1View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri1 = $this->UploadGaleri('galeri1'); // parameter nama foto

					if ($Uploadgaleri1 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri1'];
						unlink($path);

						$data = [
							'galeri1'				=> $Uploadgaleri1,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditGaleri2($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 2';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri2','Galeri 2','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri2View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri2 = $this->UploadGaleri('galeri2'); // parameter nama foto

					if ($Uploadgaleri2 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri2'];
						unlink($path);

						$data = [
							'galeri2'				=> $Uploadgaleri2,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditGaleri3($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 3';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri3','Galeri 3','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri3View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri3 = $this->UploadGaleri('galeri3'); // parameter nama foto

					if ($Uploadgaleri3 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri3'];
						unlink($path);

						$data = [
							'galeri3'				=> $Uploadgaleri3,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditGaleri4($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 4';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri4','Galeri 4','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri4View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri4 = $this->UploadGaleri('galeri4'); // parameter nama foto

					if ($Uploadgaleri4 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri4'];
						unlink($path);

						$data = [
							'galeri4'				=> $Uploadgaleri4,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditGaleri5($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 5';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri5','Galeri 5','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri5View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri5 = $this->UploadGaleri('galeri5'); // parameter nama foto

					if ($Uploadgaleri5 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri5'];
						unlink($path);

						$data = [
							'galeri5'				=> $Uploadgaleri5,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditGaleri6($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Galeri 6';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('galeri6','Galeri 6','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleri6View', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadgaleri6 = $this->UploadGaleri('galeri6'); // parameter nama foto

					if ($Uploadgaleri6 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './uploads/galeri/'.$cek_data['galeri6'];
						unlink($path);

						$data = [
							'galeri6'				=> $Uploadgaleri6,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}

    public function EditPosterKaban($id)
	{
		$cek_data = $this->db->get_where('galeri',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Poster Kaban';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('poster_kaban','Poster Kaban','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('Galeri/EditGaleriPosterKabanView', $data);
                    $this->load->view('templates/footer');
				else :

				$Uploadposterkaban = $this->UploadGaleri('poster_kaban'); // parameter nama foto

					if ($Uploadposterkaban == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

						redirect('GaleriController/Index');	
					else :

						// hapus file
						$path = './Uploads/galeri/'.$cek_data['poster_kaban'];
						unlink($path);

						$data = [
							'poster_kaban'				=> $Uploadposterkaban,
						];

						$resp = $this->db->update('galeri',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data berhasil disimpan
								</div>');

							redirect('GaleriController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data gagal disimpan!
								</div>');

							redirect('GaleriController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('GaleriController/Index');					
		endif;
	}
    
}