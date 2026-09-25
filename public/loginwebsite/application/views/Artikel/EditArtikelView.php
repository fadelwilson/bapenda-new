<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Artikel</h6>
            <a href="<?= base_url('ArtikelController/Index'); ?>" class="btn btn-sm btn-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>
        <div class="card-body">
            <?= form_open('ArtikelController/Edit/' . $EditData['id']); ?>

                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label font-weight-bold">Judul Artikel <span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title', $EditData['title']); ?>" required>
                    </div>             
                </div>

                <div class="row mb-3">
                    <label for="content" class="col-sm-2 col-form-label font-weight-bold">Konten Artikel <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" required><?= set_value('content', $EditData['content']); ?></textarea>
                    </div>             
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-sm-2 col-form-label font-weight-bold">URL Artikel <span class="text-muted font-weight-normal">(Opsional)</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="url" name="url" value="<?= set_value('url', $EditData['url']); ?>" placeholder="https://contoh.com/artikel-lengkap">
                        <small class="form-text text-muted">Kosongkan jika artikel tidak memiliki tautan eksternal.</small>
                    </div>             
                </div>

                <div class="modal-footer justify-content-start pl-0">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Simpan Perubahan</button>
                    <a href="<?= base_url('ArtikelController/Index'); ?>" class="btn btn-secondary">Batal</a>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
