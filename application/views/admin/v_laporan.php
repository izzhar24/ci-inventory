 <div class="card">
     <div class="card-header">
         <div class="card-title">Data Laporan</div>
     </div>
     <div class="card-body">
         <table class="table table-bordered table-condensed" style="font-size:12px;" id="mydata">
             <thead>
                 <tr>
                     <th style="text-align:center;width:40px;">No</th>
                     <th>Laporan</th>
                     <th style="width:100px;text-align:center;">Aksi</th>
                 </tr>
             </thead>
             <tbody>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">1</td>
                     <td style="vertical-align:middle;">Laporan Data Barang</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'laporan/lap_data_barang' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">2</td>
                     <td style="vertical-align:middle;">Laporan Stok Barang</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'laporan/lap_stok_barang' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">3</td>
                     <td style="vertical-align:middle;">Laporan Penjualan</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="<?php echo base_url() . 'laporan/lap_data_penjualan' ?>" target="_blank"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">4</td>
                     <td style="vertical-align:middle;">Laporan Penjualan PerTanggal</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="#lap_jual_pertanggal" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">5</td>
                     <td style="vertical-align:middle;">Laporan Penjualan PerBulan</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="#lap_jual_perbulan" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">6</td>
                     <td style="vertical-align:middle;">Laporan Penjualan PerTahun</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="#lap_jual_pertahun" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

                 <tr>
                     <td style="text-align:center;vertical-align:middle">7</td>
                     <td style="vertical-align:middle;">Laporan Laba/Rugi</td>
                     <td style="text-align:center;">
                         <a class="btn btn-sm btn-default" href="#lap_laba_rugi" data-toggle="modal"><span class="fa fa-print"></span> Print</a>
                     </td>
                 </tr>

             </tbody>
         </table>
     </div>
 </div>


 <!-- ============ MODAL ADD =============== -->
 <div class="modal fade" id="lap_jual_pertanggal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel">Pilih Tanggal</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             </div>
             <form class="form-horizontal" method="post" action="<?php echo base_url() . 'laporan/lap_penjualan_pertanggal' ?>" target="_blank">
                 <div class="modal-body">

                     <div class="form-group row">
                         <label class="control-label col-3">Tanggal</label>
                         <div class="col-9">
                             <input type='date' name="tgl" class="form-control" value="" placeholder="Tanggal..." required />
                         </div>
                     </div>


                 </div>

                 <div class="modal-footer">
                     <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <button class="btn btn-primary btn-square"><span class="fa fa-print"></span> Cetak</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- ============ MODAL ADD =============== -->
 <div class="modal fade" id="lap_jual_perbulan" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel">Pilih Bulan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             </div>
             <form class="form-horizontal" method="post" action="<?php echo base_url() . 'laporan/lap_penjualan_perbulan' ?>" target="_blank">
                 <div class="modal-body">

                     <div class="form-group row">
                         <label class="control-label col-3">Bulan</label>
                         <div class="col-9">
                             <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                             <?php foreach ($jual_bln->result_array() as $k) {
                                    $bln = $k['bulan'];
                                    ?>
                                 <option><?php echo $bln; ?></option>
                             <?php } ?>
                             </select>
                         </div>
                     </div>


                 </div>

                 <div class="modal-footer">
                     <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <button class="btn btn-primary btn-square"><span class="fa fa-print"></span> Cetak</button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <!-- ============ MODAL ADD =============== -->
 <div class="modal fade" id="lap_jual_pertahun" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel">Pilih Tahun</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             </div>
             <form class="form-horizontal" method="post" action="<?php echo base_url() . 'laporan/lap_penjualan_pertahun' ?>" target="_blank">
                 <div class="modal-body">

                     <div class="form-group row">
                         <label class="control-label col-3">Tahun</label>
                         <div class="col-9">
                             <select name="thn" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Tahun" data-width="80%" required />
                             <?php foreach ($jual_thn->result_array() as $t) {
                                    $thn = $t['tahun'];
                                    ?>
                                 <option><?php echo $thn; ?></option>
                             <?php } ?>
                             </select>
                         </div>
                     </div>


                 </div>

                 <div class="modal-footer">
                     <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <button class="btn btn-primary btn-square"><span class="fa fa-print"></span> Cetak</button>
                 </div>
             </form>
         </div>
     </div>
 </div>


 <!-- ============ MODAL ADD =============== -->
 <div class="modal fade" id="lap_laba_rugi" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="myModalLabel">Pilih Bulan</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
             </div>
             <form class="form-horizontal" method="post" action="<?php echo base_url() . 'laporan/lap_laba_rugi' ?>" target="_blank">
                 <div class="modal-body">

                     <div class="form-group row">
                         <label class="control-label col-3">Bulanya</label>
                         <div class="col-9">
                             <select name="bln" class="selectpicker show-tick form-control" data-live-search="true" title="Pilih Bulan" data-width="80%" required />
                             <?php foreach ($jual_bln->result_array() as $k) {
                                    $bln = $k['bulan'];
                                    ?>
                                 <option><?php echo $bln; ?></option>
                             <?php } ?>
                             </select>
                         </div>
                     </div>


                 </div>

                 <div class="modal-footer">
                     <button class="btn btn-square btn-danger" data-dismiss="modal" aria-hidden="true">Tutup</button>
                     <button class="btn btn-primary btn-square"><span class="fa fa-print"></span> Cetak</button>
                 </div>
             </form>
         </div>
     </div>
 </div>


 <!--END MODAL-->

 <script type="text/javascript">
     $(document).ready(function() {
         $('#mydata').DataTable();
     });
 </script>