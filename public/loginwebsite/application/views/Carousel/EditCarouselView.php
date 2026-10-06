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
            <span><i class="fas fa-edit mr-1"></i> Edit Media: <?= htmlspecialchars($media['judul']); ?></span>
            <span class="badge badge-dark">
                Tipe Saat Ini: <?= strtoupper($media['tipe']); ?>
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

                    <!-- Tipe Media Selector -->
                    <div class="form-group mt-3">
                        <label class="font-weight-bold d-block">Jenis Media <span class="text-danger">*</span></label>
                        <div class="btn-group btn-group-toggle w-100" data-toggle="buttons">
                            <label class="btn btn-outline-primary <?= $media['tipe'] === 'image' ? 'active' : ''; ?> py-2 font-weight-bold" id="label_tipe_image">
                                <input type="radio" name="tipe" id="tipe_image" value="image" autocomplete="off" <?= $media['tipe'] === 'image' ? 'checked' : ''; ?>>
                                <i class="fas fa-image mr-1"></i> Foto / Gambar (Upload File)
                            </label>
                            <label class="btn btn-outline-danger <?= $media['tipe'] === 'video' ? 'active' : ''; ?> py-2 font-weight-bold" id="label_tipe_video">
                                <input type="radio" name="tipe" id="tipe_video" value="video" autocomplete="off" <?= $media['tipe'] === 'video' ? 'checked' : ''; ?>>
                                <i class="fab fa-youtube mr-1"></i> Video YouTube (Link URL)
                            </label>
                        </div>
                    </div>

                    <!-- Input Foto (Upload File) -->
                    <div class="form-group mt-3 <?= $media['tipe'] === 'image' ? '' : 'd-none'; ?>" id="group_foto">
                        <label for="file_media" class="font-weight-bold">
                            Ganti File Foto
                            <span class="text-muted small font-weight-normal">(Kosongkan jika tidak ingin mengganti file foto)</span>
                        </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_media" name="file_media" accept="image/jpeg,image/png,image/webp,image/gif">
                            <label class="custom-file-label" for="file_media" id="label_file_media">Pilih file foto baru...</label>
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
                    <div class="form-group mt-3 <?= $media['tipe'] === 'video' ? '' : 'd-none'; ?>" id="group_video">
                        <label for="link_youtube" class="font-weight-bold">
                            Link URL Video YouTube <span class="text-danger">*</span>
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white"><i class="fab fa-youtube"></i></span>
                            </div>
                            <?php 
                            $default_yt_val = ($media['tipe'] === 'video') ? $media['file_media'] : '';
                            ?>
                            <input type="text" class="form-control" id="link_youtube" name="link_youtube" value="<?= set_value('link_youtube', $default_yt_val); ?>" placeholder="Tempel URL YouTube di sini...">
                        </div>
                        <small class="form-text text-muted">
                            Mendukung URL reguler (watch?v=...), tautan pendek (youtu.be/...), maupun YouTube Shorts.
                        </small>

                        <!-- Live Preview YouTube -->
                        <div id="yt_live_preview" class="mt-3 p-3 bg-light rounded border d-none">
                            <div class="d-flex align-items-center">
                                <img id="yt_preview_thumb" src="" alt="Thumbnail YouTube" class="rounded shadow-sm mr-3" style="width: 120px; height: 68px; object-fit: cover;">
                                <div>
                                    <span class="badge badge-danger font-weight-bold mb-1"><i class="fab fa-youtube mr-1"></i> Video YouTube Valid</span>
                                    <div class="small text-muted font-monospace" id="yt_preview_id"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Pratinjau File Saat Ini -->
                <div class="col-md-5">
                    <label class="font-weight-bold">Pratinjau Media Saat Ini:</label>
                    <div class="p-3 bg-dark rounded text-center">
                        <?php 
                        if ($media['tipe'] === 'video') :
                            $yt_id = $this->CarouselModel->ExtractYoutubeId($media['file_media']);
                        ?>
                            <div class="embed-responsive embed-responsive-16by9 rounded shadow">
                                <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/<?= $yt_id; ?>?rel=0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="mt-2 small text-light">
                                <a href="<?= htmlspecialchars($media['file_media']); ?>" target="_blank" rel="noopener noreferrer" class="text-danger font-weight-bold">
                                    <i class="fab fa-youtube mr-1"></i> Buka di YouTube <i class="fas fa-external-link-alt fa-xs"></i>
                                </a>
                            </div>
                        <?php else : 
                            $current_file = base_url('uploads/carousel/' . $media['file_media']);
                        ?>
                            <img src="<?= $current_file; ?>" alt="<?= htmlspecialchars($media['judul']); ?>" class="img-fluid rounded" style="max-height: 250px; object-fit: contain;">
                            <div class="mt-2 small text-light text-monospace">
                                <?= htmlspecialchars($media['file_media']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="text-right border-top pt-3 mt-4">
                <a href="<?= site_url('CarouselController/Index'); ?>" class="btn btn-secondary mr-2">
                    <i class="fas fa-times mr-1"></i> Batal
                </a>
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
            warningEl.classList.add('d-none');
            btnSubmit.disabled = false;
        } else {
            groupFoto.classList.remove('d-none');
            groupVideo.classList.add('d-none');
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
                labelFileMedia.innerText = 'Pilih file foto baru...';
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
                alert('Peringatan: Ukuran file foto adalah ' + fileSizeMB + ' MB, melebihi batas maksimal 15 MB!');
            } else {
                warningEl.classList.add('d-none');
                btnSubmit.disabled = false;
            }
        });
    }

    const formEdit = document.getElementById('formEditCarousel');
    if (formEdit) {
        formEdit.addEventListener('submit', function (e) {
            if (tipeVideoRadio && tipeVideoRadio.checked) {
                const ytVal = linkYoutubeInput.value.trim();
                if (!ytVal) {
                    e.preventDefault();
                    alert('Silakan masukkan link video YouTube!');
                    return false;
                }
                const ytId = extractYoutubeId(ytVal);
                if (!ytId) {
                    e.preventDefault();
                    alert('Link video YouTube tidak valid! Masukkan link video YouTube yang benar.');
                    return false;
                }
            } else {
                const file = fileMediaInput.files[0];
                if (file && file.size > 15 * 1024 * 1024) {
                    e.preventDefault();
                    alert('Ukuran file foto melebihi batas 15 MB!');
                    return false;
                }
            }

            if (btnSubmit) {
                btnSubmit.disabled = true;
                btnSubmit.innerHTML = '<i class="fas fa-spinner fa-spin mr-1"></i> Menyimpan...';
            }
        });
    }
});
</script>
