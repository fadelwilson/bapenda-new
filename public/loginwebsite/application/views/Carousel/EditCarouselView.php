<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <a href="<?= site_url('CarouselController/Index'); ?>" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50 mr-1"></i> Kembali ke Daftar Carousel
        </a>
    </div>

    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
    <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-warning text-dark font-weight-bold d-flex align-items-center justify-content-between">
            <span><i class="fas fa-edit mr-1"></i> Form Edit Media: <?= htmlspecialchars($media['judul']); ?></span>
            <span class="badge badge-dark">
                Tipe: <?= strtoupper($media['tipe']); ?>
            </span>
        </div>
        <div class="card-body">
            <?= form_open_multipart('CarouselController/Edit/' . $media['id'], ['id' => 'formEditCarousel']); ?>

            <div class="row">
                <!-- Kolom Kiri: Input Fields -->
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="judul" class="font-weight-bold">Judul / Label Media <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul', $media['judul']); ?>" required>
                    </div>

                    <div class="form-group mt-3">
                        <label for="file_media" class="font-weight-bold">
                            Ganti File Media (Foto / Video)
                            <span class="text-muted small font-weight-normal">(Kosongkan jika tidak ingin mengganti file)</span>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_media" name="file_media" accept="image/*,video/mp4,video/webm,video/quicktime,video/x-msvideo">
                            <label class="custom-file-label" for="file_media" id="label_file_media">Pilih file baru...</label>
                        </div>
                        <small class="form-text text-muted">
                            Format didukung: JPG, PNG, WEBP, MP4, WEBM, MOV (Maksimal 100 MB).
                            <span class="badge badge-success ml-1"><i class="fas fa-magic mr-1"></i> Gambar otomatis dikonversi ke WebP</span>
                        </small>
                        <div id="file_size_warning" class="mt-2 text-danger small font-weight-bold d-none">
                            <i class="fas fa-exclamation-circle"></i> File terlalu besar! Maksimal ukuran file adalah 100 MB.
                        </div>
                        <div id="file_info_badge" class="mt-2 d-none">
                            <span class="badge badge-info" id="file_info_text"></span>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Pratinjau File Saat Ini -->
                <div class="col-md-5">
                    <label class="font-weight-bold">Pratinjau File Saat Ini:</label>
                    <div class="p-3 bg-dark rounded text-center">
                        <?php 
                        $current_file = base_url('uploads/carousel/' . $media['file_media']);
                        if ($media['tipe'] === 'video') :
                        ?>
                            <video controls class="w-100 rounded" style="max-height: 250px; background: #000;">
                                <source src="<?= $current_file; ?>">
                                Browser Anda tidak mendukung video.
                            </video>
                        <?php else : ?>
                            <img src="<?= $current_file; ?>" alt="<?= htmlspecialchars($media['judul']); ?>" class="img-fluid rounded" style="max-height: 250px; object-fit: contain;">
                        <?php endif; ?>

                        <div class="mt-2 small text-light text-monospace">
                            <?= htmlspecialchars($media['file_media']); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right border-top pt-3 mt-4">
                <a href="<?= site_url('CarouselController/Index'); ?>" class="btn btn-secondary mr-2">Batal</a>
                <button type="submit" class="btn btn-primary" id="btnSubmit">
                    <i class="fas fa-save mr-1"></i> Simpan Perubahan
                </button>
            </div>

            <?= form_close(); ?>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const fileMediaInput = document.getElementById('file_media');
    const labelFileMedia = document.getElementById('label_file_media');
    const warningEl = document.getElementById('file_size_warning');
    const badgeEl = document.getElementById('file_info_badge');
    const badgeText = document.getElementById('file_info_text');
    const btnSubmit = document.getElementById('btnSubmit');

    if (fileMediaInput) {
        fileMediaInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) {
                labelFileMedia.innerText = 'Pilih file baru...';
                warningEl.classList.add('d-none');
                badgeEl.classList.add('d-none');
                btnSubmit.disabled = false;
                return;
            }

            labelFileMedia.innerText = file.name;
            const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
            badgeText.innerHTML = '<i class="fas fa-file"></i> ' + file.name + ' (' + fileSizeMB + ' MB)';
            badgeEl.classList.remove('d-none');

            if (file.size > 100 * 1024 * 1024) {
                warningEl.classList.remove('d-none');
                btnSubmit.disabled = true;
                alert('Peringatan: Ukuran file yang Anda pilih adalah ' + fileSizeMB + ' MB, melebihi batas maksimal 100 MB!');
            } else {
                warningEl.classList.add('d-none');
                btnSubmit.disabled = false;
            }
        });
    }
});
</script>
