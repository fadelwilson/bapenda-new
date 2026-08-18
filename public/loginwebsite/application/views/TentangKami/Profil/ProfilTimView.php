<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <?= validation_errors('<div class="alert alert-danger alert-dismissible fade show" role="alert">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  </div>') ?>
  <?= $this->session->flashdata('msg'); ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tentang Kami</h6>
        </div>
            <div class="card-body">
            <?= form_open_multipart('TentangKamiController'); ?>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Header (1920x324) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_header" name="foto_header">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Photo Kaban (270x236) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_kaban" name="foto_kaban">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Photo Sekban (270x236) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_sekban" name="foto_sekban">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Photo Kabid 1 (270x236) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_kabid1" name="foto_kabid1">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Photo Kabid2 (270x236) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_kabid2" name="foto_kabid2">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Photo Kabid3 (270x236) </label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" id="foto_kabid3" name="foto_kabid3">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kaban</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kaban" name="nama_kaban">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Sekban</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_sekban" name="nama_sekban">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid1</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid1" name="nama_kabid1">
                        </div>
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid2</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid2" name="nama_kabid2">
                        </div>
                    </div>

                    <div class="row mb-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Kabid3</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="nama_kabid3" name="nama_kabid3">
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
        <th scope="col">Nama Kaban</th>
        <th scope="col">Nama Sekban</th>
        <th scope="col">Nama Kabid1</th>
        <th scope="col">Nama Kabid2</th>
        <th scope="col">Nama Kabid3</th>
        <th scope="col">Aksi</th>
        <th scope="col">Photo Header</th>
        <th scope="col">Foto Kaban</th>
        <th scope="col">Foto Sekban</th>
        <th scope="col">Foto Kabid1</th>
        <th scope="col">Foto Kabid2</th>
        <th scope="col">Foto Kabid3</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($DataTampil as $dt) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>          
            <td> <?= $dt['nama_kaban']; ?> </td>
            <td> <?= $dt['nama_sekban']; ?> </td>
            <td> <?= $dt['nama_kabid1']; ?> </td>
            <td> <?= $dt['nama_kabid2']; ?> </td>
            <td> <?= $dt['nama_kabid3']; ?> </td>

        <td>
              <a href="<?= base_url('TentangKamiController/Edit/'.$dt['id']) ?>" class="btn btn-success">Edit</a>  
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_header']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoHeader/'.$dt['id']) ?>" class="btn btn-info">Edit</a>           
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kaban']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoKaban/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_sekban']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoSekban/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

          <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid1']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoKabid1/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid2']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoKabid2/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
            <img width="100" src="<?= base_url(); ?>/uploads/tentangkami/profiltim/<?= $dt['foto_kabid3']; ?>" alt="">
            <a href="<?= base_url('TentangKamiController/EditFotoKabid3/'.$dt['id']) ?>" class="btn btn-info">Edit</a>
        </td>

        <td>
              <a href="<?= base_url('TentangKamiController/Hapus/'.$dt['id']) ?>" class="btn btn-warning">Hapus</a>  
        </td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
</div>