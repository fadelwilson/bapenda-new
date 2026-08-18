<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Berita</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('BeritaController'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Foto Berita </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_berita" name="foto_berita">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="judul_berita" name="judul_berita">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Narasi</label>
                        <div class="col-sm-4">
                        <textarea name="narasi_berita" id="narasi_berita" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Berita</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_berita" name="url_berita">
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
  <h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload Galeri</h1>
  
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto Berita</th>
        <th scope="col">Judul Berita</th>
        <th scope="col">Narasi Berita</th>
        <th scope="col">URL Berita</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          
          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/Berita/<?= $dt['foto_berita']; ?>" alt="">
            <a href="<?= base_url('BeritaController/EditFotoBerita/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>
        <td>
            <?= $dt['judul_berita']; ?>
        </td>
        <td>
            <?= $dt['narasi_berita']; ?>
        </td>
        <td>
            <?= $dt['url_berita']; ?>
        </td>

            <td>
            <a href="<?= base_url('BeritaController/Edit/'.$dt['id']) ?>" class="btn btn-info">Edit</a> 
              <a href="<?= base_url('BeritaController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>