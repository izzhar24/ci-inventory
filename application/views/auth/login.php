<!DOCTYPE html>
<html>

<head>
  <title>Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="POS System">
  <meta name="author" content="Agus Firman">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/icons/logo.png" type="image/x-icon">
  <!-- Bootstrap -->
  <link href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet">
  <!-- styles -->
  <link href="<?php echo base_url() . 'assets/css/stylesl.css' ?>" rel="stylesheet">

  <link href="<?= base_url() ?>assets/css/simple-line-icons.css" rel="stylesheet">

  <link href="<?= base_url() ?>assets/css/coreui-icons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-body">
              <h1><?php echo lang('login_heading'); ?></h1>
              <p class="text-muted"><?php echo lang('login_subheading'); ?></p>

              <?php
              $msg =  $this->session->flashdata('msg');
              if ($msg) {
                ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert" id="infoMessage">
                <strong><?php echo $msg; ?></strong>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <?php

              }
              ?>
              <?php echo form_open("auth/login"); ?>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <input class="form-control" type="text" name="identity" placeholder="Username" required>
              </div>

              <div class="input-group mb-4">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                </div>
                <input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
              </div>

              <?php echo lang('login_remember_label', 'remember'); ?>
              <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
              <div class="row">
                <div class="col-6">
                  <button class="btn btn-primary px-4" type="submit">Login</button>
                </div>
                <div class="col-6 text-right">
                  <a class="btn btn-link px-0" href="<?= base_url() ?>register">Register ?</a>
                </div>
              </div>

              <?php echo form_close(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>