<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="Blas Eddy Cruz Mamani">
	<title>Formulario Registro</title>
	<link href="<?php echo base_url();?>assets/libs/img/UPEA.png" rel="icon">
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/form2/css/bootstrap.min.css">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/form2/css/font-awesome.min.css">
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/form2/css/contact-form.css" type="text/css">	
	
</head>

<body>
	
	<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										<div class="item-info">
											<h2 class="item-title text-center">PARA REALIZAR EL TEST INTRODUZCA LOS DATOS CORRESPONDIENTES</h2>
											
										</div><!--End item-info -->
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">
								
								
								<form id="contactForm" name="contactform" data-toggle="validator" class="popup-form" method="POST" action="<?php echo base_url(Hasher::make(77))?>">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtCI" id="fname" placeholder="Cedula de Identidad" class="form-control" type="text" required data-error="Por favor ingresa tu CI"> 
														<div class="input-group-icon"><i class="fa fa-share"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtNombres" id="fname" placeholder="Nombres" class="form-control" type="text" required data-error="Por favor ingresa tu Nombre"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtApellidos" id="email" placeholder="Apellidos" class="form-control" type="text" required data-error="Por favor ingresa tus Apellidos">
														<div class="input-group-icon"><i class="fa fa-user-o"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtCelular" id="phone" placeholder="Celular" class="form-control" type="text" required data-error="Por favor ingresa tu número de Celular">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtColegio" id="subject" placeholder="Colegio" class="form-control" type="text" required data-error="Por favor ingresa el dato">
														<div class="input-group-icon"><i class="fa fa-university"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtDepartamento" id="subject" placeholder="Departamento" class="form-control" type="text" required data-error="Por favor ingresa el dato">
														<div class="input-group-icon"><i class="fa fa-map-marker"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="txtProvincia" id="subject" placeholder="Provincia" class="form-control" type="text" required data-error="Por favor ingresa el dato">
														<div class="input-group-icon"><i class="fa fa-street-view"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group last col-sm-12">
														<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-list'></i> Realizar test de Inteligencia</button>
													</div><!-- end form-group -->
													<div class="clearfix"></div>
												</div><!-- end row -->
											</form><!-- end form -->
								</div>
							</div><!--End row -->
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
	
	<div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>	
	
	<div id="footer" class="footer">
		<div class="container">			
			
			<div class="row">					
				<div class="footer-top col-sm-12">
					<p class="text-center copyright">&copy; 2020 <a href="edinson1995cruz@gmail.com" class="footer-site-link">B. Eddy Cruz M.</a> todos los derechos reservados. </p>
				</div><!-- end col --> 
			</div><!-- end row -->
			
		</div><!--End container -->
	</div>
	
	<a href="#" class="scrollup"><i class="fa fa-arrow-circle-up"></i></a>
		
	<!-- jQuery Library -->
	<script src="<?php echo base_url();?>assets/form2/js/jquery-3.2.1.min.js"></script>	
	<!-- Popper js -->
	<script src="<?php echo base_url();?>assets/form2/js/popper.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="<?php echo base_url();?>assets/form2/js/bootstrap.min.js"></script>
	<!-- Form Validator -->
	<script src="<?php echo base_url();?>assets/form2/js/validator.min.js"></script>
	<!-- Contact Form Js -->
	<script src="<?php echo base_url();?>assets/form2/js/contact-form.js"></script>
	
</body>
</html>