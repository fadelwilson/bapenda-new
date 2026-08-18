<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Galeri 6</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('GaleriController/EditGaleri6/'.$EditData['id']); ?> 

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 6</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri6" name="galeri6">
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
