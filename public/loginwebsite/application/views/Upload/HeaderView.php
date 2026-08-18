<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Menu Beranda Header</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('UploadController'); ?>

            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Logo Bapenda (300x166) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="logo_bapenda" name="logo_bapenda">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_bapenda" name="url_bapenda">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Background 1 (1918x753) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="background1" name="background1">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Facebook Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_fb" name="url_fb">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Background 2 (1918x753)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="background2" name="background2">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Twitter Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_twitter" name="url_twitter">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Background 3 (1918x753)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="background3" name="background3">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL IG Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_ig" name="url_ig">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Background 4 (1918x753)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="background4" name="background4">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Youtube Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_yt" name="url_yt">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Background 5 (1918x753)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="background5" name="background5">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Tiktok Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_tiktok" name="url_tiktok">
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
  <h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload Header</h1>
  
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">NO Telp</th>
        <th scope="col">Alamat Kantor</th>
        <th scope="col">Url Bapenda</th>
        <th scope="col">Url Facebook</th>
        <th scope="col">Url Twitter</th>
        <th scope="col">Url IG</th>
        <th scope="col">Url YT</th>
        <th scope="col">Url Tiktok</th>
        <th scope="col">Edit URL</th>
        <th scope="col">Logo Bapenda</th>
        <th scope="col">Background 1</th>
        <th scope="col">Background 2</th>
        <th scope="col">Background 3</th>
        <th scope="col">Background 4</th>
        <th scope="col">Background 5</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $dt['no_telp']; ?></td>
          <td><?= $dt['alamat_kantor']; ?></td>
          <td><?= $dt['url_bapenda']; ?></td>
          <td><?= $dt['url_fb']; ?></td>
          <td><?= $dt['url_twitter']; ?></td>
          <td><?= $dt['url_ig']; ?></td>
          <td><?= $dt['url_yt']; ?></td>
          <td><?= $dt['url_tiktok']; ?></td>

          <td>
          <a href="<?= base_url('UploadController/Edit/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
          </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['logo_bapenda']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogo/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
            
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['background1']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogoBackground1/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['background2']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogoBackground2/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['background3']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogoBackground3/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['background4']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogoBackground4/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>
          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/header/<?= $dt['background5']; ?>" alt="">
            <a href="<?= base_url('UploadController/EditLogoBackground5/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>
            <td>
              <a href="<?= base_url('UploadController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>