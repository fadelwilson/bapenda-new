<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Artikel Baru</h6>
        </div>
        <div class="card-body">
            <?= form_open_multipart('ArtikelController/Index'); ?>

                <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar Thumbnail</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*">
                        <small class="form-text text-muted">Format yang didukung: jpg, jpeg, png, webp, gif.</small>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Judul Artikel <span class="text-danger">*</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="title" name="title" value="<?= set_value('title'); ?>" placeholder="Masukkan judul artikel..." required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="content" class="col-sm-2 col-form-label">Konten Artikel <span class="text-danger">*</span></label>
                    <div class="col-sm-8">
                        <textarea name="content" id="content" cols="30" rows="8" class="form-control" placeholder="Tulis isi/konten artikel di sini..." required><?= set_value('content'); ?></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="url" class="col-sm-2 col-form-label">URL Artikel <span class="text-muted">(Opsional)</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="url" name="url" value="<?= set_value('url'); ?>" placeholder="https://contoh.com/artikel-lengkap">
                        <small class="form-text text-muted">Kosongkan jika artikel tidak memiliki tautan eksternal.</small>
                    </div>
                </div>

                <div class="modal-footer justify-content-start pl-0">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i> Simpan Artikel</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-undo mr-1"></i> Reset</button>
                </div>
            <?= form_close(); ?>
        </div>
    </div>

    <!-- Data Table Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>
            <span class="badge badge-primary px-3 py-2"><?= count($DataTampil); ?> Artikel Tersedia</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th style="width: 15%;">Thumbnail</th>
                            <th style="width: 25%;">Judul Artikel</th>
                            <th style="width: 30%;">Konten Artikel</th>
                            <th style="width: 12%;">URL (Opsional)</th>
                            <th style="width: 13%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($DataTampil)): ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">Belum ada artikel yang diunggah.</td>
                            </tr>
                        <?php else: ?>
                            <?php $no = 1; foreach ($DataTampil as $dt) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td class="text-center">
                                        <?php if (!empty($dt['gambar'])): ?>
                                            <img width="110" class="img-thumbnail rounded mb-2 shadow-sm d-block mx-auto" src="<?= base_url('uploads/artikel/' . $dt['gambar']); ?>" alt="<?= htmlspecialchars($dt['title']); ?>">
                                        <?php else: ?>
                                            <span class="badge badge-light border p-2 d-block mb-2 text-muted">Tanpa Gambar</span>
                                        <?php endif; ?>
                                        <a href="<?= base_url('ArtikelController/EditFotoArtikel/' . $dt['id']); ?>" class="btn btn-sm btn-outline-info btn-block">
                                            <i class="fas fa-image mr-1"></i> Ganti Foto
                                        </a>
                                    </td>
                                    <td>
                                        <div class="font-weight-bold text-dark mb-1"><?= htmlspecialchars($dt['title']); ?></div>
                                        <small class="text-muted"><i class="far fa-calendar-alt mr-1"></i> <?= !empty($dt['created_at']) ? date('d M Y H:i', strtotime($dt['created_at'])) : '-'; ?></small>
                                    </td>
                                    <td>
                                        <div class="text-secondary" style="font-size: 0.9rem; max-height: 120px; overflow-y: auto;">
                                            <?= nl2br(htmlspecialchars(mb_substr($dt['content'], 0, 200))); ?><?= mb_strlen($dt['content']) > 200 ? '...' : ''; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <?php if (!empty($dt['url'])): ?>
                                            <a href="<?= htmlspecialchars($dt['url']); ?>" target="_blank" class="btn btn-sm btn-outline-primary text-truncate d-inline-block" style="max-width: 140px;" title="<?= htmlspecialchars($dt['url']); ?>">
                                                <i class="fas fa-external-link-alt mr-1"></i> Kunjungi
                                            </a>
                                        <?php else: ?>
                                            <span class="badge badge-secondary p-1">Tidak ada</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group-vertical btn-block">
                                            <a href="<?= base_url('ArtikelController/Edit/' . $dt['id']); ?>" class="btn btn-sm btn-info mb-1">
                                                <i class="fas fa-edit mr-1"></i> Edit
                                            </a>
                                            <a href="<?= base_url('ArtikelController/Hapus/' . $dt['id']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?');" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash mr-1"></i> Hapus
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
