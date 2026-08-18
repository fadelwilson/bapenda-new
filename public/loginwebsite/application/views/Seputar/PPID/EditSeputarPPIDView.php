<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
	<?= $this->session->flashdata('msg'); ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Edit Seputar PPID</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('SeputarController/EditPPID/' . $EditData['id']); ?>

			<div class="row mb-3">
				<label for="colFormLabel" class="col-sm-2 col-form-label"> Judul Seputar PPID</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="judul_ppid" name="judul_ppid" value="<?= $EditData['judul_ppid'] ?>">
				</div>
			</div>

			<div class="row mb-3">
				<label for="colFormLabel" class="col-sm-2 col-form-label"> Narasi Seputar PPID</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="narasi_ppid" name="narasi_ppid" value="<?= $EditData['narasi_ppid'] ?>">
				</div>
			</div>

			<div class="modal-footer">
				<input type="reset" value="Reset" class="btn btn-secondary"></input>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<?= form_close(); ?>

			</div>
		</div>
	</div>
</div>
</div>