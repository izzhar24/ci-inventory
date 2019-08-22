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
			<div class="col-md-8">
				<div class="card-group">
					<div class="card p-4">
						<div class="card-body">
							<h1>Login</h1>
							<p class="text-muted">Sign In to your account</p>

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
							<form action="<?= base_url() ?>login/cekuser" method="post">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-user"></i>
										</span>
									</div>
									<input class="form-control" type="text" name="username" placeholder="Username" required>
								</div>
								<div class="input-group mb-4">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="icon-lock"></i>
										</span>
									</div>
									<input class="form-control" type="password" name="password" placeholder="Password" style="margin-bottom:1px;" required>
								</div>
								<div class="row">
									<div class="col-6">
										<button class="btn btn-primary px-4" type="submit">Login</button>
									</div>
									<div class="col-6 text-right">
										<button class="btn btn-link px-0" type="button">Forgot password?</button>
									</div>
								</div>
						</div>
						</form>
					</div>
					<div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
						<div class="card-body text-center">
							<div>
								<h2>POINT OF SALE </h2>
								<p>System Application for Transaction </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

</body>

</html>