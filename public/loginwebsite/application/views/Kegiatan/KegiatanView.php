<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Kegiatan</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('KegiatanController'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 1 (310x585) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan1" name="kegiatan1">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 2 (631x587) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan2" name="kegiatan2">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 3 (311x289) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan3" name="kegiatan3">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 4 (631x289) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan4" name="kegiatan4">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 5 (311x289) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan5" name="kegiatan5">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 6 (311x289)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan6" name="kegiatan6">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Kegiatan 7 (311x289) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="kegiatan7" name="kegiatan7">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL YT Kegiatan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_yt_kegiatan" name="url_yt_kegiatan">
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
  <h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload kegiatan</h1>
  
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">kegiatan 1</th>
        <th scope="col">kegiatan 2</th>
        <th scope="col">kegiatan 3</th>
        <th scope="col">kegiatan 4</th>
        <th scope="col">kegiatan 5</th>
        <th scope="col">kegiatan 6</th>
        <th scope="col">kegiatan 7</th>
        <th scope="col">URL YT Kegiatan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan1']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan1/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan2']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan2/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan3']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan3/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan4']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan4/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan5']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan5/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan6']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan6/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/kegiatan/<?= $dt['kegiatan7']; ?>" alt="">
            <a href="<?= base_url('KegiatanController/EditKegiatan7/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <?= $dt['url_yt_kegiatan'] ?>
                <a href="<?= base_url('KegiatanController/Edit/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
          </td>

            <td>
              <a href="<?= base_url('kegiatanController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>