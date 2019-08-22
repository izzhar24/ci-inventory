    <!-- Page Content -->
    <div class="card mt-2">
        <div class="card-header">
            <div class="card-title">Data Supplier</div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <table class="table table-bordered table-condensed" id="mydata">
                        <thead>
                            <tr>
                                <th style="text-align:center;width:40px;">No</th>
                                <th>Nama Suplier</th>
                                <th>Alamat</th>
                                <th>No Telp/HP</th>
                                <th>Status</th>
                                <th style="width:140px;text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($data->result_array() as $a) :
                                $no++;
                                $id = $a['suplier_id'];
                                $nm = $a['suplier_nama'];
                                $alamat = $a['suplier_alamat'];
                                $notelp = $a['suplier_notelp'];
                                $status = $a['status'];
                                if ($status == 1) {
                                    $status = '<span class="badge badge-success">Aktif</span>';
                                    $btnstatus = '<a class="btn btn btn-danger btn-sm btn-square" href="#modalSwicth' . $id . '" data-toggle="modal" title="NonAktifkan"><span class="fa fa-circle"></span></a>';
                                } else {
                                    $status = '<span class="badge badge-danger">Nonaktif</span>';
                                    $btnstatus = '<a class="btn btn btn-danger btn-sm btn-square" href="#modalSwicth' . $id . '" data-toggle="modal" title="Aktifkan"><span class="fa fa-circle-o"></span></a>';
                                }
                                ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $no; ?></td>
                                    <td><?php echo $nm; ?></td>
                                    <td><?php echo $alamat; ?></td>
                                    <td><?php echo $notelp; ?></td>
                                    <td><?php echo $status; ?></td>
                                    <td style="text-align:center;">
                                        <a class="btn btn-square btn-sm btn-warning" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span></a>
                                        <?= $btnstatus; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-sm btn-success btn-square" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Suplier</a>
        </div>
    </div>
    <!-- /.row -->

    <!-- ============ MODAL ADD =============== -->
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Tambah Suplier</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'suplier/tambah_suplier' ?>">
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="control-label col-3">Nama Suplier</label>
                            <div class="col-9">
                                <input name="nama" class="form-control" type="text" placeholder="Nama Suplier..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">Alamat</label>
                            <div class="col-9">
                                <input name="alamat" class="form-control" type="text" placeholder="Alamat..." required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-3">No Telp/ HP</label>
                            <div class="col-9">
                                <input name="notelp" class="form-control" type="text" placeholder="No Telp/HP..." required>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-danger btn-square" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button class="btn btn-primary btn-square">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ============ MODAL EDIT =============== -->
    <?php
    foreach ($data->result_array() as $a) {
        $id = $a['suplier_id'];
        $nm = $a['suplier_nama'];
        $alamat = $a['suplier_alamat'];
        $notelp = $a['suplier_notelp'];
        ?>
        <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Suplier</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'suplier/edit_suplier' ?>">
                        <div class="modal-body">
                            <input name="kode" type="hidden" value="<?php echo $id; ?>">

                            <div class="form-group row">
                                <label class="control-label col-3">Nama Suplier</label>
                                <div class="col-9">
                                    <input name="nama" class="form-control" type="text" placeholder="Nama Suplier..." value="<?php echo $nm; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-3">Alamat</label>
                                <div class="col-9">
                                    <input name="alamat" class="form-control" type="text" placeholder="Alamat..." value="<?php echo $alamat; ?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-3">No Telp/ HP</label>
                                <div class="col-9">
                                    <input name="notelp" class="form-control" type="text" placeholder="No Telp/HP..." value="<?php echo $notelp; ?>" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-square btn-primary">Update</button>
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
        $id = $a['suplier_id'];
        $nm = $a['suplier_nama'];
        $alamat = $a['suplier_alamat'];
        $notelp = $a['suplier_notelp'];
        $status = $a['status'];
        ?>
        <div id="modalSwicth<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Aktif dan Nonaktifkan Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url() . 'suplier/switch' ?>">
                        <div class="modal-body">
                            <p>Apakah anda Yakin akan Aktif/ Nonaktifkan <b><?php echo $nm; ?></b>..?</p>
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