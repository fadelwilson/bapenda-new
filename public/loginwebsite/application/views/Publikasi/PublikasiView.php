<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
            <p class="text-muted small mb-0">Kelola dokumen peraturan, publikasi, formulir, dan kategori terkait untuk halaman Informasi.</p>
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm shadow-sm" data-toggle="modal" data-target="#modalKelolaKategori">
            <i class="fas fa-tags fa-sm text-primary mr-1"></i> Kelola Kategori (<?= count($kategori_list); ?>)
        </button>
    </div>

    <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">', '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>') ?>
    <?= $this->session->flashdata('msg'); ?>

    <!-- Form Tambah Dokumen Baru -->
    <div class="card shadow mb-4">
        <a href="#collapseCardTambah" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardTambah">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-file-upload mr-1"></i> Unggah Dokumen Baru
            </h6>
        </a>
        <div class="collapse show" id="collapseCardTambah">
            <div class="card-body">
                <?= form_open_multipart('PublikasiController/Index' . ($selected_kategori ? '?kategori=' . $selected_kategori : '')); ?>

                <div class="row">
                    <!-- Kategori -->
                    <div class="col-md-4 mb-3">
                        <label for="kategori_id" class="font-weight-bold">Kategori Dokumen <span class="text-danger">*</span></label>
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach ($kategori_list as $kat) : ?>
                                <option value="<?= $kat['id']; ?>" <?= ($selected_kategori == $kat['id']) ? 'selected' : ''; ?>>
                                    <?= htmlspecialchars($kat['nama_kategori']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <small class="form-text text-muted">
                            Kategori belum ada? <a href="#" data-toggle="modal" data-target="#modalKelolaKategori">Tambah kategori di sini</a>.
                        </small>
                    </div>

                    <!-- Judul Dokumen -->
                    <div class="col-md-5 mb-3">
                        <label for="judul" class="font-weight-bold">Judul / Nama Dokumen <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Contoh: PERBUP No. 24 Tahun 2024 tentang BPHTB" required>
                    </div>

                    <!-- Urutan -->
                    <div class="col-md-3 mb-3">
                        <label for="urutan" class="font-weight-bold">Nomor Urutan</label>
                        <input type="number" class="form-control" id="urutan" name="urutan" value="0" placeholder="0">
                        <small class="form-text text-muted">Angka lebih kecil tampil lebih dulu.</small>
                    </div>
                </div>

                <div class="row">
                    <!-- Upload File PDF -->
                    <div class="col-md-12 mb-3">
                        <label for="file_pdf" class="font-weight-bold">File PDF <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_pdf" name="file_pdf" accept="application/pdf" required onchange="updateFileName(this)">
                            <label class="custom-file-label" for="file_pdf" id="label_file_pdf">Pilih berkas PDF...</label>
                        </div>
                        <small class="form-text text-muted">Format hanya berupa file <strong>.PDF</strong> (Maksimal 50 MB).</small>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary mr-2">
                        <i class="fas fa-undo mr-1"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-1"></i> Simpan Dokumen
                    </button>
                </div>

                <?= form_close(); ?>
            </div>
        </div>
    </div>

    <!-- Filter Kategori & Tabel Data -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-wrap align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary mb-2 mb-md-0">
                <i class="fas fa-list mr-1"></i> Daftar Dokumen Publikasi & Peraturan
                <span class="badge badge-primary ml-2"><?= count($DataTampil); ?> Data</span>
            </h6>

            <!-- Filter Kategori Pills -->
            <div class="btn-group btn-group-sm flex-wrap" role="group">
                <a href="<?= site_url('PublikasiController/Index'); ?>" class="btn <?= empty($selected_kategori) ? 'btn-primary' : 'btn-outline-primary'; ?>">
                    Semua Kategori
                </a>
                <?php foreach ($kategori_list as $kat) : ?>
                    <a href="<?= site_url('PublikasiController/Index?kategori=' . $kat['id']); ?>" class="btn <?= ($selected_kategori == $kat['id']) ? 'btn-primary' : 'btn-outline-primary'; ?>">
                        <?= htmlspecialchars($kat['nama_kategori']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTablePublikasi" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th width="5%" class="text-center">#</th>
                            <th width="20%">Kategori</th>
                            <th width="40%">Judul Dokumen</th>
                            <th width="15%">File Dokumen</th>
                            <th width="10%" class="text-center">Urutan</th>
                            <th width="10%" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($DataTampil)) : ?>
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    <i class="fas fa-folder-open fa-2x mb-2 d-block"></i>
                                    Belum ada data dokumen untuk kategori ini.
                                </td>
                            </tr>
                        <?php else : ?>
                            <?php $no = 1; foreach ($DataTampil as $dt) : ?>
                                <?php
                                $is_custom_upload = (strpos($dt['file_pdf'], '/') === false);
                                $file_url = $is_custom_upload
                                    ? base_url('uploads/publikasi/' . $dt['file_pdf'])
                                    : base_url($dt['file_pdf']);
                                ?>
                                <tr>
                                    <td class="text-center align-middle font-weight-bold"><?= $no++; ?></td>
                                    <td class="align-middle">
                                        <span class="badge badge-pill badge-info px-2 py-1">
                                            <?= htmlspecialchars($dt['nama_kategori'] ?? 'Tanpa Kategori'); ?>
                                        </span>
                                    </td>
                                    <td class="align-middle font-weight-bold text-dark">
                                        <?= htmlspecialchars($dt['judul']); ?>
                                    </td>
                                    <td class="align-middle">
                                        <a href="<?= $file_url; ?>" target="_blank" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-file-pdf mr-1"></i> Buka PDF
                                        </a>
                                        <?php if ($is_custom_upload) : ?>
                                            <span class="badge badge-light border text-muted ml-1" title="Diunggah via Dashboard">Upload</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <span class="badge badge-secondary"><?= $dt['urutan']; ?></span>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group" role="group">
                                            <a href="<?= site_url('PublikasiController/Edit/' . $dt['id']); ?>" class="btn btn-info btn-sm" title="Edit Dokumen">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger btn-sm" title="Hapus Dokumen" onclick="confirmDelete(<?= $dt['id']; ?>, '<?= htmlspecialchars(addslashes($dt['judul'])); ?>')">
                                                <i class="fas fa-trash"></i>
                                            </button>
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

<!-- ========================================== -->
<!-- MODAL KELOLA KATEGORI -->
<!-- ========================================== -->
<div class="modal fade" id="modalKelolaKategori" tabindex="-1" role="dialog" aria-labelledby="modalKelolaKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalKelolaKategoriLabel">
                    <i class="fas fa-tags mr-1"></i> Kelola Kategori Publikasi
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form Tambah Kategori -->
                <div class="card border-primary mb-4">
                    <div class="card-header bg-light py-2">
                        <strong class="text-primary"><i class="fas fa-plus-circle mr-1"></i> Tambah Kategori Baru</strong>
                    </div>
                    <div class="card-body py-3">
                        <?= form_open('PublikasiController/TambahKategori'); ?>
                        <div class="form-row align-items-center">
                            <div class="col-sm-7 my-1">
                                <label class="sr-only" for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Contoh: Surat Edaran / Laporan Kinerja" required>
                            </div>
                            <div class="col-sm-3 my-1">
                                <label class="sr-only" for="urutan_kategori">Urutan</label>
                                <input type="number" class="form-control" id="urutan_kategori" name="urutan" value="0" placeholder="Urutan (0)">
                            </div>
                            <div class="col-sm-2 my-1">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fas fa-plus mr-1"></i> Tambah
                                </button>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>

                <!-- Daftar Kategori Eksisting -->
                <h6 class="font-weight-bold text-dark mb-2">Daftar Kategori Saat Ini:</h6>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="thead-light">
                            <tr>
                                <th width="10%" class="text-center">#</th>
                                <th width="50%">Nama Kategori</th>
                                <th width="20%" class="text-center">Urutan Tampil</th>
                                <th width="20%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no_kat = 1; foreach ($kategori_list as $kat) : ?>
                                <tr>
                                    <td class="text-center align-middle"><?= $no_kat++; ?></td>
                                    <td class="align-middle font-weight-bold"><?= htmlspecialchars($kat['nama_kategori']); ?></td>
                                    <td class="text-center align-middle"><?= $kat['urutan']; ?></td>
                                    <td class="text-center align-middle">
                                        <button type="button" class="btn btn-sm btn-info" onclick="editKategori(<?= $kat['id']; ?>, '<?= htmlspecialchars(addslashes($kat['nama_kategori'])); ?>', <?= $kat['urutan']; ?>)">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <a href="<?= site_url('PublikasiController/HapusKategori/' . $kat['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini? Kategori yang memiliki dokumen tidak dapat dihapus.')">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- ========================================== -->
<!-- MODAL EDIT KATEGORI -->
<!-- ========================================== -->
<div class="modal fade" id="modalEditKategori" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title"><i class="fas fa-edit mr-1"></i> Edit Kategori</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEditKategori" method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit_nama_kategori" class="font-weight-bold">Nama Kategori</label>
                        <input type="text" class="form-control" id="edit_nama_kategori" name="nama_kategori" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_urutan_kategori" class="font-weight-bold">Nomor Urutan</label>
                        <input type="number" class="form-control" id="edit_urutan_kategori" name="urutan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function updateFileName(input) {
    var fileName = input.files[0] ? input.files[0].name : 'Pilih berkas PDF...';
    document.getElementById('label_file_pdf').textContent = fileName;
}

function confirmDelete(id, judul) {
    if (confirm('Apakah Anda yakin ingin menghapus dokumen "' + judul + '"? Tindakan ini tidak dapat dibatalkan.')) {
        window.location.href = '<?= site_url("PublikasiController/Hapus/"); ?>' + id;
    }
}

function editKategori(id, nama, urutan) {
    document.getElementById('formEditKategori').action = '<?= site_url("PublikasiController/EditKategori/"); ?>' + id;
    document.getElementById('edit_nama_kategori').value = nama;
    document.getElementById('edit_urutan_kategori').value = urutan;
    $('#modalKelolaKategori').modal('hide');
    $('#modalEditKategori').modal('show');
}
</script>
