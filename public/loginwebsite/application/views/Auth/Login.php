<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?= base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url('assets'); ?>/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?= base_url('assets'); ?>/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/primary.png')">
		<!--   Creative Tim Branding   -->
		<a href="http://bapenda.com">
			<div class="logo-container">
				<div class="logo">
					<img src="<?= base_url('assets'); ?>/img/bapenda.jpg">
				</div>
				<div class="brand">
					BAPENDA
				</div>
			</div>
		</a>

		<!--   Big container   -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<!--      Wizard container        -->
					<div class="wizard-container">
						<div class="card wizard-card" data-color="blue" id="wizard">

							<?= $this->session->flashdata('message'); ?>
							<form action="<?= base_url('Auth/Index'); ?>" method="post">
								<!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

								<div class="wizard-header">
									<h3 class="wizard-title">
										Login Form
									</h3>
									<h5></h5>
								</div>
								<div class="wizard-navigation">
									<ul>
										<li><a href="#details" data-toggle="tab">Let's Start.</a></li>

									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane" id="details">
										<div class="row">
											<div class="col-sm-12">
												<h4 class="info-text"></h4>
											</div>
											<div class="col-sm-12">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Username</label>
														<input name="username" id="username" type="text" class="form-control">
														<?= form_error('username', '<small 
                                                class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock_outline</i>
													</span>
													<div class="form-group label-floating">
														<label class="control-label">Your Password</label>
														<input name="password" id="password" type="password" class="form-control">
														<?= form_error('password', '<small 
                                                class="text-danger pl-3">', '</small>'); ?>
													</div>
												</div>
												<div class="wizard-footer">
													<div class="pull-right">
														<input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' value='Login' />
													</div>

							</form>
						</div>
					</div> <!-- wizard container -->
				</div>
			</div> <!-- row -->
		</div> <!--  big container -->

</body>
<!--   Core JS Files   -->
<script src="<?= base_url('assets'); ?>/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets'); ?>/js/jquery.bootstrap.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?= base_url('assets'); ?>/js/material-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?= base_url('assets'); ?>/js/jquery.validate.min.js"></script>

</html>