<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Nama Pejabat</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('TentangKamiController/Edit/'.$EditData['id']); ?> 

            <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kaban</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kaban" name="nama_kaban" value="<?= $EditData['nama_kaban'] ?>">
                        </div>
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Sekban</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_sekban" name="nama_sekban"  value="<?= $EditData['nama_sekban'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid 1</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid1" name="nama_kabid1"  value="<?= $EditData['nama_kabid1'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid 2</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid2" name="nama_kabid2"  value="<?= $EditData['nama_kabid2'] ?>">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid 3</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid3" name="nama_kabid3"  value="<?= $EditData['nama_kabid3'] ?>">
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
