<!DOCTYPE html>
<html>
<head>
<title>AdminLTE | Selamat Datang</title>
<link rel="stylesheet" href="<?=base_url();?>app/adminlte/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url();?>app/adminlte/dist/css/AdminLTE.css">
<script src="<?=base_url();?>app/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
		<div style="margin-bottom:10px;" class="login-logo">
			<a href="#">Welcome</a>
		</div>

		<div class="login-box-body">
			<p class="login-box-msg">Sign in to start your session</p>

			<?php print_r($this->session->userdata('userData')); ?>

			<form id="form" action="" method="post">
	            <div class="form-group has-feedback">
				    <input class="form-control" autofocus autocomplete="off" type="text" name="user_name" id="user_name" placeholder="Enter username" />
				    <span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
				    <input class="form-control" type="password" autocomplete="off" name="user_password" id="user_password" placeholder="Enter password" />
				    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
	            
				<div class="row">
					<div class="col-xs-4">
						<button disabled type="button" id="submit" name="submit" class="btn btn-danger btn-block btn-flat">
							<i class="fa fa-sign-in"></i> Sign In
						</button>
					</div>
					<div class="col-xs-8">
						<a href="<?=$authUrl;?>" class="btn btn-primary btn-block btn-flat">
							<i class="fa fa-facebook"></i> Login with Facebook
						</a>
					</div>
				</div>
	        </form>

			<div class="social-auth-links text-center">
			  	<p><br>Copyright © 2016 - 2017 Ricky Kusriana Subagja</p>
			</div>
		</div>
    </div>

    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url();?>app/adminlte/bootstrap/js/bootstrap.min.js"></script>
	<!-- UI Toastr-->
	<link href="<?=base_url();?>app/ext/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css">
    <script src="<?=base_url();?>app/ext/bootstrap-toastr/toastr.min.js"></script>
  </body>
</html>
