<div class="card">
    <div class="card-header">
        <div class="card-title">Data Pengguna</div>
    </div>
    <div class="card-body">
        <?php echo $this->session->flashdata('msg'); ?>

        <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
            <thead>
                <tr>
                    <th style="text-align:center;width:40px;">No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th style="width:140px;text-align:center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($data->result_array() as $a) :
                    $no++;
                    $id = $a['user_id'];
                    $nm = $a['user_nama'];
                    $username = $a['user_username'];
                    $password = $a['user_password'];
                    $level = $a['user_level'];
                    $status = $a['user_status'];
                    if ($status == 1) {
                        $status = '<span class="badge badge-success">Aktif</span>';
                        $btnstatus = '<a class="btn btn btn-danger btn-square" href="#modalSwicth' . $id . '" data-toggle="modal" title="NonAktifkan"><span class="fa fa-circle"></span></a>';
                    } else {
                        $status = '<span class="badge badge-danger">Nonaktif</span>';
                        $btnstatus = '<a class="btn btn btn-danger btn-square" href="#modalSwicth' . $id . '" data-toggle="modal" title="Aktifkan"><span class="fa fa-circle-o"></span></a>';
                    }
                    if ($level == 1) {
                        $level = 'administrator';
                    } else {
                        $level = 'kasir';
                    }
                    ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td><?php echo $nm; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><?php echo $level; ?></td>
                        <td><?php echo $status; ?></td>
                        <td style="text-align:center;">
                            <a class="btn btn btn-warning btn-square" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span></a>
                            <?= $btnstatus; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-sm btn-square btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Pengguna</a>
    </div>
</div>

<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Tambah Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'pengguna/tambah_pengguna' ?>">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="control-label col-3">Nama</label>
                        <div class="col-9">
                            <input name="nama" class="form-control" type="text" placeholder="Input Nama..." required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-3">Username</label>
                        <div class="col-9">
                            <input name="username" class="form-control" type="text" placeholder="Input Username..." required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-3">Password</label>
                        <div class="col-9">
                            <input name="password" class="form-control" type="password" placeholder="Input Password..." required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-3">Ulangi Password</label>
                        <div class="col-9">
                            <input name="password2" class="form-control" type="password" placeholder="Ulangi Password..." required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-3">Level</label>
                        <div class="col-9">
                            <select name="level" class="form-control" required>
                                <option value="1">Admin</option>
                                <option value="2">Kasir</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-primary btn-square">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ============ MODAL EDIT =============== -->
<?php
foreach ($data->result_array() as $a) {
    $id = $a['user_id'];
    $nm = $a['user_nama'];
    $username = $a['user_username'];
    $password = $a['user_password'];
    $level = $a['user_level'];
    $status = $a['user_status'];
    ?>
    <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Edit Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'pengguna/edit_pengguna' ?>">
                    <div class="modal-body">
                        <input name="kode" type="hidden" value="<?php echo $id; ?>">

                        <div class="form-group row">
                            <label class="control-label col-3">Nama</label>
                            <div class="col-9">
                                <input name="nama" class="form-control" type="text" value="<?php echo $nm; ?>" placeholder="Input Nama..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">Username</label>
                            <div class="col-9">
                                <input name="username" class="form-control" type="text" value="<?php echo $username; ?>" placeholder="Input Username..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">Password</label>
                            <div class="col-9">
                                <input name="password" class="form-control" type="password" placeholder="Input Password...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">Ulangi Password</label>
                            <div class="col-9">
                                <input name="password2" class="form-control" type="password" placeholder="Ulangi Password...">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">Level</label>
                            <div class="col-9">
                                <select name="level" class="form-control" required>
                                    <?php if ($level == '1') : ?>
                                        <option value="1" selected>Admin</option>
                                        <option value="2">Kasir</option>
                                    <?php else : ?>
                                        <option value="1">Admin</option>
                                        <option value="2" selected>Kasir</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-primary btn-square">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>

<!-- ============ MODAL HAPUS =============== -->
<?php
foreach ($data->result_array() as $a) {
    $id = $a['user_id'];
    $nm = $a['user_nama'];
    $username = $a['user_username'];
    $password = $a['user_password'];
    $level = $a['user_level'];
    $status = $a['user_status'];
    ?>
    <div id="modalSwicth<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Aktif dan Nonaktifkan Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'pengguna/switch' ?>">
                    <div class="modal-body">
                        <p>Apakah anda Yakin <b><?php echo $nm; ?></b>..?</p>
                        <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        <input name="mode" type="hidden" value="<?php echo $status; ?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-primary btn-square">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>

<!--END MODAL-->