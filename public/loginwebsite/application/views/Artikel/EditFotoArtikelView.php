<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Ganti Thumbnail: <?= htmlspecialchars($EditData['title']); ?></h6>
            <a href="<?= base_url('ArtikelController/Index'); ?>" class="btn btn-sm btn-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <?= form_open_multipart('ArtikelController/EditFotoArtikel/' . $EditData['id']); ?> 

                <?php if (!empty($EditData['gambar'])): ?>
                    <div class="row mb-4">
                        <label class="col-sm-2 col-form-label font-weight-bold">Thumbnail Saat Ini</label>
                        <div class="col-sm-6">
                            <img src="<?= base_url('uploads/artikel/' . $EditData['gambar']); ?>" alt="<?= htmlspecialchars($EditData['title']); ?>" class="img-thumbnail rounded shadow-sm" style="max-height: 220px;">
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label font-weight-bold">Pilih Thumbnail Baru <span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
                        <small class="form-text text-muted">Format yang didukung: jpg, jpeg, png, webp, gif.</small>
                    </div>             
                </div>

                <div class="modal-footer justify-content-start pl-0">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload mr-1"></i> Upload Thumbnail Baru</button>
                    <a href="<?= base_url('ArtikelController/Index'); ?>" class="btn btn-secondary">Batal</a>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
