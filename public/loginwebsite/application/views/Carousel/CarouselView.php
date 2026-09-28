<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
    <?= $this->session->flashdata('msg'); ?>

    <!-- Form Upload Media Carousel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between bg-primary text-white">
            <h6 class="m-0 font-weight-bold">
                <i class="fas fa-plus-circle mr-1"></i> Tambah Media Popup Carousel (Foto / Video)
            </h6>
            <span class="badge badge-warning text-dark font-weight-bold">
                <i class="fas fa-exclamation-triangle"></i> Max Ukuran File: 100 MB
            </span>
        </div>
        <div class="card-body">
            <?= form_open_multipart('CarouselController/Index', ['id' => 'formUploadCarousel']); ?>

            <div class="row">
                <!-- Judul -->
                <div class="col-md-6 mb-3">
                    <label for="judul" class="font-weight-bold">Judul / Label Media <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>" placeholder="Masukkan judul foto atau video..." required>
                </div>

                <!-- File Media -->
                <div class="col-md-6 mb-3">
                    <label for="file_media" class="font-weight-bold">
                        File Foto / Video <span class="text-danger">*</span>
                    </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_media" name="file_media" accept="image/*,video/mp4,video/webm,video/quicktime,video/x-msvideo" required>
                        <label class="custom-file-label" for="file_media" id="label_file_media">Pilih file foto atau video...</label>
                    </div>
                    <small class="form-text text-muted">
                        Format: <strong>JPG, JPEG, PNG, WEBP, GIF, MP4, WEBM, MOV, AVI</strong> (Max <strong>100 MB</strong>).
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

            <!-- Upload Loading Indicator -->
            <div id="upload_progress_container" class="my-3 d-none">
                <div class="alert alert-info py-2 mb-0">
                    <i class="fas fa-spinner fa-spin mr-1"></i> Sedang mengunggah file, mohon tunggu...
                </div>
            </div>

            <div class="text-right border-top pt-3">
                <button type="reset" class="btn btn-secondary mr-2">
                    <i class="fas fa-undo"></i> Reset
                </button>
                <button type="submit" class="btn btn-primary" id="btnSubmit">
                    <i class="fas fa-upload mr-1"></i> Simpan & Unggah
                </button>
            </div>

            <?= form_close(); ?>
        </div>
    </div>

    <!-- Tabel Daftar Media Popup Carousel -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-images mr-1"></i> Data Media Popup Carousel Beranda
            </h6>
            <span class="badge badge-secondary">
                Total: <?= count($DataTampil); ?> Media
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th width="5%">#</th>
                            <th width="15%">Preview</th>
                            <th>Judul / Label</th>
                            <th width="10%">Tipe</th>
                            <th width="12%">Tgl Dibuat</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($DataTampil)) : ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    <i class="fas fa-info-circle fa-2x mb-2 text-gray-400 d-block"></i>
                                    Belum ada media yang diunggah.
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php $no = 1; foreach ($DataTampil as $dt) : ?>
                                <tr>
                                    <td class="text-center align-middle font-weight-bold"><?= $no++; ?></td>
                                    <td class="text-center align-middle">
                                        <?php 
                                        $file_url = base_url('uploads/carousel/' . $dt['file_media']);
                                        if ($dt['tipe'] === 'video') :
                                        ?>
                                            <!-- Blank item untuk video dengan ikon play -->
                                            <div class="d-inline-flex flex-column align-items-center justify-content-center rounded shadow-sm" style="width: 100px; height: 60px; background: #121624; border: 1px solid #2d3748;">
                                                <i class="fas fa-play-circle fa-2x text-warning"></i>
                                                <span class="text-white-50" style="font-size: 9px; font-weight: 600; letter-spacing: 0.5px;">VIDEO</span>
                                            </div>
                                        <?php else : ?>
                                            <img src="<?= $file_url; ?>" alt="<?= htmlspecialchars($dt['judul']); ?>" class="img-thumbnail rounded" style="width: 100px; height: 60px; object-fit: cover;">
                                        <?php endif; ?>
                                    </td>
                                    <td class="align-middle font-weight-bold text-gray-800">
                                        <?= htmlspecialchars($dt['judul']); ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php if ($dt['tipe'] === 'video') : ?>
                                            <span class="badge badge-danger px-2 py-1"><i class="fas fa-video mr-1"></i> Video</span>
                                        <?php else : ?>
                                            <span class="badge badge-success px-2 py-1"><i class="fas fa-image mr-1"></i> Foto</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle small text-muted">
                                        <?= !empty($dt['created_at']) ? date('d M Y', strtotime($dt['created_at'])) : '-'; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <!-- Tombol Preview Modal -->
                                        <button type="button" class="btn btn-info btn-sm mr-1" 
                                                onclick="previewMedia('<?= $dt['tipe']; ?>', '<?= $file_url; ?>', '<?= htmlspecialchars(addslashes($dt['judul'])); ?>')" 
                                                title="Pratinjau">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <!-- Tombol Edit -->
                                        <a href="<?= site_url('CarouselController/Edit/' . $dt['id']); ?>" class="btn btn-warning btn-sm mr-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <!-- Tombol Hapus -->
                                        <a href="<?= site_url('CarouselController/Hapus/' . $dt['id']); ?>" 
                                           class="btn btn-danger btn-sm" 
                                           onclick="return confirm('Apakah Anda yakin ingin menghapus media ini?')" 
                                           title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
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

<!-- Modal Pratinjau Media -->
<div class="modal fade" id="previewMediaModal" tabindex="-1" role="dialog" aria-labelledby="previewMediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-white border-0 shadow-lg">
            <div class="modal-header border-secondary">
                <h5 class="modal-title font-weight-bold" id="previewModalTitle">Pratinjau Media</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" onclick="stopPreviewVideo()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-2" id="previewModalBody" style="background: #000; min-height: 250px;">
            </div>
            <div class="modal-footer border-secondary">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" onclick="stopPreviewVideo()">Tutup</button>
            </div>
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
                labelFileMedia.innerText = 'Pilih file foto atau video...';
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

    const formUpload = document.getElementById('formUploadCarousel');
    if (formUpload) {
        formUpload.addEventListener('submit', function (e) {
            const file = fileMediaInput.files[0];
            if (file && file.size > 100 * 1024 * 1024) {
                e.preventDefault();
                alert('File melebihi batas 100 MB!');
                return false;
            }
            if (btnSubmit) {
                btnSubmit.disabled = true;
                btnSubmit.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Mengunggah...';
            }
            const prog = document.getElementById('upload_progress_container');
            if (prog) prog.classList.remove('d-none');
        });
    }
});

function previewMedia(type, url, title) {
    const modalTitle = document.getElementById('previewModalTitle');
    const modalBody  = document.getElementById('previewModalBody');
    if (modalTitle) modalTitle.innerText = title;

    if (type === 'video') {
        modalBody.innerHTML = `
            <video id="previewVideoEl" controls autoplay playsinline class="w-100" style="max-height: 500px; border-radius: 8px;">
                <source src="${url}">
                Browser Anda tidak mendukung tag video.
            </video>
        `;
    } else {
        modalBody.innerHTML = `
            <img src="${url}" alt="${title}" class="img-fluid rounded" style="max-height: 500px; object-fit: contain;">
        `;
    }

    $('#previewMediaModal').modal('show');
}

function stopPreviewVideo() {
    const vid = document.getElementById('previewVideoEl');
    if (vid) {
        vid.pause();
        vid.currentTime = 0;
    }
}

$('#previewMediaModal').on('hidden.bs.modal', function () {
    stopPreviewVideo();
    document.getElementById('previewModalBody').innerHTML = '';
});
</script>
