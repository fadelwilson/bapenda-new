<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= site_url('PublikasiController/Index?kategori=' . $item['kategori_id']); ?>" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50 mr-1"></i> Kembali ke Daftar Dokumen
        </a>
    </div>

    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
    <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-info text-white font-weight-bold d-flex align-items-center justify-content-between">
            <span><i class="fas fa-edit mr-1"></i> Edit Dokumen: <?= htmlspecialchars($item['judul']); ?></span>
            <span class="badge badge-light text-dark">
                Kategori: <?= htmlspecialchars($item['nama_kategori'] ?? '-'); ?>
            </span>
        </div>
        <div class="card-body">
            <?= form_open_multipart('PublikasiController/Edit/' . $item['id']); ?>

            <div class="row">
                <!-- Kolom Kiri: Input Fields -->
                <div class="col-md-7">
                    <!-- Kategori -->
                    <div class="form-group">
                        <label for="kategori_id" class="font-weight-bold">Kategori Dokumen <span class="text-danger">*</span></label>
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach ($kategori_list as $kat) : ?>
                                <option value="<?= $kat['id']; ?>" <?= ($item['kategori_id'] == $kat['id']) ? 'selected' : ''; ?>>
                                    <?= htmlspecialchars($kat['nama_kategori']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- Judul Dokumen -->
                    <div class="form-group mt-3">
                        <label for="judul" class="font-weight-bold">Judul / Nama Dokumen <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul', $item['judul']); ?>" required>
                    </div>

                    <!-- Urutan -->
                    <div class="form-group mt-3">
                        <label for="urutan" class="font-weight-bold">Nomor Urutan</label>
                        <input type="number" class="form-control" id="urutan" name="urutan" value="<?= set_value('urutan', $item['urutan']); ?>">
                        <small class="form-text text-muted">Angka lebih kecil tampil lebih dulu dalam accordion.</small>
                    </div>

                    <!-- Ganti File PDF -->
                    <div class="form-group mt-3">
                        <label for="file_pdf" class="font-weight-bold">
                            Ganti Berkas PDF
                            <span class="text-muted small font-weight-normal">(Biarkan kosong jika tidak ingin mengganti file PDF yang sudah ada)</span>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_pdf" name="file_pdf" accept="application/pdf" onchange="updateEditFileName(this)">
                            <label class="custom-file-label" for="file_pdf" id="label_edit_file_pdf">Pilih berkas PDF baru...</label>
                        </div>
                        <small class="form-text text-muted">Format hanya <strong>.PDF</strong> (Maksimal 50 MB).</small>
                    </div>

                    <div class="mt-4 pt-3 border-top d-flex justify-content-between">
                        <a href="<?= site_url('PublikasiController/Index?kategori=' . $item['kategori_id']); ?>" class="btn btn-secondary">
                            <i class="fas fa-times mr-1"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-info font-weight-bold">
                            <i class="fas fa-save mr-1"></i> Simpan Perubahan
                        </button>
                    </div>
                </div>

                <!-- Kolom Kanan: Pratinjau Dokumen Saat Ini -->
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="card bg-light border">
                        <div class="card-header py-2 font-weight-bold text-dark">
                            <i class="fas fa-file-pdf mr-1 text-danger"></i> Berkas PDF Saat Ini
                        </div>
                        <div class="card-body">
                            <?php
                            $is_custom_upload = (strpos($item['file_pdf'], '/') === false);
                            $file_url = $is_custom_upload
                                ? base_url('uploads/publikasi/' . $item['file_pdf'])
                                : base_url($item['file_pdf']);
                            ?>
                            <div class="mb-3">
                                <span class="text-muted d-block small font-weight-bold">Nama Berkas:</span>
                                <code class="text-break"><?= htmlspecialchars(basename($item['file_pdf'])); ?></code>
                            </div>

                            <div class="mb-3">
                                <a href="<?= $file_url; ?>" target="_blank" class="btn btn-block btn-outline-danger">
                                    <i class="fas fa-external-link-alt mr-1"></i> Buka / Lihat PDF di Tab Baru
                                </a>
                            </div>

                            <div style="height: 380px;" class="border rounded bg-white overflow-hidden">
                                <iframe src="<?= $file_url; ?>" class="w-100 h-100 border-0" title="Preview PDF"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?= form_close(); ?>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script>
function updateEditFileName(input) {
    var fileName = input.files[0] ? input.files[0].name : 'Pilih berkas PDF baru...';
    document.getElementById('label_edit_file_pdf').textContent = fileName;
}
</script>
