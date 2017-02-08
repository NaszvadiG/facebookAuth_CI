<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE | Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/plugins/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/plugins/ionicons/css/ionicons.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/plugins/select2/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/dist/css/AdminLTE.css">
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/dist/css/custom_style.css">
	<!-- AdminLTE Skins -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/dist/css/skins/skin-blue.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?=base_url();?>app/adminlte/plugins/datepicker/datepicker3.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini fixed">
	<div class="wrapper">

		<?=$this->load->view('templates/header');?>

		<div class="content-wrapper">
			<?=$this->load->view('templates/breadcumb');?>

			<?=$this->load->view($content);?>
		</div>

		<?=$this->load->view('templates/footer');?>

	</div>

	<!-- jQuery 2.2.3 -->
	<script src="<?=base_url();?>app/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?=base_url();?>app/adminlte/plugins/jQueryUI/jquery-ui.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="<?=base_url();?>app/adminlte/bootstrap/js/bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="<?=base_url();?>app/adminlte/plugins/select2/select2.min.js"></script>
	<!-- Datepicker -->
	<script src="<?=base_url();?>app/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>app/adminlte/plugins/fastclick/fastclick.min.js"></script>
	<!-- SlimScroll -->
	<script src="<?=base_url();?>app/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
	
	<!-- AdminLTE App -->
	<script src="<?=base_url();?>app/adminlte/dist/js/app.min.js"></script>

</body>
</html>
