<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TentangKamiController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('TentangKamiModel');
    }

    //proses Index tentang kami
    public function Index ()
    {
        $data ['title']='Upload Tentang Kami';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['DataTampil'] = $this->TentangKamiModel->DataTampilTentangKami();

        $this->form_validation->set_rules('foto_header', 'Photo Header', 'trim');
		$this->form_validation->set_rules('foto_kaban', 'Photo Kaban', 'trim');
        $this->form_validation->set_rules('nama_kaban', 'Nama Kaban', 'required');
		$this->form_validation->set_rules('foto_sekban', 'Photo sekban', 'trim');
        $this->form_validation->set_rules('nama_sekban', 'Nama sekban', 'required');
		$this->form_validation->set_rules('foto_kabid1', 'Photo kabid1', 'trim');
        $this->form_validation->set_rules('nama_kabid1', 'Nama kabid1', 'required');
		$this->form_validation->set_rules('foto_kabid2', 'Photo kabid2', 'trim');
        $this->form_validation->set_rules('nama_kabid2', 'Nama kabid2', 'required');
		$this->form_validation->set_rules('foto_kabid3', 'Photo kabid3', 'trim');
        $this->form_validation->set_rules('nama_kabid3', 'Nama kabid3', 'required');

        if  ($this->form_validation->run() == FALSE) :
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('TentangKami/Profil/ProfilTimView', $data);
        $this->load->view('templates/footer');
    else :
		$FotoHeader = $this->UploadFotoTentangKami('foto_header');
        $FotoKaban = $this->UploadFotoTentangKami('foto_kaban');
		$FotoSekban = $this->UploadFotoTentangKami('foto_sekban');
		$FotoKabid1 = $this->UploadFotoTentangKami('foto_kabid1');
		$FotoKabid2 = $this->UploadFotoTentangKami('foto_kabid2');
		$FotoKabid3 = $this->UploadFotoTentangKami('foto_kabid3');
            if ($FotoHeader == False || $FotoKaban == FALSE || $FotoSekban == False || $FotoKabid1 == False || $FotoKabid2 == False || $FotoKabid3 == False) :
                $this->session->set_flashdata( 'msg','<div class="alert alert-danger" role="alert">
                Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
                </div>');
                redirect('TentangKamiController/Index');
                else :
                $data = [
					'foto_header'          => $FotoHeader,
                    'foto_kaban'          => $FotoKaban,
					'foto_sekban'          => $FotoSekban,
					'foto_kabid1'          => $FotoKabid1,
					'foto_kabid2'          => $FotoKabid2,
					'foto_kabid3'          => $FotoKabid3,
					'nama_kaban'     	=> htmlspecialchars($this->input->post('nama_kaban',true)),
					'nama_sekban'     	=> htmlspecialchars($this->input->post('nama_sekban',true)),
					'nama_kabid1'     	=> htmlspecialchars($this->input->post('nama_kabid1',true)),
					'nama_kabid2'     	=> htmlspecialchars($this->input->post('nama_kabid2',true)),
					'nama_kabid3'     	=> htmlspecialchars($this->input->post('nama_kabid3',true)),
                    'tgl_upload'          	=> date('Y-m-d'),
                ];
                $resp = $this->TentangKamiModel->TentangKami($data);
                if ($resp) :
                            $this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
                            berhasil disimpan
                            </div>');
                            redirect('TentangKamiController/Index');
                 else :
                            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
                            gagal disimpan!
                            </div>');
                            redirect('TentangKamiController/Index');
                 endif;
            endif;
        endif;
    }

    private function UploadFotoTentangKami($data)
	{
		$config['upload_path']          = './uploads/tentangkami/profiltim/';
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
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

			if ($cek_data['id'] == $id) :

				$resp = $this->db->delete('tentang_kami',['id' => $id]);

				// hapus filex
				$path1 = './uploads/tentangkami/profiltim/'.$cek_data['foto_header'];
				$path2 = './uploads/tentangkami/profiltim/'.$cek_data['foto_kaban'];
				$path3 = './uploads/tentangkami/profiltim/'.$cek_data['foto_sekban'];
				$path4 = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid1'];
				$path5 = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid2'];
				$path6 = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid3'];
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

					redirect('TentangKamiController/Index');
				else :
					$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
						Hapus gagal!
						</div>');

					redirect('TentangKamiController/Index');
				endif;

			else :
			endif;
	}

	public function Edit($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();
		
			if ($cek_data['id'] == $id) :

                $data['EditData'] = $cek_data;
                $data ['title']='Edit Tentang kami';
                $data['user']= $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();

                $this->form_validation->set_rules('nama_kaban', 'Judul Seputar', 'required');
                $this->form_validation->set_rules('nama_sekban', 'Nama Sekban', 'required');
				$this->form_validation->set_rules('nama_kabid1', 'Nama Kabid 1', 'required');
				$this->form_validation->set_rules('nama_kabid2', 'Nama Kabid 2', 'required');
				$this->form_validation->set_rules('nama_kabid3', 'Nama Kabid 3', 'required');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditTentangKamiView', $data);
                    $this->load->view('templates/footer');
				else :
                        $data = [
                            'nama_kaban'   			=> htmlspecialchars($this->input->post('nama_kaban', true)),
                            'nama_sekban'   		=> htmlspecialchars($this->input->post('nama_sekban', true)),
							'nama_kabid1'   		=> htmlspecialchars($this->input->post('nama_kabid1', true)),
							'nama_kabid2'   		=> htmlspecialchars($this->input->post('nama_kabid2', true)),
							'nama_kabid3'   		=> htmlspecialchars($this->input->post('nama_kabid3', true)),
                        ];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Data Berhasil Dirubah!
								</div>');

							redirect('TentangKamiController/Index');
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Data Gagal Dirubah!
								</div>');

							redirect('TentangKamiController/Index');
						endif;

					endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

			redirect('TentangKamiController/Index');				
		endif;
	}

    public function EditFotoHeader($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Header';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_header','Foto Seputar','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoHeaderView', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoHeader = $this->UploadFotoTentangKami('foto_header'); // parameter nama foto

					if ($FotoHeader == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_header'];
						unlink($path);

						$data = [
							'foto_header'				=> $FotoHeader,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}

	public function EditFotoKaban($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Kaban';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_kaban','Foto Kaban','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoKabanView', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoKaban = $this->UploadFotoTentangKami('foto_kaban'); // parameter nama foto

					if ($FotoKaban == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_kaban'];
						unlink($path);

						$data = [
							'foto_kaban'				=> $FotoKaban,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}

	public function EditFotoSekban($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Sekban';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_sekban','Foto Sekban','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoSekbanView', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoSekban = $this->UploadFotoTentangKami('foto_sekban'); // parameter nama foto

					if ($FotoSekban == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_sekban'];
						unlink($path);

						$data = [
							'foto_sekban'				=> $FotoSekban,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}

	public function EditFotoKabid1($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Kabid1';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_kabid1','Foto Kabid 1','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoKabid1View', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoKabid1 = $this->UploadFotoTentangKami('foto_kabid1'); // parameter nama foto

					if ($FotoKabid1 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid1'];
						unlink($path);

						$data = [
							'foto_kabid1'				=> $FotoKabid1,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}

	public function EditFotoKabid2($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Kabid2';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_kabid2','Foto Kabid 2','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoKabid2View', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoKabid2 = $this->UploadFotoTentangKami('foto_kabid2'); // parameter nama foto

					if ($FotoKabid2 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid2'];
						unlink($path);

						$data = [
							'foto_kabid2'				=> $FotoKabid2,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}

	public function EditFotoKabid3($id)
	{
		$cek_data = $this->db->get_where('tentang_kami',['id' => htmlspecialchars($id)])->row_array();

		if ($cek_data['id'] == $id) :

            $data['EditData'] = $cek_data;
            $data ['title']='Edit Foto Kabid3';
            $data['user']= $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();

				$this->form_validation->set_rules('foto_kabid3','Foto Kabid 3','trim');
				
				if ($this->form_validation->run() == FALSE) :
                    $this->load->view('templates/header', $data);
                    $this->load->view('templates/sidebar', $data);
                    $this->load->view('templates/topbar', $data);
                    $this->load->view('TentangKami/Profil/EditFotoKabid3View', $data);
                    $this->load->view('templates/footer');
				else :

				$FotoKabid3 = $this->UploadFotoTentangKami('foto_kabid3'); // parameter nama foto

					if ($FotoKabid3 == FALSE) :
						$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
							Upload foto gagal, hanya png,jpg dan jpeg yang dapat di upload!
							</div>');

                            redirect('TentangKamiController/Index');	
					else :

						// hapus file
						$path = './uploads/tentangkami/profiltim/'.$cek_data['foto_kabid3'];
						unlink($path);

						$data = [
							'foto_kabid3'				=> $FotoKabid3,
						];

						$resp = $this->db->update('tentang_kami',$data,['id' => $id]);;

						if ($resp) :
							$this->session->set_flashdata('msg','<div class="alert alert-primary" role="alert">
								Foto berhasil Dirubah
								</div>');

							redirect('TentangKamiController/Index');	
						else :
							$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
								Foto gagal dirubah!
								</div>');

							redirect('TentangKamiController/Index');	
						endif;

					endif;

				endif;

		else :
			$this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert">
				data tidak ada
				</div>');

                redirect('TentangKamiController/Index');					
		endif;
	}


}