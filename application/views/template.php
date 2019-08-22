    <!DOCTYPE html>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="POS - Point of Sale Management System">
        <meta name="author" content="Agus Firman">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>POS Application</title>
        <link rel="icon" href="<?= base_url() ?>assets/icons/logo.png" type="image/x-icon">

        <link href="<?= base_url() ?>assets/css/coreui-icons.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/simple-line-icons.css" rel="stylesheet">

        <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/css/pace.min.css" rel="stylesheet">

        <link href="<?= base_url() ?>assets/css/dataTables.bootstrap4.css" />
        <link href="<?= base_url() ?>assets/css/bootstrap-select.css" rel="stylesheet">
        <script src="<?= base_url() ?>assets/js/jquery.js"></script>

        <link href="<?= base_url() ?>assets/css/jquery.dataTables.min.css" />
        <link href="<?= base_url() ?>assets/css/buttons.dataTables.min.css" />
    </head>

    <?php
    $h = $this->session->userdata('group_id')->id;
    $u = $this->session->userdata('email');
    ?>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed">
        <header class="app-header navbar">
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- top menu -->
            <a class="navbar-brand" href="#">
                <img class="navbar-brand-full" src="<?= base_url() ?>assets/images/logo.png" width="89" height="25" alt="POS Logo">
            </a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <img class="img-avatar" src="<?= base_url() ?>assets/img/user.png" alt="<?= $u ?>">
                        <?= $u; ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="change_password"> -->
                        <!-- <i class="fa fa-shield"></i> Change Password</a> -->
                        <a class="dropdown-item" href="<?= base_url() ?>logout">
                            <i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
            </button>
        </header>
        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <?php
                        if ($h == 1) {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                                <i class="nav-icon icon-user"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('users') ?>">
                                <i class="nav-icon icon-user"></i>
                                Users
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('suplier') ?>">
                                <i class="nav-icon icon-user-following"></i>
                                Supplier
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('kategori') ?>">
                                <i class="nav-icon icon-puzzle"></i>
                                Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('pembelian') ?>">
                                <i class="nav-icon icon-list"></i>
                                Pembelian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('laporan') ?>">
                                <i class="nav-icon icon-list"></i>
                                Laporan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('grafik') ?>">
                                <i class="nav-icon icon-list"></i>
                                Grafik
                            </a>
                        </li> -->
                        <?php }
                        if ($h == 1 || $h = 2) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('barang') ?>">
                                <i class="nav-icon icon-puzzle"></i>
                                Barang
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>
            <main class="main">
                <div class="container-fluid mt-2">
                    <?php
                    echo $contents;
                    ?>

                </div>
            </main>
        </div>
        <footer class="app-footer">
            <div>
                <a href="#">Inventory System</a>
                <span>© 2019 .</span>
            </div>
            <div class="ml-auto">
                <span>Powered by</span>
                <a href="#">Agus Firman</a>
            </div>
        </footer>

        <style>
            .dataTables_filter,
            .dataTables_paginate {
                float: right;
                text-align: right;
            }

            .dt-buttons {
                margin-top: 10px
            }
        </style>


        <script src="<?= base_url() ?>assets/js/jquery-3.3.1.js"></script>
        <script src="<?= base_url() ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>assets/js/buttons.flash.min.js"></script>
        <script src="<?= base_url() ?>assets/js/jszip.min.js"></script>
        <script src="<?= base_url() ?>assets/js/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>assets/js/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>assets/js/buttons.colVis.min.js"></script>
        <script src="<?= base_url() ?>assets/js/buttons.bootstrap4.min.js"></script>


        <script src="<?= base_url() ?>assets/js/grafik/highcharts.js"></script>
        <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/pace.min.js"></script>
        <script src="<?= base_url() ?>assets/js/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>assets/js/coreui.min.js"></script>
        <script src="<?= base_url() ?>assets/js/dataTables.bootstrap4.js"></script>
        <script src="<?= base_url() ?>assets/js/custom-tooltips.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap-select.js"></script>
        <script src="<?php echo base_url() . 'assets/js/jquery.price_format.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/js/moment.js' ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var table = $('#table_barang').DataTable({
                    lengthChange: false,
                    buttons: ['excel', 'pdf', 'colvis']
                });

                table.buttons().container().appendTo('#table_barang_wrapper .col-md-6:eq(0)');
                $('select').selectpicker();
            });
        </script>
    </body>

    </html>