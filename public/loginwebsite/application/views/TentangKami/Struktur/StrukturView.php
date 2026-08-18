<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Struktur dan Matrix</h6>
            
        </div>
            <div class="card-body">
            <?= form_open_multipart('StrukturController'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Foto Struktur (835 x 418) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_struk" name="foto_struk">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Foto Matrix (835 x 418) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_matrix" name="foto_matrix">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label"> Judul 1 </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="judul1" name="judul1">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label"> Judul 2 </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="judul2" name="judul2">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label"> Narasi 1 </label>
                        <div class="col-sm-4">
                          <textarea class="form-control" id="narasi1" name="narasi1"></textarea>
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label"> Narasi 2 </label>
                        <div class="col-sm-4">
                            <textarea class="form-control" id="narasi2" name="narasi2"></textarea>
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
  <h1 class="h3 mb-4 mt-5 text-gray-800">Data Upload Tentang Kami</h1>
  
  <div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul 1</th>
        <th scope="col">Narasi 1</th>
        <th scope="col">Judul 2</th>
        <th scope="col">Narasi 2</th>
        <th scope="col">Aksi</th>
        <th scope="col">Foto Struktur</th>
        <th scope="col">Foto Matrix</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>          
            <td> <?= $dt['judul1']; ?> </td>
            <td> <?= $dt['narasi1']; ?> </td>
            <td> <?= $dt['judul2']; ?> </td>
            <td> <?= $dt['narasi2']; ?> </td>
        <td> 
              <a href="<?= base_url('StrukturController/Edit/'.$dt['id']) ?>" class="btn btn-info">Edit</a>  
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/struktur/<?= $dt['foto_struk']; ?>" alt="">
            <a href="<?= base_url('StrukturController/EditFotoStruk/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/struktur/<?= $dt['foto_matrix']; ?>" alt="">
            <a href="<?= base_url('StrukturController/EditFotoMatrix/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>
        <td>
        <a href="<?= base_url('StrukturController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>
        </td>
         
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>