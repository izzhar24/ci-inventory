<div class="card">
    <div class="card-header">
        <div class="card-title">
            Kategori Barang
        </div>
    </div>
    <div class="card-body">

        <table class="table table-bordered table-condensed" style="font-size:11px;" id="mydata">
            <thead>
                <tr>
                    <th width="1%">No</th>
                    <th>Kategori</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($data->result_array() as $a) :
                    $no++;
                    $id = $a['kategori_id'];
                    $nm = $a['kategori_nama'];
                    ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $no; ?></td>
                        <td><?php echo $nm; ?></td>
                        <td style="text-align:center;">
                            <a class="btn btn-sm btn-square btn-warning" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit"><span class="fa fa-edit"></span></a>
                            <a class="btn btn-sm btn-square btn-danger" href="#modalHapusPelanggan<?php echo $id ?>" data-toggle="modal" title="Hapus"><span class="fa fa-close"></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-sm btn-square btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Tambah Kategori</a>
    </div>
</div>
<!-- /.row -->
<!-- ============ MODAL ADD =============== -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Tambah Kategori</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'kategori/tambah_kategori' ?>">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="control-label col-3">Nama Kategori</label>
                        <div class="col-9">
                            <input name="kategori" class="form-control" type="text" placeholder="Input Nama Kategori..." required>
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
    $id = $a['kategori_id'];
    $nm = $a['kategori_nama'];
    ?>
    <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="myModalLabel">Edit Kategori</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'kategori/edit_kategori' ?>">
                    <div class="modal-body">
                        <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        <div class="form-group row">
                            <label class="control-label col-3">Kategori</label>
                            <div class="col-9">
                                <input name="kategori" class="form-control" type="text" value="<?php echo $nm; ?>" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn  btn-square btn-primary">Update</button>
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
    $id = $a['kategori_id'];
    $nm = $a['kategori_nama'];
    ?>
    <div id="modalHapusPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Hapus Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form class="form-horizontal" method="post" action="<?php echo base_url() . 'kategori/hapus_kategori' ?>">
                    <div class="modal-body">
                        <p>Yakin mau menghapus data..?</p>
                        <input name="kode" type="hidden" value="<?php echo $id; ?>">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-square btn-primary">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
?>