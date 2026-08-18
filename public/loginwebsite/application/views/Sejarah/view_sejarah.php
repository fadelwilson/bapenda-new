<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-md-6">
                     <h6 class="m-0 font-weight-bold text-primary">Media</h6>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-sm float-right" type="button" id="btn_add">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Tambah Data
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <table class="table table-striped table-inverse" id="show_table" width="100%">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Sumber Video</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modal_title"></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<form id="form_input">
				<div class="modal-body">
					<div class="row">
						<input type="hidden" name="id_sejarah" id="id_sejarah">
						<div class="col-md-12">
							<div class="form-group">
								<label for="judul" class="text-dark">Judul</label>
								<input type="text" name="judul" id="judul" class="form-control" required>
							</div>
						</div>
                        <div class="col-md-12">
							<div class="form-group">
								<label for="deskripsi" class="text-dark">Deskripsi</label>
								<textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
							</div>
						</div>
                        <div class="col-md-12">
							<div class="form-group">
								<label for="link" class="text-dark">Sumber Video</label>
								<textarea name="link" id="link" cols="30" rows="10" class="form-control" required></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" id="btn_save">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
var table
$(document).ready(function(){
	table = $('#show_table').DataTable({ 
		"processing": true, //Feature control the processing indicator.
		"serverSide": true, //Feature control DataTables' server-side processing mode.
		// "pagination": true,
		"order": [], //Initial no order.
		// Load data for the table's content from an Ajax source
		"ajax": {
			"url": "<?php echo site_url('api/dtable/sejarah')?>",
			"type": "POST",						
		},

		//Set column definition initialisation properties.
		"columnDefs": [
			{ 
				"targets": [0], //last column
				"orderable": false, //set not orderable
			},
		],

	});

});

    $('#btn_add').click(function(){
        save_method = 'add';
        $('#form_input')[0].reset(); // reset form on modals

        $('#modalform').modal('show');
        $('#modal_title').text('Tambah Data');
    });

    function reload_table()
    {
        table.ajax.reload();  //just reload table
    }

   function ajax_edit(id)
	{
		save_method = 'update';
		$('#form_input')[0].reset(); // reset form on modals

		$.ajax({
			url : "<?php echo site_url('api/edit/sejarah/')?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function(response)
			{
                $('#id_sejarah').val(response.data.id_sejarah);
				$('#judul').val(response.data.judul);
				$('#deskripsi').val(response.data.deskripsi);
                $('#link').val(response.data.link);

				$('#modalform').modal('show');
				$('#modal_title').text('Edit Data');
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('terjadi kesalahan, silahkan coba lagi')
				// alert('Error get data from ajax');
			}
		});
	}

	function ajax_delete(id)
    {
        Swal.fire({
          title: "Yakin Data Akan Dihapus?",
          text: "Jika data ini dihapus, maka tidak akan bisa dikembalikan lagi !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {

            $.ajax({
                url : "<?php echo site_url('api/delete/sejarah')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {

					if(data.meta.code == 200) //if success close modal and reload ajax table
					{
						reload_table()
						
						Swal.fire({
							position: 'center',
							icon: 'success',
							title: data.meta.message,
							showConfirmButton: true,
							timer: 2500
						});
						
					}else{

						Swal.fire({
							position: 'center',
							icon: 'error',
							title: data.meta.message,
							showConfirmButton: true,
							timer: 2500
						});

					}
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    swal({
                          title: jqXHR.pesan,
                          icon: "failed",
                        });
                }
            });

            
          } else {
            swal("Data ini batal dihapus!");
          }
        });
    }

    $('#form_input').submit(function (e) {
        e.preventDefault();
        var formData1 = new FormData($('#form_input')[0]);
        var url;
     
        if(save_method == 'add') {
            url = "<?php echo site_url('api/store/sejarah')?>";
        } else {
            url = "<?php echo site_url('api/update/sejarah')?>";
        }
        $.ajax({
            url: url,
            method: "POST",
            data: formData1,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "JSON",
            beforeSend: function (data) {

                $('#btn_save').text("Proses Kirim ...")
                $('#btn_save').attr('disabled', true); //set button disable 
            },
            success: function (data) {

                if (data.meta.code == 200) //if success close modal and reload ajax table
                {
                    reload_table();
                    Swal.fire({
                        icon: data.meta.status,
                        title: data.meta.status,
                        text: data.meta.message,
                        timer: 2000,
                        timerProgressBar: true,
                    }).then(function(){
                        $('#modalform').modal('hide');
                        $('#btn_save').text("Save")
                        $('#btn_save').attr('disabled', false); //set button disable    

                        $('html, body').animate({
                            scrollTop: 0
                        }, 1000); // Mengatur durasi animasi (800 milidetik dalam contoh ini)
                    
                        $('#form_input')[0].reset(); // Reset form
                        
                    });
                    

                } else {
                    Swal.fire({
                        icon: data.meta.status,
                        title: data.meta.status,
                        text: data.meta.message,
                        timer: 2000,
                        timerProgressBar: true,
                    }).then(function(){
                        $('#btn_save').text("Save")
                        $('#btn_save').attr('disabled', false); //set button disable    
                    });
                }
            },
            error: function (xhr, status, error) {
                alert('terjadi kesalahan, silahkan coba lagi');
            }
        })
    });
</script>