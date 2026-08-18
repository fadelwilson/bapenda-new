<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SejarahController extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('SejarahModel');
    }

    public function index()
    {
        $data ['title']='Media';
        $data['user']= $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Sejarah/view_sejarah', $data);
        $this->load->view('templates/footer');
    }

    function datatables()
	{
		$show = $this->SejarahModel->get_datatables();

		$data = array();
		$no = $_POST['start'] + 1;

		foreach ($show as $field) {
			
			$row = array();
			$row[] = $no++;
			$row[] = $field->judul;
            $row[] = $field->deskripsi;

            if ($field->link != '') {
                $lihat = '<a href="http://localhost/bapenda/sejarah" class="btn btn-success btn-sm" target="_blank">Lihat Pada Halaman</a>';
            }else{
                $lihat = 'tidak tersedia';
            }
            $row[] = $lihat;

			$row[] = '<a href="javascript:void(0)" class="btn btn-warning btn-sm" id="btn_edit" title="Edit" onclick="ajax_edit('."'".$field->id_sejarah."'".')">
                        Edit
                    </a>
                    <a href="javascript:void(0)" class="btn btn-danger btn-sm" id="btn_delete" title="Hapus" onclick="ajax_delete('."'".$field->id_sejarah."'".')">
                        Hapus
                    </a>';

			$data[] = $row;
		}


		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->SejarahModel->count_all(),
			"recordsFiltered" => $this->SejarahModel->count_filtered(),
			"data" => $data,
		);

		//output to json format
		echo json_encode($output);
	}

    function store()
	{
		$data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
            'created_by' => 'username', //$this->session->userdata('username'),
            'created_at' => date('Y-m-d H:i:s'),
        );

        $ins = $this->db->insert('sejarah',$data);
    
        if ($ins) {
            $code = 200;
            $status = "Success";
            $message = "Berhasil tambah data";
            $record_data =  $data;

        }else{
            $code = 422;
            $status = "Error";
            $message = "Gagal tambah data";
            $record_data =  $data;

        }

		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

        echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);


	}

    function update()
	{
		$data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
            'created_by' => 'username', //$this->session->userdata('username'),
            'updated_at' => date('Y-m-d H:i:s'),
        );

		$update = $this->db->where('id_sejarah', $this->input->post('id_sejarah'))
						->update('sejarah',$data);
		// echo "<pre>";
		// echo $this->db->last_query();die;
		if ($update) {
			$code = 200;
			$status = "Success";
			$message = "Data berhasil diedit";
			$record_data =  $data;

		}else{
			$code = 422;
			$status = "Error";
			$message = "Data gagal diedit";
			$record_data =  $data;

		}

		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

        echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);
	}

    function destroy($id)
	{
		$data = $this->SejarahModel->get_by_id($id);

		if (!empty($data)) {

			$del = $this->SejarahModel->delete_by_id($id);

			if($del){
				$code = 200;
				$status = "Success";
				$message = "Data berhasil dihapus";
				$record_data =  $data;
			}else{
				
				$code = 422;
				$status = "Error";
				$message = "Data gagal dihapus";
				$record_data =  $data;
			}
			
		}else{
			
			$code = 422;
			$status = "Error";
			$message = "Data tidak ditemukan";
			$record_data =  NULL;
						
		}
		
		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

		echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);
	}

    function edit($id)
	{
		$data = $this->SejarahModel->get_by_id($id);

		if (!empty($data)) {

			$code = 200;
			$status = "Success";
			$message = "Data ditemukan";
			$record_data =  $data;
		}else{
			
			$code = 422;
			$status = "Error";
			$message = "Data tidak ditemukan";
			$record_data =  NULL;
						
		}
		
		$meta = array(
			'code' => $code,
			'status' => $status,
			'message' => $message,
		);

		echo json_encode(array('meta' => $meta, 'data' => $record_data), JSON_PRETTY_PRINT);

	}
}