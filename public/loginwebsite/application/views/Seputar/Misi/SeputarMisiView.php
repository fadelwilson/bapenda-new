<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Seputar Misi</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('SeputarController/IndexMisi'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Foto Seputar Misi (835 x 418) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_misi" name="foto_misi">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Judul Seputar Misi</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="judul_misi" name="judul_misi">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Narasi Misi</label>
                        <div class="col-sm-4">
                        <textarea name="narasi_misi" id="narasi_misi" cols="30" rows="10" class="form-control"></textarea>
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
  <h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload Seputar Misi</h1>
  
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Foto Seputar Misi</th>
        <th scope="col">Judul Seputar Misi</th>
        <th scope="col">Narasi Seputar Misi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          
          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/seputar/misi/<?= $dt['foto_misi']; ?>" alt="">
            <a href="<?= base_url('SeputarController/EditFotoSeputarMisi/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>
        <td>
            <?= $dt['judul_misi']; ?>
        </td>
        <td>
            <?= $dt['narasi_misi']; ?>
        </td>

            <td>
            <a href="<?= base_url('SeputarController/EditMisi/'.$dt['id']) ?>" class="btn btn-info">Edit</a> 
              <a href="<?= base_url('SeputarController/HapusSeputarMisi/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>