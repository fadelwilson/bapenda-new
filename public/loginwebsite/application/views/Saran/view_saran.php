<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Kritik & Saran</h6>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-12">
					<div id="accordianId" role="tablist" aria-multiselectable="true">
						<div class="card">
							<div class="card-header" role="tab" id="section1HeaderId">
								<h5 class="mb-0">
									<a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId" class="btn btn-success btn-block">
										Laporan
									</a>
								</h5>
							</div>
							<div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
								<div class="card-body">
									<form action="<?= base_url('SaranController/export_data') ?>" method="POST">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label for="from_date">Dari Tanggal</label>
													<input type="date" name="from_date" id="from_date" class="form-control" required>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label for="to_date">Sampai Tanggal</label>
													<input type="date" name="to_date" id="to_date" class="form-control" required>
												</div>
											</div>
											<div class="col-md-4 mt-4">
												<button type="submit" class="btn btn-success"><i class="fa fa-download" aria-hidden="true"></i> Download</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 table-responsive mt-4">
					<table class="table table-striped table-inverse" id="show_table" width="100%">
						<thead class="thead-inverse">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Handphone</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Kritik</th>
								<th>Saran</th>
								<th>Tgl Dibuat</th>
								<th>Aksi</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var table
	$(document).ready(function() {
		table = $('#show_table').DataTable({
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			// "pagination": true,
			"order": [], //Initial no order.
			// Load data for the table's content from an Ajax source
			"ajax": {
				"url": "<?php echo site_url('api/dtable/kritik-saran') ?>",
				"type": "POST",
			},

			//Set column definition initialisation properties.
			"columnDefs": [{
				"targets": [0], //last column
				"orderable": false, //set not orderable
			}, ],

		});

	});

	function reload_table() {
		table.ajax.reload(); //just reload table
	}

	function ajax_delete(id) {
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
						url: "<?php echo site_url('api/delete/kritik-saran') ?>/" + id,
						type: "POST",
						dataType: "JSON",
						success: function(data) {

							if (data.meta.code == 200) //if success close modal and reload ajax table
							{
								reload_table()

								Swal.fire({
									position: 'center',
									icon: 'success',
									title: data.meta.message,
									showConfirmButton: true,
									timer: 2500
								});

							} else {

								Swal.fire({
									position: 'center',
									icon: 'error',
									title: data.meta.message,
									showConfirmButton: true,
									timer: 2500
								});

							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
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
</script>