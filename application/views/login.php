<html class="no-js" lang="es">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 16:38:11 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login-Test</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_login/demo/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_login/demo/css/fontawesome-all.min.css">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_login/demo/font/flaticon.css">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets_login/demo/style.css">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<div id="preloader" class="preloader">
		<div class='inner'>
			<div class='line1'></div>
			<div class='line2'></div>
			<div class='line3'></div>
		</div>
	</div>
	<section class="fxt-template-animation fxt-template-layout18" data-bg-image="<?php echo base_url(); ?>assets/assets_login/demo/img/figure/banner6.jpg">
		<div class="fxt-content">
			<div class="fxt-header">
				<!-- imagen  -->
				<img src="<?php echo base_url(); ?>assets/assets_login/demo/img/vicerrectorado.png" alt="Logo" width="300">
			</div>
			<h3 style="color: white;" class="text-center">SISTEMA DE TEST VOCACIONAL</h3>
			<div class="fxt-form">
				<p>Accede a tu cuenta</p>
				<form id="session_system" method="post">
					<div class="form-group">
						<div class="position-relative has-icon-right">
							<label for="exampleInputUsername" class="sr-only">USUARIO</label>
							<input type="text" id="exampleInputUsername" class="form-control form-control-rounded" maxlength="50" name="identity" placeholder="Ingresar usuario" required>
							<div class="form-control-position">
								<i class="icon-user"></i>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="position-relative has-icon-right">
							<label for="exampleInputPassword" class="sr-only">CONTRASEÑA</label>
							<input type="password" id="exampleInputPassword" class="form-control form-control-rounded" name="password" placeholder="Ingresar contraseña" required>
							<div class="form-control-position">
								<i class="icon-lock"></i>
							</div>
						</div>
					</div>

					<div class="form-row mr-0 ml-0">
						<div class="form-group col-lg-12 col-sm-12" style="text-align:center;">
							<a href="javascript:void(0);" id="captImg"> </a>
						</div>

						<div class="form-group col-12">
							<input type="text" maxlength="6" class="form-control form-control-rounded" name="tmptxt" style="text-transform: uppercase;" placeholder="Ingresar captcha..." required>
							<div class="form-control-position">
								<i class="icon-lock"></i>
							</div>
						</div>
					</div>

					<div class="form-group">
						<span id="error"></span>
					</div>

					<button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">INGRESAR</button>

					<a type="button" class="shadow-primary btn-round btn-block waves-effect waves-light" href="<?php echo base_url(Hasher::make(270)) ?>">VOLVER A INICIO</a>
				</form>

			</div>

		</div>
	</section>
	<!-- jquery-->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/jquery-3.5.0.min.js"></script>
	<!-- Popper js -->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/popper.min.js"></script>
	<!-- Bootstrap js -->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/bootstrap.min.js"></script>
	<!-- Imagesloaded js -->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/imagesloaded.pkgd.min.js"></script>
	<!-- Validator js -->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/validator.min.js"></script>
	<!-- Custom Js -->
	<script src="<?php echo base_url(); ?>assets/assets_login/demo/js/main.js"></script>
	<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<!--Start Back To Top Button-->
	<!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
	<!--End Back To Top Button-->
	</div>
	<!--wrapper-->
	<script src="<?php echo base_url(); ?>assets/admin/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/assets/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/assets/js/bootstrap.min.js"></script>
	<script>
		$(document).on("ready", inicio());

		function inicio() {
			$.get('<?php echo base_url(); ?>ca', function(data) {
				$('#captImg').html(data);
			});
		}
		$(document).ready(function() {
			$('#captImg').on('click', function() {
				inicio()
			});
		});
		$("#session_system").submit(function(event) {
			event.preventDefault();
			$.ajax({
				url: '<?php echo base_url(); ?>login',
				type: 'POST',
				data: $("form").serialize(),
				success: function(dato) {
					var valores = eval(dato);
					if (valores[0] == 2) {
						$("#error").html("<b style='color: #ff0000;'>Error de captcha</b>");
					} else {
						if (valores[0] == 1) {
							$("#error").html("<b style='color: #ff0000;'>Error de usuario y contraseña</b>");
						} else {
							window.location = "<?php echo base_url(); ?>Auth";
						}
					}
				}
			});
		});
	</script>




</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-18.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 16:38:17 GMT -->

</html>