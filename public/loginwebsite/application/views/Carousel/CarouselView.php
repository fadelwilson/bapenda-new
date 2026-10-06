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
                <i class="fas fa-plus-circle mr-1"></i> Tambah Media Popup Carousel
            </h6>
            <div class="d-flex align-items-center gap-2">
                <span class="badge badge-success font-weight-bold mr-1">
                    <i class="fas fa-image mr-1"></i> Foto: File Upload (Max 15 MB)
                </span>
                <span class="badge badge-danger font-weight-bold">
                    <i class="fab fa-youtube mr-1"></i> Video: Link YouTube
                </span>
            </div>
        </div>
        <div class="card-body">
            <?= form_open_multipart('CarouselController/Index', ['id' => 'formUploadCarousel']); ?>

            <div class="row">
                <!-- Judul -->
                <div class="col-md-12 mb-3">
                    <label for="judul" class="font-weight-bold">Judul / Label Media <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>" placeholder="Masukkan judul foto atau video..." required>
                </div>

                <!-- Tipe Media Selector -->
                <div class="col-md-12 mb-3">
                    <label class="font-weight-bold d-block">Pilih Jenis Media <span class="text-danger">*</span></label>
                    <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                        <label class="btn btn-outline-primary active py-2 font-weight-bold" id="label_tipe_image">
                            <input type="radio" name="tipe" id="tipe_image" value="image" autocomplete="off" checked>
                            <i class="fas fa-image mr-1"></i> Foto / Gambar (Upload File)
                        </label>
                        <label class="btn btn-outline-danger py-2 font-weight-bold" id="label_tipe_video">
                            <input type="radio" name="tipe" id="tipe_video" value="video" autocomplete="off">
                            <i class="fab fa-youtube mr-1"></i> Video YouTube (Link URL)
                        </label>
                    </div>
                </div>

                <!-- Input Foto (Upload File) -->
                <div class="col-md-12 mb-3" id="group_foto">
                    <label for="file_media" class="font-weight-bold">
                        File Foto / Gambar <span class="text-danger">*</span>
                    </label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_media" name="file_media" accept="image/jpeg,image/png,image/webp,image/gif" required>
                        <label class="custom-file-label" for="file_media" id="label_file_media">Pilih file foto...</label>
                    </div>
                    <small class="form-text text-muted">
                        Format didukung: <strong>JPG, JPEG, PNG, WEBP, GIF</strong> (Maksimal <strong>15 MB</strong>).
                        <span class="badge badge-success ml-1"><i class="fas fa-magic mr-1"></i> Gambar otomatis dikonversi ke WebP</span>
                    </small>
                    <div id="file_size_warning" class="mt-2 text-danger small font-weight-bold d-none">
                        <i class="fas fa-exclamation-circle"></i> File terlalu besar! Maksimal ukuran file adalah 15 MB.
                    </div>
                    <div id="file_info_badge" class="mt-2 d-none">
                        <span class="badge badge-info" id="file_info_text"></span>
                    </div>
                </div>

                <!-- Input Video YouTube (Link URL) -->
                <div class="col-md-12 mb-3 d-none" id="group_video">
                    <label for="link_youtube" class="font-weight-bold">
                        Link URL Video YouTube <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white"><i class="fab fa-youtube"></i></span>
                        </div>
                        <input type="text" class="form-control" id="link_youtube" name="link_youtube" value="<?= set_value('link_youtube'); ?>" placeholder="Tempel URL YouTube di sini (contoh: https://www.youtube.com/watch?v=... atau https://youtu.be/...)">
                    </div>
                    <small class="form-text text-muted">
                        Mendukung semua format link YouTube (video reguler, YouTube Shorts, atau tautan pendek youtu.be).
                    </small>

                    <!-- Preview Thumbnail YouTube Interaktif -->
                    <div id="yt_live_preview" class="mt-3 p-3 bg-light rounded border d-none">
                        <div class="d-flex align-items-center">
                            <img id="yt_preview_thumb" src="" alt="Thumbnail YouTube" class="rounded shadow-sm mr-3" style="width: 120px; height: 68px; object-fit: cover;">
                            <div>
                                <span class="badge badge-danger font-weight-bold mb-1"><i class="fab fa-youtube mr-1"></i> Video YouTube Terdeteksi</span>
                                <div class="small text-muted font-monospace" id="yt_preview_id"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upload Loading Indicator -->
            <div id="upload_progress_container" class="my-3 d-none">
                <div class="alert alert-info py-2 mb-0">
                    <i class="fas fa-spinner fa-spin mr-1"></i> Sedang memproses media, mohon tunggu...
                </div>
            </div>

            <div class="text-right border-top pt-3">
                <button type="reset" class="btn btn-secondary mr-2" id="btnReset">
                    <i class="fas fa-undo mr-1"></i> Reset
                </button>
                <button type="submit" class="btn btn-primary" id="btnSubmit">
                    <i class="fas fa-save mr-1"></i> Simpan Media
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
                            <th width="12%">Tipe</th>
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
                                        if ($dt['tipe'] === 'video') :
                                            $yt_id = $this->CarouselModel->ExtractYoutubeId($dt['file_media']);
                                            $yt_thumb = !empty($yt_id) ? "https://img.youtube.com/vi/{$yt_id}/mqdefault.jpg" : '';
                                        ?>
                                            <div class="position-relative d-inline-block rounded overflow-hidden shadow-sm" style="width: 100px; height: 60px; background: #111;">
                                                <?php if (!empty($yt_thumb)): ?>
                                                    <img src="<?= $yt_thumb; ?>" alt="Thumbnail" style="width: 100%; height: 100%; object-fit: cover; opacity: 0.85;">
                                                <?php endif; ?>
                                                <div class="position-absolute d-flex align-items-center justify-content-center" style="inset: 0; background: rgba(0,0,0,0.3);">
                                                    <i class="fab fa-youtube text-danger" style="font-size: 26px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.8));"></i>
                                                </div>
                                            </div>
                                        <?php else : 
                                            $file_url = base_url('uploads/carousel/' . $dt['file_media']);
                                        ?>
                                            <img src="<?= $file_url; ?>" alt="<?= htmlspecialchars($dt['judul']); ?>" class="img-thumbnail rounded" style="width: 100px; height: 60px; object-fit: cover;">
                                        <?php endif; ?>
                                    </td>
                                    <td class="align-middle font-weight-bold text-gray-800">
                                        <?= htmlspecialchars($dt['judul']); ?>
                                        <?php if ($dt['tipe'] === 'video') : ?>
                                            <div class="small mt-1">
                                                <a href="<?= htmlspecialchars($dt['file_media']); ?>" target="_blank" rel="noopener noreferrer" class="text-danger font-weight-normal">
                                                    <i class="fab fa-youtube mr-1"></i> Buka Video di YouTube <i class="fas fa-external-link-alt fa-xs"></i>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php if ($dt['tipe'] === 'video') : ?>
                                            <span class="badge badge-danger px-2 py-1"><i class="fab fa-youtube mr-1"></i> Video</span>
                                        <?php else : ?>
                                            <span class="badge badge-success px-2 py-1"><i class="fas fa-image mr-1"></i> Foto</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle small text-muted">
                                        <?= !empty($dt['created_at']) ? date('d M Y', strtotime($dt['created_at'])) : '-'; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <!-- Tombol Preview Modal -->
                                        <?php 
                                        $preview_target = ($dt['tipe'] === 'video') ? $yt_id : $file_url;
                                        ?>
                                        <button type="button" class="btn btn-info btn-sm mr-1" 
                                                onclick="previewMedia('<?= $dt['tipe']; ?>', '<?= $preview_target; ?>', '<?= htmlspecialchars(addslashes($dt['judul'])); ?>')" 
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
    const tipeImageRadio = document.getElementById('tipe_image');
    const tipeVideoRadio = document.getElementById('tipe_video');
    const groupFoto = document.getElementById('group_foto');
    const groupVideo = document.getElementById('group_video');
    const fileMediaInput = document.getElementById('file_media');
    const linkYoutubeInput = document.getElementById('link_youtube');
    const labelFileMedia = document.getElementById('label_file_media');
    const warningEl = document.getElementById('file_size_warning');
    const badgeEl = document.getElementById('file_info_badge');
    const badgeText = document.getElementById('file_info_text');
    const btnSubmit = document.getElementById('btnSubmit');
    const ytLivePreview = document.getElementById('yt_live_preview');
    const ytPreviewThumb = document.getElementById('yt_preview_thumb');
    const ytPreviewId = document.getElementById('yt_preview_id');

    function toggleMediaType() {
        if (tipeVideoRadio && tipeVideoRadio.checked) {
            groupFoto.classList.add('d-none');
            groupVideo.classList.remove('d-none');
            fileMediaInput.required = false;
            linkYoutubeInput.required = true;
            warningEl.classList.add('d-none');
            btnSubmit.disabled = false;
        } else {
            groupFoto.classList.remove('d-none');
            groupVideo.classList.add('d-none');
            fileMediaInput.required = true;
            linkYoutubeInput.required = false;
            if (fileMediaInput.files.length > 0 && fileMediaInput.files[0].size > 15 * 1024 * 1024) {
                btnSubmit.disabled = true;
            }
        }
    }

    if (tipeImageRadio && tipeVideoRadio) {
        tipeImageRadio.addEventListener('change', toggleMediaType);
        tipeVideoRadio.addEventListener('change', toggleMediaType);
        document.getElementById('label_tipe_image').addEventListener('click', function() {
            setTimeout(toggleMediaType, 50);
        });
        document.getElementById('label_tipe_video').addEventListener('click', function() {
            setTimeout(toggleMediaType, 50);
        });
    }

    // Ekstrak ID YouTube dari input URL
    function extractYoutubeId(url) {
        if (!url) return '';
        url = url.trim();
        const match = url.match(/(?:youtube(?:-nocookie)?\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/|youtube\.com\/shorts\/)([^"&?\/ ]{11})/i);
        if (match && match[1]) {
            return match[1];
        }
        if (/^[a-zA-Z0-9_-]{11}$/.test(url)) {
            return url;
        }
        return '';
    }

    if (linkYoutubeInput) {
        linkYoutubeInput.addEventListener('input', function () {
            const ytId = extractYoutubeId(this.value);
            if (ytId) {
                ytPreviewThumb.src = 'https://img.youtube.com/vi/' + ytId + '/mqdefault.jpg';
                ytPreviewId.innerText = 'ID Video: ' + ytId;
                ytLivePreview.classList.remove('d-none');
            } else {
                ytLivePreview.classList.add('d-none');
            }
        });
    }

    if (fileMediaInput) {
        fileMediaInput.addEventListener('change', function () {
            const file = this.files[0];
            if (!file) {
                labelFileMedia.innerText = 'Pilih file foto...';
                warningEl.classList.add('d-none');
                badgeEl.classList.add('d-none');
                btnSubmit.disabled = false;
                return;
            }

            labelFileMedia.innerText = file.name;
            const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
            badgeText.innerHTML = '<i class="fas fa-file-image"></i> ' + file.name + ' (' + fileSizeMB + ' MB)';
            badgeEl.classList.remove('d-none');

            if (file.size > 15 * 1024 * 1024) {
                warningEl.classList.remove('d-none');
                btnSubmit.disabled = true;
                alert('Peringatan: Ukuran foto adalah ' + fileSizeMB + ' MB, melebihi batas maksimal 15 MB!');
            } else {
                warningEl.classList.add('d-none');
                btnSubmit.disabled = false;
            }
        });
    }

    const formUpload = document.getElementById('formUploadCarousel');
    if (formUpload) {
        formUpload.addEventListener('submit', function (e) {
            if (tipeImageRadio.checked) {
                const file = fileMediaInput.files[0];
                if (!file) {
                    e.preventDefault();
                    alert('Silakan pilih file foto terlebih dahulu!');
                    return false;
                }
                if (file.size > 15 * 1024 * 1024) {
                    e.preventDefault();
                    alert('Ukuran file foto melebihi batas 15 MB!');
                    return false;
                }
            } else {
                const ytId = extractYoutubeId(linkYoutubeInput.value);
                if (!ytId) {
                    e.preventDefault();
                    alert('Link video YouTube tidak valid! Masukkan link video YouTube yang benar.');
                    return false;
                }
            }

            if (btnSubmit) {
                btnSubmit.disabled = true;
                btnSubmit.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Menyimpan...';
            }
            const prog = document.getElementById('upload_progress_container');
            if (prog) prog.classList.remove('d-none');
        });
    }

    const btnReset = document.getElementById('btnReset');
    if (btnReset) {
        btnReset.addEventListener('click', function() {
            setTimeout(function() {
                labelFileMedia.innerText = 'Pilih file foto...';
                warningEl.classList.add('d-none');
                badgeEl.classList.add('d-none');
                ytLivePreview.classList.add('d-none');
                btnSubmit.disabled = false;
                toggleMediaType();
            }, 50);
        });
    }
});

function previewMedia(type, target, title) {
    const modalTitle = document.getElementById('previewModalTitle');
    const modalBody  = document.getElementById('previewModalBody');
    if (modalTitle) modalTitle.innerText = title;

    if (type === 'video') {
        modalBody.innerHTML = `
            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/${target}?autoplay=1&rel=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        `;
    } else {
        modalBody.innerHTML = `
            <img src="${target}" alt="${title}" class="img-fluid rounded" style="max-height: 500px; object-fit: contain;">
        `;
    }

    $('#previewMediaModal').modal('show');
}

function stopPreviewVideo() {
    const modalBody = document.getElementById('previewModalBody');
    if (modalBody) {
        modalBody.innerHTML = '';
    }
}

$('#previewMediaModal').on('hidden.bs.modal', function () {
    stopPreviewVideo();
});
</script>
