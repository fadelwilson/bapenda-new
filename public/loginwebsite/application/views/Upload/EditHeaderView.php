<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Menu Header</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('UploadController/Edit/'.$EditData['id']); ?> 

            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $EditData['no_telp'] ?>">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor"  value="<?= $EditData['alamat_kantor'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_bapenda" name="url_bapenda"  value="<?= $EditData['url_bapenda'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Facebook Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_fb" name="url_fb"  value="<?= $EditData['url_fb'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Twitter Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_twitter" name="url_twitter"  value="<?= $EditData['url_twitter'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL IG Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_ig" name="url_ig"  value="<?= $EditData['url_ig'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Youtube Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_yt" name="url_yt"  value="<?= $EditData['url_yt'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">URL Tiktok Bapenda</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="url_tiktok" name="url_tiktok"  value="<?= $EditData['url_tiktok'] ?>">
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
