<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
	<?= $this->session->flashdata('msg'); ?>

	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Formulir</h6>
		</div>
		<div class="card-body">
			<?= form_open_multipart('FormulirController'); ?>

			<div class="row mb-3">
				<label for="colFormLabel" class="col-sm-2 col-form-label">File </label>
				<div class="col-sm-4">
					<input type="file" class="form-control" id="file_uu" accept=".pdf" name="file_uu">
				</div>
				<label for="colFormLabel" class="col-sm-2 col-form-label">Keterangan</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="ket" name="ket">
				</div>
			</div>


			<div class="modal-footer">
				<input type="reset" value="Reset" class="btn btn-secondary"></input>
				<button type="submit" class="btn btn-primary">Simpan</button>
				<?php form_close(); ?>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Page Heading -->
<h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload Formulir</h1>

<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Keterangan</th>
				<th scope="col">File</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; ?>
			<?php foreach ($DataTampil as $dt) : ?>
				<tr>
					<th scope="row"><?= $no++; ?></th>
					<td>
						<a href="<?= base_url('uploads/tentangkami/formulir/' . $dt['file_uu']); ?>" target="_blank" class="btn btn-success">
							Lihat File
						</a>

						<a href="<?= base_url('FormulirController/EditFileUU/' . $dt['id']) ?>" class="btn btn-info">Edit</a>
					</td>
					<td> <?= $dt['ket']; ?> </td>
					<td>
						<a href="<?= base_url('FormulirController/Hapus/' . $dt['id']) ?>" class="btn btn-warning">Hapus</a>
						<a href="<?= base_url('FormulirController/Edit/' . $dt['id']) ?>" class="btn btn-info">Edit</a>
					</td>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>