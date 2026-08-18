<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Galeri</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('GaleriController'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 1 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri1" name="galeri1">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 2 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri2" name="galeri2">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 3 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri3" name="galeri3">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 4 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri4" name="galeri4">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 5 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri5" name="galeri5">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Galeri 6 (370x278) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="galeri6" name="galeri6">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Poster Kaban</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="poster_kaban" name="poster_kaban">
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
        <th scope="col">Galeri 1</th>
        <th scope="col">Galeri 2</th>
        <th scope="col">Galeri 3</th>
        <th scope="col">Galeri 4</th>
        <th scope="col">Galeri 5</th>
        <th scope="col">Galeri 6</th>
        <th scope="col">Poster Kaban</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          
          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri1']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri1/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri2']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri2/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri3']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri3/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri4']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri4/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri5']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri5/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['galeri6']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditGaleri6/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/galeri/<?= $dt['poster_kaban']; ?>" alt="">
            <a href="<?= base_url('GaleriController/EditPosterKaban/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

            <td>
              <a href="<?= base_url('GaleriController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>