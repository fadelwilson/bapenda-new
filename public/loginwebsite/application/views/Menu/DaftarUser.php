
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://Bapenda.com"> untuk Info lebih lanjut</a>.</p>

                    <div class="row">
                        <div class="col-lg">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                        </div>
                        <?php endif; ?>

                        <?= $this->session->flashdata('message'); ?>

                        
<!-- Begin Page Content -->
<div class="container-fluid">
                        </div>
                        <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <a href="" class="btn btn-outline-primary mb-3" 
                        data-toggle="modal" data-target="#modaltambahuser">Tambah User</a>
            <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($DataTampil as $t): ?>
                    <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $t['name']; ?></td>
                    <td><?= $t['jabatan']; ?></td>
                    <td><?= $t['nip_perekam']; ?></td>
                    <td>
                        <a href="" class="btn btn-outline-success" data-toggle="modal" data-target="#edituser<?= $t['id'];?>" >Edit</a>

                        <a href="<?= base_url('MenuController/HapusUser/'.$t['id']); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$t['username'];?> ?');" class="btn btn-outline-danger" data-popup="tooltip" data-placement="top" title="Hapus Data"><i class="fa fa-trash"></i>  Delete</a>
                    </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>             
            </table>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        
            <!-- Modal -->
            <div class="modal fade" id="modaltambahuser" tabindex="-1" aria-labelledby="modaltambahuser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modaltambahuser">Tambah User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form Action="<?= base_url('MenuController/TambahUser') ?>" method="post">
                <div class="modal-body">
                
                <div class="form-group">
                <input type="text" class="form-control" 
                id="name" name="name" placeholder="Nama Lengkap " required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="username" name="username" placeholder="Username" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="password" name="password" placeholder="Password" required>
                </div>

                <!-- <div class="form-group">
                <input type="text" class="form-control" 
                id="role_id" name="role_id" placeholder="Role User" required>
                </div> -->
                <div class="form-group">
                <select class="form-control" id="role_id" name="role_id">
                                    <option value="">Role User</option>                          
                                        <option value="1">Admin</option>
                                        <option value="2">Member</option>
                                </select>
                                </div> 

                <div class="form-group">
                <input type="text" class="form-control" 
                id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                <input type="date" class="form-control" 
                id="date_created" name="date_created" placeholder="Tanggal Buat" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="jabatan" name="jabatan" placeholder="Jabatan" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="nip_perekam" name="nip_perekam" placeholder="NIP" required>
                </div>

                <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1"
                name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                    Active ?
                </label>
                </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </form>

                </div>
            </div>
            </div>


<!-- modal edit -->
<?php $no  = 0;
foreach ($DataTampil as $t) : $no++; ?>
<div class="modal fade" id="edituser<?= $t['id']?>" tabindex="-1" aria-labelledby="edituser" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edituser<?= $t['id']?>">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form Action="<?= site_url('MenuController/Edit') ?>" method="post">
                <input type ="hidden" name="id" value="<?= $t['id'] ?>">
                <div class="modal-body">
                
                <div class="form-group">
                <input type="text" class="form-control" 
                id="name" name="name" placeholder="Nama" value="<?= $t['name']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="username" name="username" placeholder="Nama Lengkap" value="<?= $t['username']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="password" name="password" placeholder="Password" value="<?= $t['password']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="role_id" name="role_id" placeholder="Role User" value="<?= $t['role_id']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="email" name="email" placeholder="Email" value="<?= $t['email']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="date_created" name="date_created" placeholder="Tanggal Buat" value="<?= $t['date_created']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $t['jabatan']?>" required>
                </div>

                <div class="form-group">
                <input type="text" class="form-control" 
                id="nip_perekam" name="nip_perekam" placeholder="NIP" value="<?= $t['nip_perekam']?>" required>
                </div>

                <div class="form-group">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1"
                name="is_active" id="is_active" checked>
                <label class="form-check-label" for="is_active">
                    Active ?
                </label>


                </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
