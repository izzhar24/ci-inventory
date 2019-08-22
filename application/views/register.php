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
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <a class="float-right" href="<?= base_url() ?>login">
                            <i class="icon-action-undo"></i>
                            Login</a>
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <?php
                        // $msg =  $this->session->flashdata('msg');
                        if ($message) {
                            ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="infoMessage">
                            <strong><?php echo $message; ?></strong>
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <?php

                        }
                        ?>
                        <?php echo form_open("register"); ?>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-user"></i>
                                </span>
                            </div>
                            <?php echo form_input($first_name); ?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-user"></i>
                                </span>
                            </div>
                            <?php echo form_input($last_name); ?>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <?php echo form_input($email); ?>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-lock"></i>
                                </span>
                            </div>
                            <?php echo form_input($password); ?>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="icon-lock"></i>
                                </span>
                            </div>
                            <?php echo form_input($password_confirm); ?>
                        </div>
                        <button class="btn btn-block btn-success" type="submit">Create Account</button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>